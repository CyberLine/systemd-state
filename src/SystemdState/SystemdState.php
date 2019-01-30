<?php

namespace CyberLine\SystemdState;

class SystemdState
{
    private static $command = '/bin/systemctl show %s --no-page';

    private $services = [];

    private $reports = [];

    /**
     * SystemdState constructor.
     * @param array $services
     */
    public function __construct(array $services = [])
    {
        foreach ($services as $service) {
            $this->addCheckUnit($service);
        }
    }

    /**
     * @param string $name
     * @return SystemdState
     */
    public function addCheckUnit(string $name): self
    {
        $this->services[] = escapeshellcmd($name);

        return $this;
    }

    public function addAllUnits(): self
    {
        $this->addCheckUnit('*');

        return $this;
    }

    /**
     * @param null $unitName
     * @return array
     */
    public function getReport($unitName = null): array
    {
        if (!$this->reports) {
            $this->checkState();
        }

        if (!$unitName) {
            return $this->reports;
        }

        if (array_key_exists($unitName, $this->reports)) {
            return [$this->reports[$unitName]];
        }

        $retval = [];
        foreach ([
             'service',
             'target',
             'timer',
             'slice',
             'socket',
             'path',
             'device',
             'mount',
             'automount',
             'scope',
             'swap',
         ] as $suffix) {
            $tempName = $unitName . '.' . $suffix;
            if (array_key_exists($tempName, $this->reports)) {
                $retval[$tempName] = $this->reports[$tempName];
            }
        }

        if (count($retval)) {
            return $retval;
        }

        throw new \RangeException(sprintf('No report found for `%s`. Maybe misspelled?', $unitName));
    }

    private function checkState()
    {
        if (!count($this->services)) {
            throw new \InvalidArgumentException('You have to add at least one unit to check!');
        }

        $command = sprintf(self::$command, implode(' ', $this->services));
        $exec = shell_exec($command);

        if ($exec === null) {
            throw new \RuntimeException(sprintf('There was an error executing the command: `%s`', $command));
        }

        $services = explode(PHP_EOL . PHP_EOL, $exec);

        foreach ($services as $service) {
            $this->handleServiceResponse($service);
        }
    }

    /**
     * @param string $service
     */
    private function handleServiceResponse(string $service)
    {
        $split = explode(PHP_EOL, $service);

        preg_match('/Id=(?<name>.*)/m', $service, $matches);
        if (!$matches) {
            $type = 'Systemd';
        } else {
            $explode = explode('.', $matches['name']);
            $type = ucfirst($explode[count($explode) - 1]);
        }

        $class = 'CyberLine\SystemdState\Types\\' . $type;
        $class = new $class();

        foreach ($split as $line) {
            $explode = explode('=', $line);
            if (empty($explode[0])) {
                continue;
            }

            $class->{'set' . $explode[0]}(Parser::parseValueByContent($explode));
        }

        $this->reports[$class->getId()] = $class;
    }
}
