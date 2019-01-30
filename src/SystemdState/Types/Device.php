<?php

namespace CyberLine\SystemdState\Types;

class Device implements \JsonSerializable
{
    private $ActiveEnterTimestamp;

    private $ActiveEnterTimestampMonotonic;

    private $ActiveExitTimestampMonotonic;

    private $ActiveState;

    private $AllowIsolate;

    private $AssertResult;

    private $AssertTimestamp;

    private $AssertTimestampMonotonic;

    private $Before = [];

    private $BoundBy;

    private $CanIsolate;

    private $CanReload;

    private $CanStart;

    private $CanStop;

    private $ConditionResult;

    private $ConditionTimestamp;

    private $ConditionTimestampMonotonic;

    private $DefaultDependencies;

    private $Description;

    private $Id;

    private $IgnoreOnIsolate;

    private $InactiveEnterTimestampMonotonic;

    private $InactiveExitTimestamp;

    private $InactiveExitTimestampMonotonic;

    private $InvocationID;

    private $JobTimeoutAction;

    private $JobTimeoutUSec;

    private $LoadError;

    private $LoadState;

    private $Names = [];

    private $NeedDaemonReload;

    private $OnFailureJobMode;

    private $Perpetual;

    private $RefuseManualStart;

    private $RefuseManualStop;

    private $StartLimitAction;

    private $StartLimitBurst;

    private $StartLimitIntervalSec;

    private $StateChangeTimestamp;

    private $StateChangeTimestampMonotonic;

    private $StopWhenUnneeded;

    private $SubState;

    private $SysFSPath;

    private $Transient;

    /**
     * @return mixed
     */
    public function getActiveEnterTimestamp()
    {
        return $this->ActiveEnterTimestamp;
    }

    /**
     * @param mixed $ActiveEnterTimestamp
     * @return Device
     */
    public function setActiveEnterTimestamp($ActiveEnterTimestamp)
    {
        $this->ActiveEnterTimestamp = $ActiveEnterTimestamp;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getActiveEnterTimestampMonotonic()
    {
        return $this->ActiveEnterTimestampMonotonic;
    }

    /**
     * @param mixed $ActiveEnterTimestampMonotonic
     * @return Device
     */
    public function setActiveEnterTimestampMonotonic($ActiveEnterTimestampMonotonic)
    {
        $this->ActiveEnterTimestampMonotonic = $ActiveEnterTimestampMonotonic;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getActiveExitTimestampMonotonic()
    {
        return $this->ActiveExitTimestampMonotonic;
    }

    /**
     * @param mixed $ActiveExitTimestampMonotonic
     * @return Device
     */
    public function setActiveExitTimestampMonotonic($ActiveExitTimestampMonotonic)
    {
        $this->ActiveExitTimestampMonotonic = $ActiveExitTimestampMonotonic;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getActiveState()
    {
        return $this->ActiveState;
    }

    /**
     * @param mixed $ActiveState
     * @return Device
     */
    public function setActiveState($ActiveState)
    {
        $this->ActiveState = $ActiveState;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAllowIsolate()
    {
        return $this->AllowIsolate;
    }

    /**
     * @param mixed $AllowIsolate
     * @return Device
     */
    public function setAllowIsolate($AllowIsolate)
    {
        $this->AllowIsolate = $AllowIsolate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAssertResult()
    {
        return $this->AssertResult;
    }

    /**
     * @param mixed $AssertResult
     * @return Device
     */
    public function setAssertResult($AssertResult)
    {
        $this->AssertResult = $AssertResult;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAssertTimestamp()
    {
        return $this->AssertTimestamp;
    }

    /**
     * @param mixed $AssertTimestamp
     * @return Device
     */
    public function setAssertTimestamp($AssertTimestamp)
    {
        $this->AssertTimestamp = $AssertTimestamp;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAssertTimestampMonotonic()
    {
        return $this->AssertTimestampMonotonic;
    }

    /**
     * @param mixed $AssertTimestampMonotonic
     * @return Device
     */
    public function setAssertTimestampMonotonic($AssertTimestampMonotonic)
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
     * @return Device
     */
    public function setBefore(array $Before): Device
    {
        $this->Before = $Before;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBoundBy()
    {
        return $this->BoundBy;
    }

    /**
     * @param mixed $BoundBy
     * @return Device
     */
    public function setBoundBy($BoundBy)
    {
        $this->BoundBy = $BoundBy;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCanIsolate()
    {
        return $this->CanIsolate;
    }

    /**
     * @param mixed $CanIsolate
     * @return Device
     */
    public function setCanIsolate($CanIsolate)
    {
        $this->CanIsolate = $CanIsolate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCanReload()
    {
        return $this->CanReload;
    }

    /**
     * @param mixed $CanReload
     * @return Device
     */
    public function setCanReload($CanReload)
    {
        $this->CanReload = $CanReload;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCanStart()
    {
        return $this->CanStart;
    }

    /**
     * @param mixed $CanStart
     * @return Device
     */
    public function setCanStart($CanStart)
    {
        $this->CanStart = $CanStart;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCanStop()
    {
        return $this->CanStop;
    }

    /**
     * @param mixed $CanStop
     * @return Device
     */
    public function setCanStop($CanStop)
    {
        $this->CanStop = $CanStop;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getConditionResult()
    {
        return $this->ConditionResult;
    }

    /**
     * @param mixed $ConditionResult
     * @return Device
     */
    public function setConditionResult($ConditionResult)
    {
        $this->ConditionResult = $ConditionResult;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getConditionTimestamp()
    {
        return $this->ConditionTimestamp;
    }

    /**
     * @param mixed $ConditionTimestamp
     * @return Device
     */
    public function setConditionTimestamp($ConditionTimestamp)
    {
        $this->ConditionTimestamp = $ConditionTimestamp;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getConditionTimestampMonotonic()
    {
        return $this->ConditionTimestampMonotonic;
    }

    /**
     * @param mixed $ConditionTimestampMonotonic
     * @return Device
     */
    public function setConditionTimestampMonotonic($ConditionTimestampMonotonic)
    {
        $this->ConditionTimestampMonotonic = $ConditionTimestampMonotonic;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefaultDependencies()
    {
        return $this->DefaultDependencies;
    }

    /**
     * @param mixed $DefaultDependencies
     * @return Device
     */
    public function setDefaultDependencies($DefaultDependencies)
    {
        $this->DefaultDependencies = $DefaultDependencies;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param mixed $Description
     * @return Device
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param mixed $Id
     * @return Device
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIgnoreOnIsolate()
    {
        return $this->IgnoreOnIsolate;
    }

    /**
     * @param mixed $IgnoreOnIsolate
     * @return Device
     */
    public function setIgnoreOnIsolate($IgnoreOnIsolate)
    {
        $this->IgnoreOnIsolate = $IgnoreOnIsolate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInactiveEnterTimestampMonotonic()
    {
        return $this->InactiveEnterTimestampMonotonic;
    }

    /**
     * @param mixed $InactiveEnterTimestampMonotonic
     * @return Device
     */
    public function setInactiveEnterTimestampMonotonic($InactiveEnterTimestampMonotonic)
    {
        $this->InactiveEnterTimestampMonotonic = $InactiveEnterTimestampMonotonic;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInactiveExitTimestamp()
    {
        return $this->InactiveExitTimestamp;
    }

    /**
     * @param mixed $InactiveExitTimestamp
     * @return Device
     */
    public function setInactiveExitTimestamp($InactiveExitTimestamp)
    {
        $this->InactiveExitTimestamp = $InactiveExitTimestamp;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInactiveExitTimestampMonotonic()
    {
        return $this->InactiveExitTimestampMonotonic;
    }

    /**
     * @param mixed $InactiveExitTimestampMonotonic
     * @return Device
     */
    public function setInactiveExitTimestampMonotonic($InactiveExitTimestampMonotonic)
    {
        $this->InactiveExitTimestampMonotonic = $InactiveExitTimestampMonotonic;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvocationID()
    {
        return $this->InvocationID;
    }

    /**
     * @param mixed $InvocationID
     * @return Device
     */
    public function setInvocationID($InvocationID)
    {
        $this->InvocationID = $InvocationID;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getJobTimeoutAction()
    {
        return $this->JobTimeoutAction;
    }

    /**
     * @param mixed $JobTimeoutAction
     * @return Device
     */
    public function setJobTimeoutAction($JobTimeoutAction)
    {
        $this->JobTimeoutAction = $JobTimeoutAction;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getJobTimeoutUSec()
    {
        return $this->JobTimeoutUSec;
    }

    /**
     * @param mixed $JobTimeoutUSec
     * @return Device
     */
    public function setJobTimeoutUSec($JobTimeoutUSec)
    {
        $this->JobTimeoutUSec = $JobTimeoutUSec;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLoadError()
    {
        return $this->LoadError;
    }

    /**
     * @param mixed $LoadError
     * @return Device
     */
    public function setLoadError($LoadError)
    {
        $this->LoadError = $LoadError;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLoadState()
    {
        return $this->LoadState;
    }

    /**
     * @param mixed $LoadState
     * @return Device
     */
    public function setLoadState($LoadState)
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
     * @return Device
     */
    public function setNames(array $Names): Device
    {
        $this->Names = $Names;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNeedDaemonReload()
    {
        return $this->NeedDaemonReload;
    }

    /**
     * @param mixed $NeedDaemonReload
     * @return Device
     */
    public function setNeedDaemonReload($NeedDaemonReload)
    {
        $this->NeedDaemonReload = $NeedDaemonReload;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOnFailureJobMode()
    {
        return $this->OnFailureJobMode;
    }

    /**
     * @param mixed $OnFailureJobMode
     * @return Device
     */
    public function setOnFailureJobMode($OnFailureJobMode)
    {
        $this->OnFailureJobMode = $OnFailureJobMode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPerpetual()
    {
        return $this->Perpetual;
    }

    /**
     * @param mixed $Perpetual
     * @return Device
     */
    public function setPerpetual($Perpetual)
    {
        $this->Perpetual = $Perpetual;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRefuseManualStart()
    {
        return $this->RefuseManualStart;
    }

    /**
     * @param mixed $RefuseManualStart
     * @return Device
     */
    public function setRefuseManualStart($RefuseManualStart)
    {
        $this->RefuseManualStart = $RefuseManualStart;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRefuseManualStop()
    {
        return $this->RefuseManualStop;
    }

    /**
     * @param mixed $RefuseManualStop
     * @return Device
     */
    public function setRefuseManualStop($RefuseManualStop)
    {
        $this->RefuseManualStop = $RefuseManualStop;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStartLimitAction()
    {
        return $this->StartLimitAction;
    }

    /**
     * @param mixed $StartLimitAction
     * @return Device
     */
    public function setStartLimitAction($StartLimitAction)
    {
        $this->StartLimitAction = $StartLimitAction;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStartLimitBurst()
    {
        return $this->StartLimitBurst;
    }

    /**
     * @param mixed $StartLimitBurst
     * @return Device
     */
    public function setStartLimitBurst($StartLimitBurst)
    {
        $this->StartLimitBurst = $StartLimitBurst;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStartLimitIntervalSec()
    {
        return $this->StartLimitIntervalSec;
    }

    /**
     * @param mixed $StartLimitIntervalSec
     * @return Device
     */
    public function setStartLimitIntervalSec($StartLimitIntervalSec)
    {
        $this->StartLimitIntervalSec = $StartLimitIntervalSec;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStateChangeTimestamp()
    {
        return $this->StateChangeTimestamp;
    }

    /**
     * @param mixed $StateChangeTimestamp
     * @return Device
     */
    public function setStateChangeTimestamp($StateChangeTimestamp)
    {
        $this->StateChangeTimestamp = $StateChangeTimestamp;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStateChangeTimestampMonotonic()
    {
        return $this->StateChangeTimestampMonotonic;
    }

    /**
     * @param mixed $StateChangeTimestampMonotonic
     * @return Device
     */
    public function setStateChangeTimestampMonotonic($StateChangeTimestampMonotonic)
    {
        $this->StateChangeTimestampMonotonic = $StateChangeTimestampMonotonic;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStopWhenUnneeded()
    {
        return $this->StopWhenUnneeded;
    }

    /**
     * @param mixed $StopWhenUnneeded
     * @return Device
     */
    public function setStopWhenUnneeded($StopWhenUnneeded)
    {
        $this->StopWhenUnneeded = $StopWhenUnneeded;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSubState()
    {
        return $this->SubState;
    }

    /**
     * @param mixed $SubState
     * @return Device
     */
    public function setSubState($SubState)
    {
        $this->SubState = $SubState;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSysFSPath()
    {
        return $this->SysFSPath;
    }

    /**
     * @param mixed $SysFSPath
     * @return Device
     */
    public function setSysFSPath($SysFSPath)
    {
        $this->SysFSPath = $SysFSPath;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTransient()
    {
        return $this->Transient;
    }

    /**
     * @param mixed $Transient
     * @return Device
     */
    public function setTransient($Transient)
    {
        $this->Transient = $Transient;
        return $this;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
