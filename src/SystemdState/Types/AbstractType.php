<?php

namespace CyberLine\SystemdState\Types;

abstract class AbstractType implements \JsonSerializable
{
    /** @var \DateTimeImmutable */
    protected $ActiveEnterTimestamp;

    /** @var integer */
    protected $ActiveEnterTimestampMonotonic;

    /** @var integer */
    protected $ActiveExitTimestampMonotonic;

    /**
     * @var string
     */
    protected $ActiveState;

    /**
     * @var boolean
     */
    protected $AllowIsolate;

    /**
     * @var boolean
     */
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

    /**
     * @return \DateTimeImmutable
     */
    public function getActiveEnterTimestamp(): \DateTimeImmutable
    {
        return $this->ActiveEnterTimestamp;
    }

    /**
     * @param \DateTimeImmutable $ActiveEnterTimestamp
     * @return AbstractType
     */
    public function setActiveEnterTimestamp(\DateTimeImmutable $ActiveEnterTimestamp): AbstractType
    {
        $this->ActiveEnterTimestamp = $ActiveEnterTimestamp;
        return $this;
    }

    /**
     * @return int
     */
    public function getActiveEnterTimestampMonotonic(): int
    {
        return $this->ActiveEnterTimestampMonotonic;
    }

    /**
     * @param int $ActiveEnterTimestampMonotonic
     * @return AbstractType
     */
    public function setActiveEnterTimestampMonotonic(int $ActiveEnterTimestampMonotonic): AbstractType
    {
        $this->ActiveEnterTimestampMonotonic = $ActiveEnterTimestampMonotonic;
        return $this;
    }

    /**
     * @return int
     */
    public function getActiveExitTimestampMonotonic(): int
    {
        return $this->ActiveExitTimestampMonotonic;
    }

    /**
     * @param int $ActiveExitTimestampMonotonic
     * @return AbstractType
     */
    public function setActiveExitTimestampMonotonic(int $ActiveExitTimestampMonotonic): AbstractType
    {
        $this->ActiveExitTimestampMonotonic = $ActiveExitTimestampMonotonic;
        return $this;
    }

    /**
     * @return string
     */
    public function getActiveState(): string
    {
        return $this->ActiveState;
    }

    /**
     * @param string $ActiveState
     * @return AbstractType
     */
    public function setActiveState(string $ActiveState): AbstractType
    {
        $this->ActiveState = $ActiveState;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAllowIsolate(): bool
    {
        return $this->AllowIsolate;
    }

    /**
     * @param bool $AllowIsolate
     * @return AbstractType
     */
    public function setAllowIsolate(bool $AllowIsolate): AbstractType
    {
        $this->AllowIsolate = $AllowIsolate;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAssertResult(): bool
    {
        return $this->AssertResult;
    }

    /**
     * @param bool $AssertResult
     * @return AbstractType
     */
    public function setAssertResult(bool $AssertResult): AbstractType
    {
        $this->AssertResult = $AssertResult;
        return $this;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getAssertTimestamp(): \DateTimeImmutable
    {
        return $this->AssertTimestamp;
    }

    /**
     * @param \DateTimeImmutable $AssertTimestamp
     * @return AbstractType
     */
    public function setAssertTimestamp(\DateTimeImmutable $AssertTimestamp): AbstractType
    {
        $this->AssertTimestamp = $AssertTimestamp;
        return $this;
    }

    /**
     * @return int
     */
    public function getAssertTimestampMonotonic(): int
    {
        return $this->AssertTimestampMonotonic;
    }

    /**
     * @param int $AssertTimestampMonotonic
     * @return AbstractType
     */
    public function setAssertTimestampMonotonic(int $AssertTimestampMonotonic): AbstractType
    {
        $this->AssertTimestampMonotonic = $AssertTimestampMonotonic;
        return $this;
    }

    /**
     * @return array
     */
    public function getBefore(): array
    {
        return $this->Before;
    }

    /**
     * @param array $Before
     * @return AbstractType
     */
    public function setBefore(array $Before): AbstractType
    {
        $this->Before = $Before;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCanIsolate(): bool
    {
        return $this->CanIsolate;
    }

    /**
     * @param bool $CanIsolate
     * @return AbstractType
     */
    public function setCanIsolate(bool $CanIsolate): AbstractType
    {
        $this->CanIsolate = $CanIsolate;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCanReload(): bool
    {
        return $this->CanReload;
    }

    /**
     * @param bool $CanReload
     * @return AbstractType
     */
    public function setCanReload(bool $CanReload): AbstractType
    {
        $this->CanReload = $CanReload;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCanStart(): bool
    {
        return $this->CanStart;
    }

    /**
     * @param bool $CanStart
     * @return AbstractType
     */
    public function setCanStart(bool $CanStart): AbstractType
    {
        $this->CanStart = $CanStart;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCanStop(): bool
    {
        return $this->CanStop;
    }

    /**
     * @param bool $CanStop
     * @return AbstractType
     */
    public function setCanStop(bool $CanStop): AbstractType
    {
        $this->CanStop = $CanStop;
        return $this;
    }

    /**
     * @return bool
     */
    public function isConditionResult(): bool
    {
        return $this->ConditionResult;
    }

    /**
     * @param bool $ConditionResult
     * @return AbstractType
     */
    public function setConditionResult(bool $ConditionResult): AbstractType
    {
        $this->ConditionResult = $ConditionResult;
        return $this;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getConditionTimestamp(): \DateTimeImmutable
    {
        return $this->ConditionTimestamp;
    }

    /**
     * @param \DateTimeImmutable $ConditionTimestamp
     * @return AbstractType
     */
    public function setConditionTimestamp(\DateTimeImmutable $ConditionTimestamp): AbstractType
    {
        $this->ConditionTimestamp = $ConditionTimestamp;
        return $this;
    }

    /**
     * @return int
     */
    public function getConditionTimestampMonotonic(): int
    {
        return $this->ConditionTimestampMonotonic;
    }

    /**
     * @param int $ConditionTimestampMonotonic
     * @return AbstractType
     */
    public function setConditionTimestampMonotonic(int $ConditionTimestampMonotonic): AbstractType
    {
        $this->ConditionTimestampMonotonic = $ConditionTimestampMonotonic;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDefaultDependencies(): bool
    {
        return $this->DefaultDependencies;
    }

    /**
     * @param bool $DefaultDependencies
     * @return AbstractType
     */
    public function setDefaultDependencies(bool $DefaultDependencies): AbstractType
    {
        $this->DefaultDependencies = $DefaultDependencies;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return AbstractType
     */
    public function setDescription(string $Description): AbstractType
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->Id;
    }

    /**
     * @param string $Id
     * @return AbstractType
     */
    public function setId(string $Id): AbstractType
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return bool
     */
    public function isIgnoreOnIsolate(): bool
    {
        return $this->IgnoreOnIsolate;
    }

    /**
     * @param bool $IgnoreOnIsolate
     * @return AbstractType
     */
    public function setIgnoreOnIsolate(bool $IgnoreOnIsolate): AbstractType
    {
        $this->IgnoreOnIsolate = $IgnoreOnIsolate;
        return $this;
    }

    /**
     * @return int
     */
    public function getInactiveEnterTimestampMonotonic(): int
    {
        return $this->InactiveEnterTimestampMonotonic;
    }

    /**
     * @param int $InactiveEnterTimestampMonotonic
     * @return AbstractType
     */
    public function setInactiveEnterTimestampMonotonic(int $InactiveEnterTimestampMonotonic): AbstractType
    {
        $this->InactiveEnterTimestampMonotonic = $InactiveEnterTimestampMonotonic;
        return $this;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getInactiveExitTimestamp(): \DateTimeImmutable
    {
        return $this->InactiveExitTimestamp;
    }

    /**
     * @param \DateTimeImmutable $InactiveExitTimestamp
     * @return AbstractType
     */
    public function setInactiveExitTimestamp(\DateTimeImmutable $InactiveExitTimestamp): AbstractType
    {
        $this->InactiveExitTimestamp = $InactiveExitTimestamp;
        return $this;
    }

    /**
     * @return int
     */
    public function getInactiveExitTimestampMonotonic(): int
    {
        return $this->InactiveExitTimestampMonotonic;
    }

    /**
     * @param int $InactiveExitTimestampMonotonic
     * @return AbstractType
     */
    public function setInactiveExitTimestampMonotonic(int $InactiveExitTimestampMonotonic): AbstractType
    {
        $this->InactiveExitTimestampMonotonic = $InactiveExitTimestampMonotonic;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvocationID(): string
    {
        return $this->InvocationID;
    }

    /**
     * @param string $InvocationID
     * @return AbstractType
     */
    public function setInvocationID(string $InvocationID): AbstractType
    {
        $this->InvocationID = $InvocationID;
        return $this;
    }

    /**
     * @return string
     */
    public function getJobTimeoutAction(): string
    {
        return $this->JobTimeoutAction;
    }

    /**
     * @param string $JobTimeoutAction
     * @return AbstractType
     */
    public function setJobTimeoutAction(string $JobTimeoutAction): AbstractType
    {
        $this->JobTimeoutAction = $JobTimeoutAction;
        return $this;
    }

    /**
     * @return string
     */
    public function getJobTimeoutUSec(): string
    {
        return $this->JobTimeoutUSec;
    }

    /**
     * @param string $JobTimeoutUSec
     * @return AbstractType
     */
    public function setJobTimeoutUSec(string $JobTimeoutUSec): AbstractType
    {
        $this->JobTimeoutUSec = $JobTimeoutUSec;
        return $this;
    }

    /**
     * @return string
     */
    public function getLoadError(): string
    {
        return $this->LoadError;
    }

    /**
     * @param string $LoadError
     * @return AbstractType
     */
    public function setLoadError(string $LoadError): AbstractType
    {
        $this->LoadError = $LoadError;
        return $this;
    }

    /**
     * @return string
     */
    public function getLoadState(): string
    {
        return $this->LoadState;
    }

    /**
     * @param string $LoadState
     * @return AbstractType
     */
    public function setLoadState(string $LoadState): AbstractType
    {
        $this->LoadState = $LoadState;
        return $this;
    }

    /**
     * @return array
     */
    public function getNames(): array
    {
        return $this->Names;
    }

    /**
     * @param array $Names
     * @return AbstractType
     */
    public function setNames(array $Names): AbstractType
    {
        $this->Names = $Names;
        return $this;
    }

    /**
     * @return bool
     */
    public function isNeedDaemonReload(): bool
    {
        return $this->NeedDaemonReload;
    }

    /**
     * @param bool $NeedDaemonReload
     * @return AbstractType
     */
    public function setNeedDaemonReload(bool $NeedDaemonReload): AbstractType
    {
        $this->NeedDaemonReload = $NeedDaemonReload;
        return $this;
    }

    /**
     * @return string
     */
    public function getOnFailureJobMode(): string
    {
        return $this->OnFailureJobMode;
    }

    /**
     * @param string $OnFailureJobMode
     * @return AbstractType
     */
    public function setOnFailureJobMode(string $OnFailureJobMode): AbstractType
    {
        $this->OnFailureJobMode = $OnFailureJobMode;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPerpetual(): bool
    {
        return $this->Perpetual;
    }

    /**
     * @param bool $Perpetual
     * @return AbstractType
     */
    public function setPerpetual(bool $Perpetual): AbstractType
    {
        $this->Perpetual = $Perpetual;
        return $this;
    }

    /**
     * @return bool
     */
    public function isRefuseManualStart(): bool
    {
        return $this->RefuseManualStart;
    }

    /**
     * @param bool $RefuseManualStart
     * @return AbstractType
     */
    public function setRefuseManualStart(bool $RefuseManualStart): AbstractType
    {
        $this->RefuseManualStart = $RefuseManualStart;
        return $this;
    }

    /**
     * @return bool
     */
    public function isRefuseManualStop(): bool
    {
        return $this->RefuseManualStop;
    }

    /**
     * @param bool $RefuseManualStop
     * @return AbstractType
     */
    public function setRefuseManualStop(bool $RefuseManualStop): AbstractType
    {
        $this->RefuseManualStop = $RefuseManualStop;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartLimitAction(): string
    {
        return $this->StartLimitAction;
    }

    /**
     * @param string $StartLimitAction
     * @return AbstractType
     */
    public function setStartLimitAction(string $StartLimitAction): AbstractType
    {
        $this->StartLimitAction = $StartLimitAction;
        return $this;
    }

    /**
     * @return bool
     */
    public function isStartLimitBurst(): bool
    {
        return $this->StartLimitBurst;
    }

    /**
     * @param bool $StartLimitBurst
     * @return AbstractType
     */
    public function setStartLimitBurst(bool $StartLimitBurst): AbstractType
    {
        $this->StartLimitBurst = $StartLimitBurst;
        return $this;
    }

    /**
     * @return int
     */
    public function getStartLimitInterval(): int
    {
        return $this->StartLimitInterval;
    }

    /**
     * @param int $StartLimitInterval
     * @return AbstractType
     */
    public function setStartLimitInterval(int $StartLimitInterval): AbstractType
    {
        $this->StartLimitInterval = $StartLimitInterval;
        return $this;
    }

    /**
     * @return int
     */
    public function getStartLimitIntervalSec(): int
    {
        return $this->StartLimitIntervalSec;
    }

    /**
     * @param int $StartLimitIntervalSec
     * @return AbstractType
     */
    public function setStartLimitIntervalSec(int $StartLimitIntervalSec): AbstractType
    {
        $this->StartLimitIntervalSec = $StartLimitIntervalSec;
        return $this;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getStateChangeTimestamp(): \DateTimeImmutable
    {
        return $this->StateChangeTimestamp;
    }

    /**
     * @param \DateTimeImmutable $StateChangeTimestamp
     * @return AbstractType
     */
    public function setStateChangeTimestamp(\DateTimeImmutable $StateChangeTimestamp): AbstractType
    {
        $this->StateChangeTimestamp = $StateChangeTimestamp;
        return $this;
    }

    /**
     * @return int
     */
    public function getStateChangeTimestampMonotonic(): int
    {
        return $this->StateChangeTimestampMonotonic;
    }

    /**
     * @param int $StateChangeTimestampMonotonic
     * @return AbstractType
     */
    public function setStateChangeTimestampMonotonic(int $StateChangeTimestampMonotonic): AbstractType
    {
        $this->StateChangeTimestampMonotonic = $StateChangeTimestampMonotonic;
        return $this;
    }

    /**
     * @return bool
     */
    public function isStopWhenUnneeded(): bool
    {
        return $this->StopWhenUnneeded;
    }

    /**
     * @param bool $StopWhenUnneeded
     * @return AbstractType
     */
    public function setStopWhenUnneeded(bool $StopWhenUnneeded): AbstractType
    {
        $this->StopWhenUnneeded = $StopWhenUnneeded;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubState(): string
    {
        return $this->SubState;
    }

    /**
     * @param string $SubState
     * @return AbstractType
     */
    public function setSubState(string $SubState): AbstractType
    {
        $this->SubState = $SubState;
        return $this;
    }

    /**
     * @return bool
     */
    public function isTransient(): bool
    {
        return $this->Transient;
    }

    /**
     * @param bool $Transient
     * @return AbstractType
     */
    public function setTransient(bool $Transient): AbstractType
    {
        $this->Transient = $Transient;
        return $this;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
