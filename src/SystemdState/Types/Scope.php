<?php

namespace CyberLine\SystemdState\Types;

class Scope implements \JsonSerializable
{
    private $ActiveEnterTimestamp;

    private $ActiveEnterTimestampMonotonic;

    private $ActiveExitTimestampMonotonic;

    private $ActiveState;

    private $After = [];

    private $AllowIsolate;

    private $AssertResult;

    private $AssertTimestamp;

    private $AssertTimestampMonotonic;

    private $Before = [];

    private $BlockIOAccounting;

    private $BlockIOWeight;

    private $CPUAccounting;

    private $CPUQuotaPerSecUSec;

    private $CPUShares;

    private $CPUUsageNSec;

    private $CPUWeight;

    private $CanIsolate;

    private $CanReload;

    private $CanStart;

    private $CanStop;

    private $ConditionResult;

    private $ConditionTimestamp;

    private $ConditionTimestampMonotonic;

    private $Conflicts = [];

    private $ControlGroup;

    private $DefaultDependencies;

    private $Delegate;

    private $Description;

    private $DevicePolicy;

    private $Documentation;

    private $FragmentPath;

    private $IOAccounting;

    private $IOWeight;

    private $Id;

    private $IgnoreOnIsolate;

    private $InactiveEnterTimestampMonotonic;

    private $InactiveExitTimestamp;

    private $InactiveExitTimestampMonotonic;

    private $InvocationID;

    private $JobTimeoutAction;

    private $JobTimeoutUSec;

    private $KillMode;

    private $KillSignal;

    private $LoadError;

    private $LoadState;

    private $MemoryAccounting;

    private $MemoryCurrent;

    private $MemoryHigh;

    private $MemoryLimit;

    private $MemoryLow;

    private $MemoryMax;

    private $MemorySwapMax;

    private $Names = [];

    private $NeedDaemonReload;

    private $OnFailureJobMode;

    private $Perpetual;

    private $RefuseManualStart;

    private $RefuseManualStop;

    private $Requires = [];

    private $Result;

    private $SendSIGHUP;

    private $SendSIGKILL;

    private $Slice;

    private $StartLimitAction;

    private $StartLimitBurst;

    private $StartLimitIntervalSec;

    private $StartupBlockIOWeight;

    private $StartupCPUShares;

    private $StartupCPUWeight;

    private $StartupIOWeight;

    private $StateChangeTimestamp;

    private $StateChangeTimestampMonotonic;

    private $StopWhenUnneeded;

    private $SubState;

    private $TasksAccounting;

    private $TasksCurrent;

    private $TasksMax;

    private $TimeoutStopUSec;

    private $Transient;

    private $UnitFilePreset;

    private $UnitFileState;

    /**
     * @return mixed
     */
    public function getActiveEnterTimestamp()
    {
        return $this->ActiveEnterTimestamp;
    }

    /**
     * @param mixed $ActiveEnterTimestamp
     * @return Scope
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
     * @return Scope
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
     * @return Scope
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
     * @return Scope
     */
    public function setActiveState($ActiveState)
    {
        $this->ActiveState = $ActiveState;
        return $this;
    }

    /**
     * @return array
     */
    public function getAfter(): array
    {
        return $this->After;
    }

    /**
     * @param array $After
     * @return Scope
     */
    public function setAfter(array $After): Scope
    {
        $this->After = $After;
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
     * @return Scope
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
     * @return Scope
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
     * @return Scope
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
     * @return Scope
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
     * @return Scope
     */
    public function setBefore(array $Before): Scope
    {
        $this->Before = $Before;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBlockIOAccounting()
    {
        return $this->BlockIOAccounting;
    }

    /**
     * @param mixed $BlockIOAccounting
     * @return Scope
     */
    public function setBlockIOAccounting($BlockIOAccounting)
    {
        $this->BlockIOAccounting = $BlockIOAccounting;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBlockIOWeight()
    {
        return $this->BlockIOWeight;
    }

    /**
     * @param mixed $BlockIOWeight
     * @return Scope
     */
    public function setBlockIOWeight($BlockIOWeight)
    {
        $this->BlockIOWeight = $BlockIOWeight;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCPUAccounting()
    {
        return $this->CPUAccounting;
    }

    /**
     * @param mixed $CPUAccounting
     * @return Scope
     */
    public function setCPUAccounting($CPUAccounting)
    {
        $this->CPUAccounting = $CPUAccounting;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCPUQuotaPerSecUSec()
    {
        return $this->CPUQuotaPerSecUSec;
    }

    /**
     * @param mixed $CPUQuotaPerSecUSec
     * @return Scope
     */
    public function setCPUQuotaPerSecUSec($CPUQuotaPerSecUSec)
    {
        $this->CPUQuotaPerSecUSec = $CPUQuotaPerSecUSec;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCPUShares()
    {
        return $this->CPUShares;
    }

    /**
     * @param mixed $CPUShares
     * @return Scope
     */
    public function setCPUShares($CPUShares)
    {
        $this->CPUShares = $CPUShares;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCPUUsageNSec()
    {
        return $this->CPUUsageNSec;
    }

    /**
     * @param mixed $CPUUsageNSec
     * @return Scope
     */
    public function setCPUUsageNSec($CPUUsageNSec)
    {
        $this->CPUUsageNSec = $CPUUsageNSec;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCPUWeight()
    {
        return $this->CPUWeight;
    }

    /**
     * @param mixed $CPUWeight
     * @return Scope
     */
    public function setCPUWeight($CPUWeight)
    {
        $this->CPUWeight = $CPUWeight;
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
     * @return Scope
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
     * @return Scope
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
     * @return Scope
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
     * @return Scope
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
     * @return Scope
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
     * @return Scope
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
     * @return Scope
     */
    public function setConditionTimestampMonotonic($ConditionTimestampMonotonic)
    {
        $this->ConditionTimestampMonotonic = $ConditionTimestampMonotonic;
        return $this;
    }

    /**
     * @return array
     */
    public function getConflicts(): array
    {
        return $this->Conflicts;
    }

    /**
     * @param array $Conflicts
     * @return Scope
     */
    public function setConflicts(array $Conflicts): Scope
    {
        $this->Conflicts = $Conflicts;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getControlGroup()
    {
        return $this->ControlGroup;
    }

    /**
     * @param mixed $ControlGroup
     * @return Scope
     */
    public function setControlGroup($ControlGroup)
    {
        $this->ControlGroup = $ControlGroup;
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
     * @return Scope
     */
    public function setDefaultDependencies($DefaultDependencies)
    {
        $this->DefaultDependencies = $DefaultDependencies;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDelegate()
    {
        return $this->Delegate;
    }

    /**
     * @param mixed $Delegate
     * @return Scope
     */
    public function setDelegate($Delegate)
    {
        $this->Delegate = $Delegate;
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
     * @return Scope
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDevicePolicy()
    {
        return $this->DevicePolicy;
    }

    /**
     * @param mixed $DevicePolicy
     * @return Scope
     */
    public function setDevicePolicy($DevicePolicy)
    {
        $this->DevicePolicy = $DevicePolicy;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDocumentation()
    {
        return $this->Documentation;
    }

    /**
     * @param mixed $Documentation
     * @return Scope
     */
    public function setDocumentation($Documentation)
    {
        $this->Documentation = $Documentation;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFragmentPath()
    {
        return $this->FragmentPath;
    }

    /**
     * @param mixed $FragmentPath
     * @return Scope
     */
    public function setFragmentPath($FragmentPath)
    {
        $this->FragmentPath = $FragmentPath;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIOAccounting()
    {
        return $this->IOAccounting;
    }

    /**
     * @param mixed $IOAccounting
     * @return Scope
     */
    public function setIOAccounting($IOAccounting)
    {
        $this->IOAccounting = $IOAccounting;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIOWeight()
    {
        return $this->IOWeight;
    }

    /**
     * @param mixed $IOWeight
     * @return Scope
     */
    public function setIOWeight($IOWeight)
    {
        $this->IOWeight = $IOWeight;
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
     * @return Scope
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
     * @return Scope
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
     * @return Scope
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
     * @return Scope
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
     * @return Scope
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
     * @return Scope
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
     * @return Scope
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
     * @return Scope
     */
    public function setJobTimeoutUSec($JobTimeoutUSec)
    {
        $this->JobTimeoutUSec = $JobTimeoutUSec;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getKillMode()
    {
        return $this->KillMode;
    }

    /**
     * @param mixed $KillMode
     * @return Scope
     */
    public function setKillMode($KillMode)
    {
        $this->KillMode = $KillMode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getKillSignal()
    {
        return $this->KillSignal;
    }

    /**
     * @param mixed $KillSignal
     * @return Scope
     */
    public function setKillSignal($KillSignal)
    {
        $this->KillSignal = $KillSignal;
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
     * @return Scope
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
     * @return Scope
     */
    public function setLoadState($LoadState)
    {
        $this->LoadState = $LoadState;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMemoryAccounting()
    {
        return $this->MemoryAccounting;
    }

    /**
     * @param mixed $MemoryAccounting
     * @return Scope
     */
    public function setMemoryAccounting($MemoryAccounting)
    {
        $this->MemoryAccounting = $MemoryAccounting;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMemoryCurrent()
    {
        return $this->MemoryCurrent;
    }

    /**
     * @param mixed $MemoryCurrent
     * @return Scope
     */
    public function setMemoryCurrent($MemoryCurrent)
    {
        $this->MemoryCurrent = $MemoryCurrent;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMemoryHigh()
    {
        return $this->MemoryHigh;
    }

    /**
     * @param mixed $MemoryHigh
     * @return Scope
     */
    public function setMemoryHigh($MemoryHigh)
    {
        $this->MemoryHigh = $MemoryHigh;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMemoryLimit()
    {
        return $this->MemoryLimit;
    }

    /**
     * @param mixed $MemoryLimit
     * @return Scope
     */
    public function setMemoryLimit($MemoryLimit)
    {
        $this->MemoryLimit = $MemoryLimit;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMemoryLow()
    {
        return $this->MemoryLow;
    }

    /**
     * @param mixed $MemoryLow
     * @return Scope
     */
    public function setMemoryLow($MemoryLow)
    {
        $this->MemoryLow = $MemoryLow;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMemoryMax()
    {
        return $this->MemoryMax;
    }

    /**
     * @param mixed $MemoryMax
     * @return Scope
     */
    public function setMemoryMax($MemoryMax)
    {
        $this->MemoryMax = $MemoryMax;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMemorySwapMax()
    {
        return $this->MemorySwapMax;
    }

    /**
     * @param mixed $MemorySwapMax
     * @return Scope
     */
    public function setMemorySwapMax($MemorySwapMax)
    {
        $this->MemorySwapMax = $MemorySwapMax;
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
     * @return Scope
     */
    public function setNames(array $Names): Scope
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
     * @return Scope
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
     * @return Scope
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
     * @return Scope
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
     * @return Scope
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
     * @return Scope
     */
    public function setRefuseManualStop($RefuseManualStop)
    {
        $this->RefuseManualStop = $RefuseManualStop;
        return $this;
    }

    /**
     * @return array
     */
    public function getRequires(): array
    {
        return $this->Requires;
    }

    /**
     * @param array $Requires
     * @return Scope
     */
    public function setRequires(array $Requires): Scope
    {
        $this->Requires = $Requires;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->Result;
    }

    /**
     * @param mixed $Result
     * @return Scope
     */
    public function setResult($Result)
    {
        $this->Result = $Result;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSendSIGHUP()
    {
        return $this->SendSIGHUP;
    }

    /**
     * @param mixed $SendSIGHUP
     * @return Scope
     */
    public function setSendSIGHUP($SendSIGHUP)
    {
        $this->SendSIGHUP = $SendSIGHUP;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSendSIGKILL()
    {
        return $this->SendSIGKILL;
    }

    /**
     * @param mixed $SendSIGKILL
     * @return Scope
     */
    public function setSendSIGKILL($SendSIGKILL)
    {
        $this->SendSIGKILL = $SendSIGKILL;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSlice()
    {
        return $this->Slice;
    }

    /**
     * @param mixed $Slice
     * @return Scope
     */
    public function setSlice($Slice)
    {
        $this->Slice = $Slice;
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
     * @return Scope
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
     * @return Scope
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
     * @return Scope
     */
    public function setStartLimitIntervalSec($StartLimitIntervalSec)
    {
        $this->StartLimitIntervalSec = $StartLimitIntervalSec;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStartupBlockIOWeight()
    {
        return $this->StartupBlockIOWeight;
    }

    /**
     * @param mixed $StartupBlockIOWeight
     * @return Scope
     */
    public function setStartupBlockIOWeight($StartupBlockIOWeight)
    {
        $this->StartupBlockIOWeight = $StartupBlockIOWeight;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStartupCPUShares()
    {
        return $this->StartupCPUShares;
    }

    /**
     * @param mixed $StartupCPUShares
     * @return Scope
     */
    public function setStartupCPUShares($StartupCPUShares)
    {
        $this->StartupCPUShares = $StartupCPUShares;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStartupCPUWeight()
    {
        return $this->StartupCPUWeight;
    }

    /**
     * @param mixed $StartupCPUWeight
     * @return Scope
     */
    public function setStartupCPUWeight($StartupCPUWeight)
    {
        $this->StartupCPUWeight = $StartupCPUWeight;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStartupIOWeight()
    {
        return $this->StartupIOWeight;
    }

    /**
     * @param mixed $StartupIOWeight
     * @return Scope
     */
    public function setStartupIOWeight($StartupIOWeight)
    {
        $this->StartupIOWeight = $StartupIOWeight;
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
     * @return Scope
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
     * @return Scope
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
     * @return Scope
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
     * @return Scope
     */
    public function setSubState($SubState)
    {
        $this->SubState = $SubState;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTasksAccounting()
    {
        return $this->TasksAccounting;
    }

    /**
     * @param mixed $TasksAccounting
     * @return Scope
     */
    public function setTasksAccounting($TasksAccounting)
    {
        $this->TasksAccounting = $TasksAccounting;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTasksCurrent()
    {
        return $this->TasksCurrent;
    }

    /**
     * @param mixed $TasksCurrent
     * @return Scope
     */
    public function setTasksCurrent($TasksCurrent)
    {
        $this->TasksCurrent = $TasksCurrent;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTasksMax()
    {
        return $this->TasksMax;
    }

    /**
     * @param mixed $TasksMax
     * @return Scope
     */
    public function setTasksMax($TasksMax)
    {
        $this->TasksMax = $TasksMax;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTimeoutStopUSec()
    {
        return $this->TimeoutStopUSec;
    }

    /**
     * @param mixed $TimeoutStopUSec
     * @return Scope
     */
    public function setTimeoutStopUSec($TimeoutStopUSec)
    {
        $this->TimeoutStopUSec = $TimeoutStopUSec;
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
     * @return Scope
     */
    public function setTransient($Transient)
    {
        $this->Transient = $Transient;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUnitFilePreset()
    {
        return $this->UnitFilePreset;
    }

    /**
     * @param mixed $UnitFilePreset
     * @return Scope
     */
    public function setUnitFilePreset($UnitFilePreset)
    {
        $this->UnitFilePreset = $UnitFilePreset;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUnitFileState()
    {
        return $this->UnitFileState;
    }

    /**
     * @param mixed $UnitFileState
     * @return Scope
     */
    public function setUnitFileState($UnitFileState)
    {
        $this->UnitFileState = $UnitFileState;
        return $this;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
