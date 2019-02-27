<?php

namespace CyberLine\SystemdState\Types;

class Systemd implements TypesInterface, \JsonSerializable
{
    /** @var string */
    protected $Architecture;

    /** @var boolean */
    protected $ConfirmSpawn;

    /** @var boolean */
    protected $DefaultBlockIOAccounting;

    /** @var boolean */
    protected $DefaultCPUAccounting;

    protected $DefaultLimitAS;

    protected $DefaultLimitASSoft;

    protected $DefaultLimitCORE;

    protected $DefaultLimitCORESoft;

    protected $DefaultLimitCPU;

    protected $DefaultLimitCPUSoft;

    protected $DefaultLimitDATA;

    protected $DefaultLimitDATASoft;

    protected $DefaultLimitFSIZE;

    protected $DefaultLimitFSIZESoft;

    protected $DefaultLimitLOCKS;

    protected $DefaultLimitLOCKSSoft;

    protected $DefaultLimitMEMLOCK;

    protected $DefaultLimitMEMLOCKSoft;

    protected $DefaultLimitMSGQUEUE;

    protected $DefaultLimitMSGQUEUESoft;

    protected $DefaultLimitNICE;

    protected $DefaultLimitNICESoft;

    protected $DefaultLimitNOFILE;

    protected $DefaultLimitNOFILESoft;

    protected $DefaultLimitNPROC;

    protected $DefaultLimitNPROCSoft;

    protected $DefaultLimitRSS;

    protected $DefaultLimitRSSSoft;

    protected $DefaultLimitRTPRIO;

    protected $DefaultLimitRTPRIOSoft;

    protected $DefaultLimitRTTIME;

    protected $DefaultLimitRTTIMESoft;

    protected $DefaultLimitSIGPENDING;

    protected $DefaultLimitSIGPENDINGSoft;

    protected $DefaultLimitSTACK;

    protected $DefaultLimitSTACKSoft;

    /** @var boolean */
    protected $DefaultMemoryAccounting;

    /** @var string */
    protected $DefaultRestartUSec;

    /** @var string */
    protected $DefaultStandardError;

    /** @var string */
    protected $DefaultStandardOutput;

    /** @var integer */
    protected $DefaultStartLimitBurst;

    /** @var integer */
    protected $DefaultStartLimitInterval;

    /** @var integer */
    protected $DefaultStartLimitIntervalSec;

    /** @var boolean */
    protected $DefaultTasksAccounting;

    protected $DefaultTasksMax;

    /** @var string */
    protected $DefaultTimeoutStartUSec;

    /** @var string */
    protected $DefaultTimeoutStopUSec;

    /** @var string */
    protected $DefaultTimerAccuracyUSec;

    /** @var array */
    protected $Environment = [];

    /** @var array */
    protected $Features = [];

    /** @var \DateTimeImmutable */
    protected $FinishTimestamp;

    /** @var integer */
    protected $FinishTimestampMonotonic;

    /** @var integer */
    protected $FirmwareTimestampMonotonic;

    /** @var \DateTimeImmutable */
    protected $GeneratorsFinishTimestamp;

    /** @var integer */
    protected $GeneratorsFinishTimestampMonotonic;

    /** @var \DateTimeImmutable */
    protected $GeneratorsStartTimestamp;

    /** @var integer */
    protected $GeneratorsStartTimestampMonotonic;

    /** @var \DateTimeImmutable */
    protected $InitRDTimestamp;

    /** @var integer */
    protected $InitRDTimestampMonotonic;

    /** @var \DateTimeImmutable */
    protected $KernelTimestamp;

    /** @var integer */
    protected $KernelTimestampMonotonic;

    /** @var integer */
    protected $LoaderTimestampMonotonic;

    /** @var string */
    protected $LogLevel;

    /** @var string */
    protected $LogTarget;

    /** @var integer */
    protected $NFailedJobs;

    /** @var integer */
    protected $NFailedUnits;

    /** @var integer */
    protected $NInstalledJobs;

    /** @var integer */
    protected $NJobs;

    /** @var integer */
    protected $NNames;
    
    protected $Progress;

    /** @var integer */
    protected $RuntimeWatchdogUSec;

    /** @var \DateTimeImmutable */
    protected $SecurityFinishTimestamp;

    /** @var integer */
    protected $SecurityFinishTimestampMonotonic;

    /** @var \DateTimeImmutable */
    protected $SecurityStartTimestamp;

    /** @var integer */
    protected $SecurityStartTimestampMonotonic;

    /** @var boolean */
    protected $ShowStatus;

    /** @var string */
    protected $ShutdownWatchdogUSec;

    /** @var string */
    protected $SystemState;

    /** @var integer */
    protected $TimerSlackNSec;

    /** @var array */
    protected $UnitPath = [];

    /** @var \DateTimeImmutable */
    protected $UnitsLoadFinishTimestamp;

    /** @var integer */
    protected $UnitsLoadFinishTimestampMonotonic;

    /** @var \DateTimeImmutable */
    protected $UnitsLoadStartTimestamp;

    /** @var integer */
    protected $UnitsLoadStartTimestampMonotonic;

    /** @var \DateTimeImmutable */
    protected $UserspaceTimestamp;

    /** @var integer */
    protected $UserspaceTimestampMonotonic;

    /** @var integer */
    protected $Version;

    /** @var string */
    protected $Virtualization;

    public function __call($name, $value)
    {
        $action = substr($name, 0, 3);
        $property = substr($name, 3);

        if ($action === 'set') {
            $this->{$property} = $value[0];
        }

        if ($action === 'get') {
            return $this->{$property};
        }

        return $this;
    }

    public function getId()
    {
        return 'systemd';
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
