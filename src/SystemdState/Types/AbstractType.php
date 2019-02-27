<?php

namespace CyberLine\SystemdState\Types;

abstract class AbstractType implements TypesInterface, \JsonSerializable
{
    /** @var \DateTimeImmutable */
    protected $ActiveEnterTimestamp;

    /** @var integer */
    protected $ActiveEnterTimestampMonotonic;

    /** @var integer */
    protected $ActiveExitTimestampMonotonic;

    /** @var string */
    protected $ActiveState;

    /** @var boolean */
    protected $AllowIsolate;

    /** @var boolean */
    protected $AssertResult;

    /** @var \DateTimeImmutable */
    protected $AssertTimestamp;

    /** @var integer */
    protected $AssertTimestampMonotonic;

    /** @var array */
    protected $Before = [];

    /** @var boolean */
    protected $CanIsolate;

    /** @var boolean */
    protected $CanReload;

    /** @var boolean */
    protected $CanStart;

    /** @var boolean */
    protected $CanStop;

    /** @var boolean */
    protected $ConditionResult;

    /** @var \DateTimeImmutable */
    protected $ConditionTimestamp;

    /** @var integer */
    protected $ConditionTimestampMonotonic;

    /** @var boolean */
    protected $DefaultDependencies;

    /** @var string */
    protected $Description;

    /** @var string */
    protected $Id;

    /** @var boolean */
    protected $IgnoreOnIsolate;

    /** @var integer */
    protected $InactiveEnterTimestampMonotonic;

    /** @var \DateTimeImmutable */
    protected $InactiveExitTimestamp;

    /** @var integer */
    protected $InactiveExitTimestampMonotonic;

    /** @var string */
    protected $InvocationID;

    /** @var string */
    protected $JobTimeoutAction;

    /** @var string */
    protected $JobTimeoutUSec;

    /** @var string */
    protected $LoadError;

    /** @var string */
    protected $LoadState;

    /** @var array */
    protected $Names = [];

    /** @var boolean */
    protected $NeedDaemonReload;

    /** @var string */
    protected $OnFailureJobMode;

    /** @var boolean */
    protected $Perpetual;

    /** @var boolean */
    protected $RefuseManualStart;

    /** @var boolean */
    protected $RefuseManualStop;

    /** @var string */
    protected $StartLimitAction;

    /** @var boolean */
    protected $StartLimitBurst;

    /** @var integer */
    protected $StartLimitInterval;

    /** @var integer */
    protected $StartLimitIntervalSec;

    /** @var \DateTimeImmutable */
    protected $StateChangeTimestamp;

    /** @var integer */
    protected $StateChangeTimestampMonotonic;

    /** @var boolean */
    protected $StopWhenUnneeded;

    /** @var string */
    protected $SubState;

    /** @var boolean */
    protected $Transient;

    public function __call($name, $value)
    {
        $action = substr($name, 0, 3);
        $property = substr($name, 3);

        if (!property_exists($this, $property)) {
            throw new \RuntimeException(
                sprintf(
                    'Property `%s` is not known to me. Please fill a Bug report!' . PHP_EOL . 'Info: `%s`',
                    $property,
                    implode(' ', $value)
                )
            );
        }

        if ($action === 'set') {
            $this->{$property} = $value[0];

            return $this;
        }

        if ($action === 'get') {
            return $this->{$property};
        }
    }

    public function getId()
    {
        return $this->Id;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
