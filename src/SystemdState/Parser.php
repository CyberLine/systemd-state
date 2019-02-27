<?php

namespace CyberLine\SystemdState;

use CyberLine\SystemdState\Model\ExecCommand;

class Parser
{
    private static $arrayTypes = [
        'After',
        'Before',
        'Requires',
        'Conflicts',
        'WantedBy',
        'Names',
        'Wants',
        'RequiredBy',
        'RequiredByOverridable',
        'RequiresMountsFor',
        'ReadWritePaths',
        'ReadOnlyPaths',
        'DropInPaths',
        'ConflictedBy',
        'Documentation',
        'BindsTo',
        'Triggers',
        'Features',
        'UnitPath',
        'BoundBy',
    ];

    private static $execTypes = [
        'ExecReload',
        'ExecStartPre',
        'ExecStart',
        'ExecStartPost',
        'ExecStop',
        'ExecStopPost',
    ];

    /**
     * @param array $values
     * @return array|bool|ExecCommand|\DateTimeImmutable|int|mixed|null
     */
    public static function parseValueByContent(array $values)
    {
        if (!array_key_exists(1, $values)) {
            return null;
        }

        $key = $values[0];

        if (null !== ($value = self::checkByKey($key, $values))) {
            return $value;
        }

        if (null !== ($value = self::checkByValue($values[1]))) {
            return $value;
        }

        return $values[1];
    }

    /**
     * @param string $key
     * @param array $values
     * @return array|ExecCommand|\DateTimeImmutable|null
     */
    private static function checkByKey(string $key, array $values)
    {
        if ($key === 'Environment') {
            return self::parseEnvironmentLine($values);
        }

        if (in_array($key, self::$execTypes)) {
            array_shift($values);
            return self::parseExecLine(implode(' ', $values));
        }

        if (preg_match('/Timestamp$/', $key)) {
            return \date_create_immutable_from_format('* Y-m-d H:i:s e', $values[1]);
        }

        if (in_array($key, self::$arrayTypes)) {
            return explode(' ', $values[1]);
        }

        return null;
    }

    /**
     * @param string $value
     * @return bool|int|null
     */
    private static function checkByValue(string $value)
    {
        if ($value === '0') {
            return 0;
        }

        if ($value === 'yes') {
            return true;
        }

        if ($value === 'no') {
            return false;
        }

        if (preg_match('/^[1-9][0-9]*$/', $value) && $value < PHP_INT_MAX) {
            return (int)$value;
        }

        return null;
    }

    /**
     * @param string $line
     * @return ExecCommand
     */
    private static function parseExecLine(string $line): ExecCommand
    {
        $pattern = "/^{[ ](?<command>.*)[ ]}$/";
        preg_match($pattern, $line, $matches);

        $execCommand = new ExecCommand;
        if (!array_key_exists('command', $matches)) {
            $execCommand->path = $line;
            return $execCommand;
        }

        $explode = array_map('trim', explode(';', $matches['command']));
        array_walk($explode, function (string $value, int $key, ExecCommand $execCommand) {
            $split = explode('=', $value);
            $array = self::parseExecDetail($split);
            if (count($array)) {
                $execCommand->{$array[0]} = $array[1];
            }
        }, $execCommand);

        return $execCommand;
    }

    /**
     * @param array $values
     * @return array
     */
    private static function parseExecDetail(array $values): array
    {
        $index = $values[0];

        if (in_array($index, ['path', 'pid', 'code', 'status'])) {
            return [$index, self::parseValueByContent($values)];
        }

        if ($index === 'argv[]') {
            $explode = explode(' ', $values[1]);
            array_shift($explode);

            return ['argv', implode(' ', $explode),];
        }

        if ($index === 'start_time') {
            return ['startTime', $values[1]];
        }

        if ($index === 'stop_time') {
            return ['stopTime', $values[1]];
        }

        if ($index === 'ignore_errors') {
            return ['ignoreErrors', self::parseValueByContent($values)];
        }

        return [];
    }

    /**
     * @param array $values
     * @return array
     */
    private static function parseEnvironmentLine(array $values): array
    {
        array_shift($values);
        $environments = [];

        foreach (explode(' ', implode('=', $values)) as $environment) {
            $explode = explode('=', $environment);
            $environments[$explode[0]] = self::parseValueByContent($explode);
        }

        return $environments;
    }

    /**
     * Used by PHPUnit
     *
     * @return array
     * @codeCoverageIgnore
     */
    public static function getArrayTypes(): array
    {
        return self::$arrayTypes;
    }

    /**
     * Used by PHPUnit
     *
     * @return array
     * @codeCoverageIgnore
     */
    public static function getExecTypes(): array
    {
        return self::$execTypes;
    }
}
