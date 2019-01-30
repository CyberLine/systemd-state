<?php

namespace CyberLine\SystemdState\Types;

class Systemd implements \JsonSerializable
{
    /** @var string */
    private $Architecture;

    /** @var boolean */
    private $ConfirmSpawn;

    /** @var boolean */
    private $DefaultBlockIOAccounting;

    /** @var boolean */
    private $DefaultCPUAccounting;

    private $DefaultLimitAS;

    private $DefaultLimitASSoft;

    private $DefaultLimitCORE;

    private $DefaultLimitCORESoft;

    private $DefaultLimitCPU;

    private $DefaultLimitCPUSoft;

    private $DefaultLimitDATA;

    private $DefaultLimitDATASoft;

    private $DefaultLimitFSIZE;

    private $DefaultLimitFSIZESoft;

    private $DefaultLimitLOCKS;

    private $DefaultLimitLOCKSSoft;

    private $DefaultLimitMEMLOCK;

    private $DefaultLimitMEMLOCKSoft;

    private $DefaultLimitMSGQUEUE;

    private $DefaultLimitMSGQUEUESoft;

    private $DefaultLimitNICE;

    private $DefaultLimitNICESoft;

    private $DefaultLimitNOFILE;

    private $DefaultLimitNOFILESoft;

    private $DefaultLimitNPROC;

    private $DefaultLimitNPROCSoft;

    private $DefaultLimitRSS;

    private $DefaultLimitRSSSoft;

    private $DefaultLimitRTPRIO;

    private $DefaultLimitRTPRIOSoft;

    private $DefaultLimitRTTIME;

    private $DefaultLimitRTTIMESoft;

    private $DefaultLimitSIGPENDING;

    private $DefaultLimitSIGPENDINGSoft;

    private $DefaultLimitSTACK;

    private $DefaultLimitSTACKSoft;

    /** @var boolean */
    private $DefaultMemoryAccounting;

    /** @var string */
    private $DefaultRestartUSec;

    /** @var string */
    private $DefaultStandardError;

    /** @var string */
    private $DefaultStandardOutput;

    /** @var integer */
    private $DefaultStartLimitBurst;

    /** @var integer */
    private $DefaultStartLimitIntervalSec;

    /** @var boolean */
    private $DefaultTasksAccounting;

    /** @var integer */
    private $DefaultTasksMax;

    /** @var string */
    private $DefaultTimeoutStartUSec;

    /** @var string */
    private $DefaultTimeoutStopUSec;

    /** @var string */
    private $DefaultTimerAccuracyUSec;

    /** @var array */
    private $Environment = [];

    /** @var array */
    private $Features = [];

    /** @var \DateTimeImmutable */
    private $FinishTimestamp;

    /** @var integer */
    private $FinishTimestampMonotonic;

    /** @var integer */
    private $FirmwareTimestampMonotonic;

    /** @var \DateTimeImmutable */
    private $GeneratorsFinishTimestamp;

    /** @var integer */
    private $GeneratorsFinishTimestampMonotonic;

    /** @var \DateTimeImmutable */
    private $GeneratorsStartTimestamp;

    /** @var integer */
    private $GeneratorsStartTimestampMonotonic;

    /** @var integer */
    private $InitRDTimestampMonotonic;

    /** @var \DateTimeImmutable */
    private $KernelTimestamp;

    /** @var integer */
    private $KernelTimestampMonotonic;

    /** @var integer */
    private $LoaderTimestampMonotonic;

    /** @var string */
    private $LogLevel;

    /** @var string */
    private $LogTarget;

    /** @var integer */
    private $NFailedJobs;

    /** @var integer */
    private $NFailedUnits;

    /** @var integer */
    private $NInstalledJobs;

    /** @var integer */
    private $NJobs;

    /** @var integer */
    private $NNames;

    /** @var integer */
    private $Progress;

    /** @var integer */
    private $RuntimeWatchdogUSec;

    /** @var \DateTimeImmutable */
    private $SecurityFinishTimestamp;

    /** @var integer */
    private $SecurityFinishTimestampMonotonic;

    /** @var \DateTimeImmutable */
    private $SecurityStartTimestamp;

    /** @var integer */
    private $SecurityStartTimestampMonotonic;

    /** @var boolean */
    private $ShowStatus;

    /** @var string */
    private $ShutdownWatchdogUSec;

    /** @var string */
    private $SystemState;

    /** @var integer */
    private $TimerSlackNSec;

    /** @var array */
    private $UnitPath = [];

    /** @var \DateTimeImmutable */
    private $UnitsLoadFinishTimestamp;

    /** @var integer */
    private $UnitsLoadFinishTimestampMonotonic;

    /** @var \DateTimeImmutable */
    private $UnitsLoadStartTimestamp;

    /** @var integer */
    private $UnitsLoadStartTimestampMonotonic;

    /** @var \DateTimeImmutable */
    private $UserspaceTimestamp;

    /** @var integer */
    private $UserspaceTimestampMonotonic;

    /** @var integer */
    private $Version;

    /** @var string */
    private $Virtualization;

    /**
     * @return string
     */
    public function getArchitecture(): string
    {
        return $this->Architecture;
    }

    /**
     * @param string $Architecture
     * @return Systemd
     */
    public function setArchitecture(string $Architecture): Systemd
    {
        $this->Architecture = $Architecture;
        return $this;
    }

    /**
     * @return bool
     */
    public function isConfirmSpawn(): bool
    {
        return $this->ConfirmSpawn;
    }

    /**
     * @param bool $ConfirmSpawn
     * @return Systemd
     */
    public function setConfirmSpawn(bool $ConfirmSpawn): Systemd
    {
        $this->ConfirmSpawn = $ConfirmSpawn;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDefaultBlockIOAccounting(): bool
    {
        return $this->DefaultBlockIOAccounting;
    }

    /**
     * @param bool $DefaultBlockIOAccounting
     * @return Systemd
     */
    public function setDefaultBlockIOAccounting(bool $DefaultBlockIOAccounting): Systemd
    {
        $this->DefaultBlockIOAccounting = $DefaultBlockIOAccounting;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDefaultCPUAccounting(): bool
    {
        return $this->DefaultCPUAccounting;
    }

    /**
     * @param bool $DefaultCPUAccounting
     * @return Systemd
     */
    public function setDefaultCPUAccounting(bool $DefaultCPUAccounting): Systemd
    {
        $this->DefaultCPUAccounting = $DefaultCPUAccounting;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefaultLimitAS()
    {
        return $this->DefaultLimitAS;
    }

    /**
     * @param mixed $DefaultLimitAS
     * @return Systemd
     */
    public function setDefaultLimitAS($DefaultLimitAS)
    {
        $this->DefaultLimitAS = $DefaultLimitAS;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefaultLimitASSoft()
    {
        return $this->DefaultLimitASSoft;
    }

    /**
     * @param mixed $DefaultLimitASSoft
     * @return Systemd
     */
    public function setDefaultLimitASSoft($DefaultLimitASSoft)
    {
        $this->DefaultLimitASSoft = $DefaultLimitASSoft;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefaultLimitCORE()
    {
        return $this->DefaultLimitCORE;
    }

    /**
     * @param mixed $DefaultLimitCORE
     * @return Systemd
     */
    public function setDefaultLimitCORE($DefaultLimitCORE)
    {
        $this->DefaultLimitCORE = $DefaultLimitCORE;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefaultLimitCORESoft()
    {
        return $this->DefaultLimitCORESoft;
    }

    /**
     * @param mixed $DefaultLimitCORESoft
     * @return Systemd
     */
    public function setDefaultLimitCORESoft($DefaultLimitCORESoft)
    {
        $this->DefaultLimitCORESoft = $DefaultLimitCORESoft;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefaultLimitCPU()
    {
        return $this->DefaultLimitCPU;
    }

    /**
     * @param mixed $DefaultLimitCPU
     * @return Systemd
     */
    public function setDefaultLimitCPU($DefaultLimitCPU)
    {
        $this->DefaultLimitCPU = $DefaultLimitCPU;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefaultLimitCPUSoft()
    {
        return $this->DefaultLimitCPUSoft;
    }

    /**
     * @param mixed $DefaultLimitCPUSoft
     * @return Systemd
     */
    public function setDefaultLimitCPUSoft($DefaultLimitCPUSoft)
    {
        $this->DefaultLimitCPUSoft = $DefaultLimitCPUSoft;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefaultLimitDATA()
    {
        return $this->DefaultLimitDATA;
    }

    /**
     * @param mixed $DefaultLimitDATA
     * @return Systemd
     */
    public function setDefaultLimitDATA($DefaultLimitDATA)
    {
        $this->DefaultLimitDATA = $DefaultLimitDATA;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefaultLimitDATASoft()
    {
        return $this->DefaultLimitDATASoft;
    }

    /**
     * @param mixed $DefaultLimitDATASoft
     * @return Systemd
     */
    public function setDefaultLimitDATASoft($DefaultLimitDATASoft)
    {
        $this->DefaultLimitDATASoft = $DefaultLimitDATASoft;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefaultLimitFSIZE()
    {
        return $this->DefaultLimitFSIZE;
    }

    /**
     * @param mixed $DefaultLimitFSIZE
     * @return Systemd
     */
    public function setDefaultLimitFSIZE($DefaultLimitFSIZE)
    {
        $this->DefaultLimitFSIZE = $DefaultLimitFSIZE;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefaultLimitFSIZESoft()
    {
        return $this->DefaultLimitFSIZESoft;
    }

    /**
     * @param mixed $DefaultLimitFSIZESoft
     * @return Systemd
     */
    public function setDefaultLimitFSIZESoft($DefaultLimitFSIZESoft)
    {
        $this->DefaultLimitFSIZESoft = $DefaultLimitFSIZESoft;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefaultLimitLOCKS()
    {
        return $this->DefaultLimitLOCKS;
    }

    /**
     * @param mixed $DefaultLimitLOCKS
     * @return Systemd
     */
    public function setDefaultLimitLOCKS($DefaultLimitLOCKS)
    {
        $this->DefaultLimitLOCKS = $DefaultLimitLOCKS;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefaultLimitLOCKSSoft()
    {
        return $this->DefaultLimitLOCKSSoft;
    }

    /**
     * @param mixed $DefaultLimitLOCKSSoft
     * @return Systemd
     */
    public function setDefaultLimitLOCKSSoft($DefaultLimitLOCKSSoft)
    {
        $this->DefaultLimitLOCKSSoft = $DefaultLimitLOCKSSoft;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefaultLimitMEMLOCK()
    {
        return $this->DefaultLimitMEMLOCK;
    }

    /**
     * @param mixed $DefaultLimitMEMLOCK
     * @return Systemd
     */
    public function setDefaultLimitMEMLOCK($DefaultLimitMEMLOCK)
    {
        $this->DefaultLimitMEMLOCK = $DefaultLimitMEMLOCK;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefaultLimitMEMLOCKSoft()
    {
        return $this->DefaultLimitMEMLOCKSoft;
    }

    /**
     * @param mixed $DefaultLimitMEMLOCKSoft
     * @return Systemd
     */
    public function setDefaultLimitMEMLOCKSoft($DefaultLimitMEMLOCKSoft)
    {
        $this->DefaultLimitMEMLOCKSoft = $DefaultLimitMEMLOCKSoft;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefaultLimitMSGQUEUE()
    {
        return $this->DefaultLimitMSGQUEUE;
    }

    /**
     * @param mixed $DefaultLimitMSGQUEUE
     * @return Systemd
     */
    public function setDefaultLimitMSGQUEUE($DefaultLimitMSGQUEUE)
    {
        $this->DefaultLimitMSGQUEUE = $DefaultLimitMSGQUEUE;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefaultLimitMSGQUEUESoft()
    {
        return $this->DefaultLimitMSGQUEUESoft;
    }

    /**
     * @param mixed $DefaultLimitMSGQUEUESoft
     * @return Systemd
     */
    public function setDefaultLimitMSGQUEUESoft($DefaultLimitMSGQUEUESoft)
    {
        $this->DefaultLimitMSGQUEUESoft = $DefaultLimitMSGQUEUESoft;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefaultLimitNICE()
    {
        return $this->DefaultLimitNICE;
    }

    /**
     * @param mixed $DefaultLimitNICE
     * @return Systemd
     */
    public function setDefaultLimitNICE($DefaultLimitNICE)
    {
        $this->DefaultLimitNICE = $DefaultLimitNICE;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefaultLimitNICESoft()
    {
        return $this->DefaultLimitNICESoft;
    }

    /**
     * @param mixed $DefaultLimitNICESoft
     * @return Systemd
     */
    public function setDefaultLimitNICESoft($DefaultLimitNICESoft)
    {
        $this->DefaultLimitNICESoft = $DefaultLimitNICESoft;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefaultLimitNOFILE()
    {
        return $this->DefaultLimitNOFILE;
    }

    /**
     * @param mixed $DefaultLimitNOFILE
     * @return Systemd
     */
    public function setDefaultLimitNOFILE($DefaultLimitNOFILE)
    {
        $this->DefaultLimitNOFILE = $DefaultLimitNOFILE;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefaultLimitNOFILESoft()
    {
        return $this->DefaultLimitNOFILESoft;
    }

    /**
     * @param mixed $DefaultLimitNOFILESoft
     * @return Systemd
     */
    public function setDefaultLimitNOFILESoft($DefaultLimitNOFILESoft)
    {
        $this->DefaultLimitNOFILESoft = $DefaultLimitNOFILESoft;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefaultLimitNPROC()
    {
        return $this->DefaultLimitNPROC;
    }

    /**
     * @param mixed $DefaultLimitNPROC
     * @return Systemd
     */
    public function setDefaultLimitNPROC($DefaultLimitNPROC)
    {
        $this->DefaultLimitNPROC = $DefaultLimitNPROC;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefaultLimitNPROCSoft()
    {
        return $this->DefaultLimitNPROCSoft;
    }

    /**
     * @param mixed $DefaultLimitNPROCSoft
     * @return Systemd
     */
    public function setDefaultLimitNPROCSoft($DefaultLimitNPROCSoft)
    {
        $this->DefaultLimitNPROCSoft = $DefaultLimitNPROCSoft;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefaultLimitRSS()
    {
        return $this->DefaultLimitRSS;
    }

    /**
     * @param mixed $DefaultLimitRSS
     * @return Systemd
     */
    public function setDefaultLimitRSS($DefaultLimitRSS)
    {
        $this->DefaultLimitRSS = $DefaultLimitRSS;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefaultLimitRSSSoft()
    {
        return $this->DefaultLimitRSSSoft;
    }

    /**
     * @param mixed $DefaultLimitRSSSoft
     * @return Systemd
     */
    public function setDefaultLimitRSSSoft($DefaultLimitRSSSoft)
    {
        $this->DefaultLimitRSSSoft = $DefaultLimitRSSSoft;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefaultLimitRTPRIO()
    {
        return $this->DefaultLimitRTPRIO;
    }

    /**
     * @param mixed $DefaultLimitRTPRIO
     * @return Systemd
     */
    public function setDefaultLimitRTPRIO($DefaultLimitRTPRIO)
    {
        $this->DefaultLimitRTPRIO = $DefaultLimitRTPRIO;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefaultLimitRTPRIOSoft()
    {
        return $this->DefaultLimitRTPRIOSoft;
    }

    /**
     * @param mixed $DefaultLimitRTPRIOSoft
     * @return Systemd
     */
    public function setDefaultLimitRTPRIOSoft($DefaultLimitRTPRIOSoft)
    {
        $this->DefaultLimitRTPRIOSoft = $DefaultLimitRTPRIOSoft;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefaultLimitRTTIME()
    {
        return $this->DefaultLimitRTTIME;
    }

    /**
     * @param mixed $DefaultLimitRTTIME
     * @return Systemd
     */
    public function setDefaultLimitRTTIME($DefaultLimitRTTIME)
    {
        $this->DefaultLimitRTTIME = $DefaultLimitRTTIME;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefaultLimitRTTIMESoft()
    {
        return $this->DefaultLimitRTTIMESoft;
    }

    /**
     * @param mixed $DefaultLimitRTTIMESoft
     * @return Systemd
     */
    public function setDefaultLimitRTTIMESoft($DefaultLimitRTTIMESoft)
    {
        $this->DefaultLimitRTTIMESoft = $DefaultLimitRTTIMESoft;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefaultLimitSIGPENDING()
    {
        return $this->DefaultLimitSIGPENDING;
    }

    /**
     * @param mixed $DefaultLimitSIGPENDING
     * @return Systemd
     */
    public function setDefaultLimitSIGPENDING($DefaultLimitSIGPENDING)
    {
        $this->DefaultLimitSIGPENDING = $DefaultLimitSIGPENDING;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefaultLimitSIGPENDINGSoft()
    {
        return $this->DefaultLimitSIGPENDINGSoft;
    }

    /**
     * @param mixed $DefaultLimitSIGPENDINGSoft
     * @return Systemd
     */
    public function setDefaultLimitSIGPENDINGSoft($DefaultLimitSIGPENDINGSoft)
    {
        $this->DefaultLimitSIGPENDINGSoft = $DefaultLimitSIGPENDINGSoft;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefaultLimitSTACK()
    {
        return $this->DefaultLimitSTACK;
    }

    /**
     * @param mixed $DefaultLimitSTACK
     * @return Systemd
     */
    public function setDefaultLimitSTACK($DefaultLimitSTACK)
    {
        $this->DefaultLimitSTACK = $DefaultLimitSTACK;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefaultLimitSTACKSoft()
    {
        return $this->DefaultLimitSTACKSoft;
    }

    /**
     * @param mixed $DefaultLimitSTACKSoft
     * @return Systemd
     */
    public function setDefaultLimitSTACKSoft($DefaultLimitSTACKSoft)
    {
        $this->DefaultLimitSTACKSoft = $DefaultLimitSTACKSoft;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDefaultMemoryAccounting(): bool
    {
        return $this->DefaultMemoryAccounting;
    }

    /**
     * @param bool $DefaultMemoryAccounting
     * @return Systemd
     */
    public function setDefaultMemoryAccounting(bool $DefaultMemoryAccounting): Systemd
    {
        $this->DefaultMemoryAccounting = $DefaultMemoryAccounting;
        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultRestartUSec(): string
    {
        return $this->DefaultRestartUSec;
    }

    /**
     * @param string $DefaultRestartUSec
     * @return Systemd
     */
    public function setDefaultRestartUSec(string $DefaultRestartUSec): Systemd
    {
        $this->DefaultRestartUSec = $DefaultRestartUSec;
        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultStandardError(): string
    {
        return $this->DefaultStandardError;
    }

    /**
     * @param string $DefaultStandardError
     * @return Systemd
     */
    public function setDefaultStandardError(string $DefaultStandardError): Systemd
    {
        $this->DefaultStandardError = $DefaultStandardError;
        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultStandardOutput(): string
    {
        return $this->DefaultStandardOutput;
    }

    /**
     * @param string $DefaultStandardOutput
     * @return Systemd
     */
    public function setDefaultStandardOutput(string $DefaultStandardOutput): Systemd
    {
        $this->DefaultStandardOutput = $DefaultStandardOutput;
        return $this;
    }

    /**
     * @return int
     */
    public function getDefaultStartLimitBurst(): int
    {
        return $this->DefaultStartLimitBurst;
    }

    /**
     * @param int $DefaultStartLimitBurst
     * @return Systemd
     */
    public function setDefaultStartLimitBurst(int $DefaultStartLimitBurst): Systemd
    {
        $this->DefaultStartLimitBurst = $DefaultStartLimitBurst;
        return $this;
    }

    /**
     * @return int
     */
    public function getDefaultStartLimitIntervalSec(): int
    {
        return $this->DefaultStartLimitIntervalSec;
    }

    /**
     * @param int $DefaultStartLimitIntervalSec
     * @return Systemd
     */
    public function setDefaultStartLimitIntervalSec(int $DefaultStartLimitIntervalSec): Systemd
    {
        $this->DefaultStartLimitIntervalSec = $DefaultStartLimitIntervalSec;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDefaultTasksAccounting(): bool
    {
        return $this->DefaultTasksAccounting;
    }

    /**
     * @param bool $DefaultTasksAccounting
     * @return Systemd
     */
    public function setDefaultTasksAccounting(bool $DefaultTasksAccounting): Systemd
    {
        $this->DefaultTasksAccounting = $DefaultTasksAccounting;
        return $this;
    }

    /**
     * @return int
     */
    public function getDefaultTasksMax(): int
    {
        return $this->DefaultTasksMax;
    }

    /**
     * @param int $DefaultTasksMax
     * @return Systemd
     */
    public function setDefaultTasksMax(int $DefaultTasksMax): Systemd
    {
        $this->DefaultTasksMax = $DefaultTasksMax;
        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultTimeoutStartUSec(): string
    {
        return $this->DefaultTimeoutStartUSec;
    }

    /**
     * @param string $DefaultTimeoutStartUSec
     * @return Systemd
     */
    public function setDefaultTimeoutStartUSec(string $DefaultTimeoutStartUSec): Systemd
    {
        $this->DefaultTimeoutStartUSec = $DefaultTimeoutStartUSec;
        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultTimeoutStopUSec(): string
    {
        return $this->DefaultTimeoutStopUSec;
    }

    /**
     * @param string $DefaultTimeoutStopUSec
     * @return Systemd
     */
    public function setDefaultTimeoutStopUSec(string $DefaultTimeoutStopUSec): Systemd
    {
        $this->DefaultTimeoutStopUSec = $DefaultTimeoutStopUSec;
        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultTimerAccuracyUSec(): string
    {
        return $this->DefaultTimerAccuracyUSec;
    }

    /**
     * @param string $DefaultTimerAccuracyUSec
     * @return Systemd
     */
    public function setDefaultTimerAccuracyUSec(string $DefaultTimerAccuracyUSec): Systemd
    {
        $this->DefaultTimerAccuracyUSec = $DefaultTimerAccuracyUSec;
        return $this;
    }

    /**
     * @return array
     */
    public function getEnvironment(): array
    {
        return $this->Environment;
    }

    /**
     * @param array $Environment
     * @return Systemd
     */
    public function setEnvironment(array $Environment): Systemd
    {
        $this->Environment = $Environment;
        return $this;
    }

    /**
     * @return array
     */
    public function getFeatures(): array
    {
        return $this->Features;
    }

    /**
     * @param array $Features
     * @return Systemd
     */
    public function setFeatures(array $Features): Systemd
    {
        $this->Features = $Features;
        return $this;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getFinishTimestamp(): \DateTimeImmutable
    {
        return $this->FinishTimestamp;
    }

    /**
     * @param \DateTimeImmutable $FinishTimestamp
     * @return Systemd
     */
    public function setFinishTimestamp(\DateTimeImmutable $FinishTimestamp): Systemd
    {
        $this->FinishTimestamp = $FinishTimestamp;
        return $this;
    }

    /**
     * @return int
     */
    public function getFinishTimestampMonotonic(): int
    {
        return $this->FinishTimestampMonotonic;
    }

    /**
     * @param int $FinishTimestampMonotonic
     * @return Systemd
     */
    public function setFinishTimestampMonotonic(int $FinishTimestampMonotonic): Systemd
    {
        $this->FinishTimestampMonotonic = $FinishTimestampMonotonic;
        return $this;
    }

    /**
     * @return int
     */
    public function getFirmwareTimestampMonotonic(): int
    {
        return $this->FirmwareTimestampMonotonic;
    }

    /**
     * @param int $FirmwareTimestampMonotonic
     * @return Systemd
     */
    public function setFirmwareTimestampMonotonic(int $FirmwareTimestampMonotonic): Systemd
    {
        $this->FirmwareTimestampMonotonic = $FirmwareTimestampMonotonic;
        return $this;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getGeneratorsFinishTimestamp(): \DateTimeImmutable
    {
        return $this->GeneratorsFinishTimestamp;
    }

    /**
     * @param \DateTimeImmutable $GeneratorsFinishTimestamp
     * @return Systemd
     */
    public function setGeneratorsFinishTimestamp(\DateTimeImmutable $GeneratorsFinishTimestamp): Systemd
    {
        $this->GeneratorsFinishTimestamp = $GeneratorsFinishTimestamp;
        return $this;
    }

    /**
     * @return int
     */
    public function getGeneratorsFinishTimestampMonotonic(): int
    {
        return $this->GeneratorsFinishTimestampMonotonic;
    }

    /**
     * @param int $GeneratorsFinishTimestampMonotonic
     * @return Systemd
     */
    public function setGeneratorsFinishTimestampMonotonic(int $GeneratorsFinishTimestampMonotonic): Systemd
    {
        $this->GeneratorsFinishTimestampMonotonic = $GeneratorsFinishTimestampMonotonic;
        return $this;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getGeneratorsStartTimestamp(): \DateTimeImmutable
    {
        return $this->GeneratorsStartTimestamp;
    }

    /**
     * @param \DateTimeImmutable $GeneratorsStartTimestamp
     * @return Systemd
     */
    public function setGeneratorsStartTimestamp(\DateTimeImmutable $GeneratorsStartTimestamp): Systemd
    {
        $this->GeneratorsStartTimestamp = $GeneratorsStartTimestamp;
        return $this;
    }

    /**
     * @return int
     */
    public function getGeneratorsStartTimestampMonotonic(): int
    {
        return $this->GeneratorsStartTimestampMonotonic;
    }

    /**
     * @param int $GeneratorsStartTimestampMonotonic
     * @return Systemd
     */
    public function setGeneratorsStartTimestampMonotonic(int $GeneratorsStartTimestampMonotonic): Systemd
    {
        $this->GeneratorsStartTimestampMonotonic = $GeneratorsStartTimestampMonotonic;
        return $this;
    }

    /**
     * @return int
     */
    public function getInitRDTimestampMonotonic(): int
    {
        return $this->InitRDTimestampMonotonic;
    }

    /**
     * @param int $InitRDTimestampMonotonic
     * @return Systemd
     */
    public function setInitRDTimestampMonotonic(int $InitRDTimestampMonotonic): Systemd
    {
        $this->InitRDTimestampMonotonic = $InitRDTimestampMonotonic;
        return $this;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getKernelTimestamp(): \DateTimeImmutable
    {
        return $this->KernelTimestamp;
    }

    /**
     * @param \DateTimeImmutable $KernelTimestamp
     * @return Systemd
     */
    public function setKernelTimestamp(\DateTimeImmutable $KernelTimestamp): Systemd
    {
        $this->KernelTimestamp = $KernelTimestamp;
        return $this;
    }

    /**
     * @return int
     */
    public function getKernelTimestampMonotonic(): int
    {
        return $this->KernelTimestampMonotonic;
    }

    /**
     * @param int $KernelTimestampMonotonic
     * @return Systemd
     */
    public function setKernelTimestampMonotonic(int $KernelTimestampMonotonic): Systemd
    {
        $this->KernelTimestampMonotonic = $KernelTimestampMonotonic;
        return $this;
    }

    /**
     * @return int
     */
    public function getLoaderTimestampMonotonic(): int
    {
        return $this->LoaderTimestampMonotonic;
    }

    /**
     * @param int $LoaderTimestampMonotonic
     * @return Systemd
     */
    public function setLoaderTimestampMonotonic(int $LoaderTimestampMonotonic): Systemd
    {
        $this->LoaderTimestampMonotonic = $LoaderTimestampMonotonic;
        return $this;
    }

    /**
     * @return string
     */
    public function getLogLevel(): string
    {
        return $this->LogLevel;
    }

    /**
     * @param string $LogLevel
     * @return Systemd
     */
    public function setLogLevel(string $LogLevel): Systemd
    {
        $this->LogLevel = $LogLevel;
        return $this;
    }

    /**
     * @return string
     */
    public function getLogTarget(): string
    {
        return $this->LogTarget;
    }

    /**
     * @param string $LogTarget
     * @return Systemd
     */
    public function setLogTarget(string $LogTarget): Systemd
    {
        $this->LogTarget = $LogTarget;
        return $this;
    }

    /**
     * @return int
     */
    public function getNFailedJobs(): int
    {
        return $this->NFailedJobs;
    }

    /**
     * @param int $NFailedJobs
     * @return Systemd
     */
    public function setNFailedJobs(int $NFailedJobs): Systemd
    {
        $this->NFailedJobs = $NFailedJobs;
        return $this;
    }

    /**
     * @return int
     */
    public function getNFailedUnits(): int
    {
        return $this->NFailedUnits;
    }

    /**
     * @param int $NFailedUnits
     * @return Systemd
     */
    public function setNFailedUnits(int $NFailedUnits): Systemd
    {
        $this->NFailedUnits = $NFailedUnits;
        return $this;
    }

    /**
     * @return int
     */
    public function getNInstalledJobs(): int
    {
        return $this->NInstalledJobs;
    }

    /**
     * @param int $NInstalledJobs
     * @return Systemd
     */
    public function setNInstalledJobs(int $NInstalledJobs): Systemd
    {
        $this->NInstalledJobs = $NInstalledJobs;
        return $this;
    }

    /**
     * @return int
     */
    public function getNJobs(): int
    {
        return $this->NJobs;
    }

    /**
     * @param int $NJobs
     * @return Systemd
     */
    public function setNJobs(int $NJobs): Systemd
    {
        $this->NJobs = $NJobs;
        return $this;
    }

    /**
     * @return int
     */
    public function getNNames(): int
    {
        return $this->NNames;
    }

    /**
     * @param int $NNames
     * @return Systemd
     */
    public function setNNames(int $NNames): Systemd
    {
        $this->NNames = $NNames;
        return $this;
    }

    /**
     * @return int
     */
    public function getProgress(): int
    {
        return $this->Progress;
    }

    /**
     * @param int $Progress
     * @return Systemd
     */
    public function setProgress(int $Progress): Systemd
    {
        $this->Progress = $Progress;
        return $this;
    }

    /**
     * @return int
     */
    public function getRuntimeWatchdogUSec(): int
    {
        return $this->RuntimeWatchdogUSec;
    }

    /**
     * @param int $RuntimeWatchdogUSec
     * @return Systemd
     */
    public function setRuntimeWatchdogUSec(int $RuntimeWatchdogUSec): Systemd
    {
        $this->RuntimeWatchdogUSec = $RuntimeWatchdogUSec;
        return $this;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getSecurityFinishTimestamp(): \DateTimeImmutable
    {
        return $this->SecurityFinishTimestamp;
    }

    /**
     * @param \DateTimeImmutable $SecurityFinishTimestamp
     * @return Systemd
     */
    public function setSecurityFinishTimestamp(\DateTimeImmutable $SecurityFinishTimestamp): Systemd
    {
        $this->SecurityFinishTimestamp = $SecurityFinishTimestamp;
        return $this;
    }

    /**
     * @return int
     */
    public function getSecurityFinishTimestampMonotonic(): int
    {
        return $this->SecurityFinishTimestampMonotonic;
    }

    /**
     * @param int $SecurityFinishTimestampMonotonic
     * @return Systemd
     */
    public function setSecurityFinishTimestampMonotonic(int $SecurityFinishTimestampMonotonic): Systemd
    {
        $this->SecurityFinishTimestampMonotonic = $SecurityFinishTimestampMonotonic;
        return $this;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getSecurityStartTimestamp(): \DateTimeImmutable
    {
        return $this->SecurityStartTimestamp;
    }

    /**
     * @param \DateTimeImmutable $SecurityStartTimestamp
     * @return Systemd
     */
    public function setSecurityStartTimestamp(\DateTimeImmutable $SecurityStartTimestamp): Systemd
    {
        $this->SecurityStartTimestamp = $SecurityStartTimestamp;
        return $this;
    }

    /**
     * @return int
     */
    public function getSecurityStartTimestampMonotonic(): int
    {
        return $this->SecurityStartTimestampMonotonic;
    }

    /**
     * @param int $SecurityStartTimestampMonotonic
     * @return Systemd
     */
    public function setSecurityStartTimestampMonotonic(int $SecurityStartTimestampMonotonic): Systemd
    {
        $this->SecurityStartTimestampMonotonic = $SecurityStartTimestampMonotonic;
        return $this;
    }

    /**
     * @return bool
     */
    public function isShowStatus(): bool
    {
        return $this->ShowStatus;
    }

    /**
     * @param bool $ShowStatus
     * @return Systemd
     */
    public function setShowStatus(bool $ShowStatus): Systemd
    {
        $this->ShowStatus = $ShowStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getShutdownWatchdogUSec(): string
    {
        return $this->ShutdownWatchdogUSec;
    }

    /**
     * @param string $ShutdownWatchdogUSec
     * @return Systemd
     */
    public function setShutdownWatchdogUSec(string $ShutdownWatchdogUSec): Systemd
    {
        $this->ShutdownWatchdogUSec = $ShutdownWatchdogUSec;
        return $this;
    }

    /**
     * @return string
     */
    public function getSystemState(): string
    {
        return $this->SystemState;
    }

    /**
     * @param string $SystemState
     * @return Systemd
     */
    public function setSystemState(string $SystemState): Systemd
    {
        $this->SystemState = $SystemState;
        return $this;
    }

    /**
     * @return int
     */
    public function getTimerSlackNSec(): int
    {
        return $this->TimerSlackNSec;
    }

    /**
     * @param int $TimerSlackNSec
     * @return Systemd
     */
    public function setTimerSlackNSec(int $TimerSlackNSec): Systemd
    {
        $this->TimerSlackNSec = $TimerSlackNSec;
        return $this;
    }

    /**
     * @return array
     */
    public function getUnitPath(): array
    {
        return $this->UnitPath;
    }

    /**
     * @param array $UnitPath
     * @return Systemd
     */
    public function setUnitPath(array $UnitPath): Systemd
    {
        $this->UnitPath = $UnitPath;
        return $this;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getUnitsLoadFinishTimestamp(): \DateTimeImmutable
    {
        return $this->UnitsLoadFinishTimestamp;
    }

    /**
     * @param \DateTimeImmutable $UnitsLoadFinishTimestamp
     * @return Systemd
     */
    public function setUnitsLoadFinishTimestamp(\DateTimeImmutable $UnitsLoadFinishTimestamp): Systemd
    {
        $this->UnitsLoadFinishTimestamp = $UnitsLoadFinishTimestamp;
        return $this;
    }

    /**
     * @return int
     */
    public function getUnitsLoadFinishTimestampMonotonic(): int
    {
        return $this->UnitsLoadFinishTimestampMonotonic;
    }

    /**
     * @param int $UnitsLoadFinishTimestampMonotonic
     * @return Systemd
     */
    public function setUnitsLoadFinishTimestampMonotonic(int $UnitsLoadFinishTimestampMonotonic): Systemd
    {
        $this->UnitsLoadFinishTimestampMonotonic = $UnitsLoadFinishTimestampMonotonic;
        return $this;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getUnitsLoadStartTimestamp(): \DateTimeImmutable
    {
        return $this->UnitsLoadStartTimestamp;
    }

    /**
     * @param \DateTimeImmutable $UnitsLoadStartTimestamp
     * @return Systemd
     */
    public function setUnitsLoadStartTimestamp(\DateTimeImmutable $UnitsLoadStartTimestamp): Systemd
    {
        $this->UnitsLoadStartTimestamp = $UnitsLoadStartTimestamp;
        return $this;
    }

    /**
     * @return int
     */
    public function getUnitsLoadStartTimestampMonotonic(): int
    {
        return $this->UnitsLoadStartTimestampMonotonic;
    }

    /**
     * @param int $UnitsLoadStartTimestampMonotonic
     * @return Systemd
     */
    public function setUnitsLoadStartTimestampMonotonic(int $UnitsLoadStartTimestampMonotonic): Systemd
    {
        $this->UnitsLoadStartTimestampMonotonic = $UnitsLoadStartTimestampMonotonic;
        return $this;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getUserspaceTimestamp(): \DateTimeImmutable
    {
        return $this->UserspaceTimestamp;
    }

    /**
     * @param \DateTimeImmutable $UserspaceTimestamp
     * @return Systemd
     */
    public function setUserspaceTimestamp(\DateTimeImmutable $UserspaceTimestamp): Systemd
    {
        $this->UserspaceTimestamp = $UserspaceTimestamp;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserspaceTimestampMonotonic(): int
    {
        return $this->UserspaceTimestampMonotonic;
    }

    /**
     * @param int $UserspaceTimestampMonotonic
     * @return Systemd
     */
    public function setUserspaceTimestampMonotonic(int $UserspaceTimestampMonotonic): Systemd
    {
        $this->UserspaceTimestampMonotonic = $UserspaceTimestampMonotonic;
        return $this;
    }

    /**
     * @return int
     */
    public function getVersion(): int
    {
        return $this->Version;
    }

    /**
     * @param int $Version
     * @return Systemd
     */
    public function setVersion(int $Version): Systemd
    {
        $this->Version = $Version;
        return $this;
    }

    /**
     * @return string
     */
    public function getVirtualization(): string
    {
        return $this->Virtualization;
    }

    /**
     * @param string $Virtualization
     * @return Systemd
     */
    public function setVirtualization(string $Virtualization): Systemd
    {
        $this->Virtualization = $Virtualization;
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