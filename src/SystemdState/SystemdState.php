<?php

namespace CyberLine\SystemdState;

use CyberLine\SystemdState\Types\AbstractType;
use CyberLine\SystemdState\Types\TypesInterface;

class SystemdState
{
    private static $command = '/bin/systemctl show %s --no-pager';

    private $services = [];

    private $reports = [];

    /**
     * SystemdState constructor.
     * @param array $services
     */
    public function __construct(array $services = [])
    {
        array_walk($services, [$this, 'addCheckUnit']);
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
     * @return array
     */
    public function getSystemdInfo()
    {
        $this->addCheckUnit('');

        return $this->getReport('systemd');
    }

    /**
     * @param string|null $unitName
     * @return array
     */
    public function getReport(?string $unitName = null): array
    {
        if (empty($this->reports)) {
            $this->checkState();
        }

        if (!$unitName) {
            return $this->reports;
        }

        if (array_key_exists($unitName, $this->reports)) {
            return [$this->reports[$unitName]];
        }

        $retval = [];
        foreach (TypesInterface::ALLOWED_TYPES as $suffix) {
            $tempName = $unitName . '.' . $suffix;
            if (array_key_exists($tempName, $this->reports)) {
                $retval[$tempName] = $this->reports[$tempName];
                // Don't break here, as we can have the same unit in different types (e.g. service and timer)
            }
        }

        if (count($retval)) {
            return $retval;
        }

        throw new \RangeException(sprintf('No report found for `%s`. Maybe misspelled?', $unitName));
    }

    /**
     * @param String $string
     * @return SystemdState
     */
    public function checkFromString(String $string): self
    {
        $explode = explode(PHP_EOL . PHP_EOL, $string);

        if (count($explode) < 1 || strlen($string) === 0) {
            throw new \InvalidArgumentException('Invalid payload passed to ' . __FUNCTION__);
        }

        array_walk($explode, [$this, 'handleServiceResponse']);

        return $this;
    }

    private function checkState(): void
    {
        if (!count($this->services)) {
            throw new \InvalidArgumentException('You have to add at least one unit to check!');
        }

        $command = sprintf(self::$command, implode(' ', $this->services));
        $exec = shell_exec($command);

        if ($exec === null) {
            throw new \RuntimeException(sprintf('There was an error executing the command: `%s`', $command));
        }

        $this->checkFromString($exec);
    }

    /**
     * @param string $service
     */
    private function handleServiceResponse(string $service): void
    {
        $split = explode(PHP_EOL, $service);
        $type = TypesInterface::TYPE_SYSTEMD;

        preg_match('/Id=(?<name>.*)/m', $service, $matches);

        if (!empty($matches)) {
            $explode = explode('.', $matches['name']);
            $type = $explode[count($explode) - 1];
        }

        if (!in_array($type, TypesInterface::ALLOWED_TYPES)) {
            throw new \RuntimeException(sprintf('Type `%s` is not a valid / known type.', $type));
        }

        $className = __NAMESPACE__ . '\\Types\\' . ucfirst($type);
        /** @var AbstractType $type */
        $type = new $className();

        array_walk($split, [$this, 'handleLine'], $type);
        $this->reports[$type->getId()] = $type;
    }

    /**
     * @param string $line
     * @param int $key
     * @param TypesInterface $type
     */
    private function handleLine(string $line, int $key, TypesInterface $type): void
    {
        $explode = explode('=', $line);
        $propertyName = $explode[0];

        if (empty($propertyName)) {
            return;
        }

        $type->{'set' . $propertyName}(Parser::parseValueByContent($explode));
    }
}
