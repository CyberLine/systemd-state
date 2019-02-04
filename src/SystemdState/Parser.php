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
        $value = $values[1];

        if ($value === '0') {
            return 0;
        }

        if ($value === 'yes') {
            return true;
        }

        if ($value === 'no') {
            return false;
        }

        if ($key === 'Environment') {
            return self::parseEnvironmentLine($values);
        }

        if (in_array($key, self::$execTypes)) {
            array_shift($values);
            return self::parseExecLine(implode(' ', $values));
        }

        if (preg_match('/Timestamp$/', $key)) {
            return \date_create_immutable_from_format('* Y-m-d H:i:s e', $value);
        }

        if (in_array($key, self::$arrayTypes)) {
            return explode(' ', $value);
        }

        if (preg_match('/^[1-9][0-9]*$/', $value) && $value < PHP_INT_MAX) {
            return (int)$value;
        }

        return $value;
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

        foreach ($explode as $item) {
            $split = explode(' ', $item);
            $array = self::parseExecDetail($split);
            if (count($array)) {
                $execCommand->{$array[0]} = $array[1];
            }
        }

        return $execCommand;
    }

    /**
     * @param array $values
     * @return array
     */
    private static function parseExecDetail(array $values): array
    {
        if (in_array($values[0], ['path', 'pid', 'code', 'status'])) {
            return [
                $values[0],
                self::parseValueByContent($values)
            ];
        }

        if ($values[0] === 'argv[]') {
            array_shift($values);
            array_shift($values);
            return [
                'argv',
                implode(' ', $values),
            ];
        }

        if ($values[0] === 'start_time') {
            return [
                'startTime',
                $values[1]
            ];
        }

        if ($values[0] === 'stop_time') {
            return [
                'stopTime',
                $values[1]
            ];
        }

        if ($values[0] === 'ignore_errors') {
            return [
                'ignoreErrors',
                self::parseValueByContent($values)
            ];
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
     */
    public static function getArrayTypes(): array
    {
        return self::$arrayTypes;
    }

    /**
     * Used by PHPUnit
     *
     * @return array
     */
    public static function getExecTypes(): array
    {
        return self::$execTypes;
    }
}
