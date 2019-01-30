<?php

namespace CyberLine\SystemdState\Types;

class Mount implements \JsonSerializable
{
    private $ActiveEnterTimestamp;

    private $ActiveEnterTimestampMonotonic;

    private $ActiveExitTimestampMonotonic;

    private $ActiveState;

    private $After = [];

    private $AllowIsolate;

    private $AmbientCapabilities;

    private $AssertResult;

    private $AssertTimestamp;

    private $AssertTimestampMonotonic;

    private $Before = [];

    private $BindsTo = [];

    private $BlockIOAccounting;

    private $BlockIOWeight;

    private $CPUAccounting;

    private $CPUQuotaPerSecUSec;

    private $CPUSchedulingPolicy;

    private $CPUSchedulingPriority;

    private $CPUSchedulingResetOnFork;

    private $CPUShares;

    private $CPUUsageNSec;

    private $CPUWeight;

    private $CanIsolate;

    private $CanReload;

    private $CanStart;

    private $CanStop;

    private $CapabilityBoundingSet;

    private $ConditionResult;

    private $ConditionTimestamp;

    private $ConditionTimestampMonotonic;

    private $Conflicts = [];

    private $ControlGroup;

    private $ControlPID;

    private $DefaultDependencies;

    private $Delegate;

    private $Description;

    private $DevicePolicy;

    private $DirectoryMode;

    private $Documentation = [];

    private $DynamicUser;

    private $ForceUnmount;

    private $FragmentPath;

    private $GID;

    private $IOAccounting;

    private $IOScheduling;

    private $IOWeight;

    private $Id;

    private $IgnoreOnIsolate;

    private $IgnoreSIGPIPE;

    private $InactiveEnterTimestampMonotonic;

    private $InactiveExitTimestamp;

    private $InactiveExitTimestampMonotonic;

    private $InvocationID;

    private $JobTimeoutAction;

    private $JobTimeoutUSec;

    private $KillMode;

    private $KillSignal;

    private $LazyUnmount;

    private $LimitAS;

    private $LimitASSoft;

    private $LimitCORE;

    private $LimitCORESoft;

    private $LimitCPU;

    private $LimitCPUSoft;

    private $LimitDATA;

    private $LimitDATASoft;

    private $LimitFSIZE;

    private $LimitFSIZESoft;

    private $LimitLOCKS;

    private $LimitLOCKSSoft;

    private $LimitMEMLOCK;

    private $LimitMEMLOCKSoft;

    private $LimitMSGQUEUE;

    private $LimitMSGQUEUESoft;

    private $LimitNICE;

    private $LimitNICESoft;

    private $LimitNOFILE;

    private $LimitNOFILESoft;

    private $LimitNPROC;

    private $LimitNPROCSoft;

    private $LimitRSS;

    private $LimitRSSSoft;

    private $LimitRTPRIO;

    private $LimitRTPRIOSoft;

    private $LimitRTTIME;

    private $LimitRTTIMESoft;

    private $LimitSIGPENDING;

    private $LimitSIGPENDINGSoft;

    private $LimitSTACK;

    private $LimitSTACKSoft;

    private $LoadError;

    private $LoadState;

    private $MemoryAccounting;

    private $MemoryCurrent;

    private $MemoryDenyWriteExecute;

    private $MemoryHigh;

    private $MemoryLimit;

    private $MemoryLow;

    private $MemoryMax;

    private $MemorySwapMax;

    private $MountFlags;

    private $Names = [];

    private $NeedDaemonReload;

    private $Nice;

    private $NoNewPrivileges;

    private $NonBlocking;

    private $OOMScoreAdjust;

    private $OnFailureJobMode;

    private $Options;

    private $Perpetual;

    private $PrivateDevices;

    private $PrivateNetwork;

    private $PrivateTmp;

    private $PrivateUsers;

    private $ProtectControlGroups;

    private $ProtectHome;

    private $ProtectKernelModules;

    private $ProtectKernelTunables;

    private $ProtectSystem;

    private $RefuseManualStart;

    private $RefuseManualStop;

    private $RemoveIPC;

    private $RequiredBy = [];

    private $Requires = [];

    private $RequiresMountsFor = [];

    private $RestrictNamespace;

    private $RestrictRealtime;

    private $Result;

    private $RuntimeDirectoryMode;

    private $SameProcessGroup;

    private $SecureBits;

    private $SendSIGHUP;

    private $SendSIGKILL;

    private $Slice;

    private $SloppyOptions;

    private $SourcePath;

    private $StandardError;

    private $StandardInput;

    private $StandardOutput;

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

    private $SyslogFacility;

    private $SyslogLevel;

    private $SyslogLevelPrefix;

    private $SyslogPriority;

    private $SystemCallErrorNumber;

    private $TTYReset;

    private $TTYVHangup;

    private $TTYVTDisallocate;

    private $TasksAccounting;

    private $TasksCurrent;

    private $TasksMax;

    private $TimeoutUSec;

    private $TimerSlackNSec;

    private $Transient;

    private $TriggeredBy;

    private $Type;

    private $UID;

    private $UMask;

    private $UnitFilePreset;

    private $UnitFileState;

    private $UtmpMode;

    private $WantedBy = [];

    private $What;

    private $Where;

    /**
     * @return mixed
     */
    public function getActiveEnterTimestamp()
    {
        return $this->ActiveEnterTimestamp;
    }

    /**
     * @param mixed $ActiveEnterTimestamp
     * @return Mount
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
     * @return Mount
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
     * @return Mount
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
     * @return Mount
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
     * @return Mount
     */
    public function setAfter(array $After): Mount
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
     * @return Mount
     */
    public function setAllowIsolate($AllowIsolate)
    {
        $this->AllowIsolate = $AllowIsolate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAmbientCapabilities()
    {
        return $this->AmbientCapabilities;
    }

    /**
     * @param mixed $AmbientCapabilities
     * @return Mount
     */
    public function setAmbientCapabilities($AmbientCapabilities)
    {
        $this->AmbientCapabilities = $AmbientCapabilities;
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
     * @return Mount
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
     * @return Mount
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
     * @return Mount
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
     * @return Mount
     */
    public function setBefore(array $Before): Mount
    {
        $this->Before = $Before;
        return $this;
    }

    /**
     * @return array
     */
    public function getBindsTo(): array
    {
        return $this->BindsTo;
    }

    /**
     * @param array $BindsTo
     * @return Mount
     */
    public function setBindsTo(array $BindsTo): Mount
    {
        $this->BindsTo = $BindsTo;
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
     * @return Mount
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
     * @return Mount
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
     * @return Mount
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
     * @return Mount
     */
    public function setCPUQuotaPerSecUSec($CPUQuotaPerSecUSec)
    {
        $this->CPUQuotaPerSecUSec = $CPUQuotaPerSecUSec;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCPUSchedulingPolicy()
    {
        return $this->CPUSchedulingPolicy;
    }

    /**
     * @param mixed $CPUSchedulingPolicy
     * @return Mount
     */
    public function setCPUSchedulingPolicy($CPUSchedulingPolicy)
    {
        $this->CPUSchedulingPolicy = $CPUSchedulingPolicy;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCPUSchedulingPriority()
    {
        return $this->CPUSchedulingPriority;
    }

    /**
     * @param mixed $CPUSchedulingPriority
     * @return Mount
     */
    public function setCPUSchedulingPriority($CPUSchedulingPriority)
    {
        $this->CPUSchedulingPriority = $CPUSchedulingPriority;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCPUSchedulingResetOnFork()
    {
        return $this->CPUSchedulingResetOnFork;
    }

    /**
     * @param mixed $CPUSchedulingResetOnFork
     * @return Mount
     */
    public function setCPUSchedulingResetOnFork($CPUSchedulingResetOnFork)
    {
        $this->CPUSchedulingResetOnFork = $CPUSchedulingResetOnFork;
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
     * @return Mount
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
     * @return Mount
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
     * @return Mount
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
     * @return Mount
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
     * @return Mount
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
     * @return Mount
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
     * @return Mount
     */
    public function setCanStop($CanStop)
    {
        $this->CanStop = $CanStop;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCapabilityBoundingSet()
    {
        return $this->CapabilityBoundingSet;
    }

    /**
     * @param mixed $CapabilityBoundingSet
     * @return Mount
     */
    public function setCapabilityBoundingSet($CapabilityBoundingSet)
    {
        $this->CapabilityBoundingSet = $CapabilityBoundingSet;
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
     * @return Mount
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
     * @return Mount
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
     * @return Mount
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
     * @return Mount
     */
    public function setConflicts(array $Conflicts): Mount
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
     * @return Mount
     */
    public function setControlGroup($ControlGroup)
    {
        $this->ControlGroup = $ControlGroup;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getControlPID()
    {
        return $this->ControlPID;
    }

    /**
     * @param mixed $ControlPID
     * @return Mount
     */
    public function setControlPID($ControlPID)
    {
        $this->ControlPID = $ControlPID;
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
     * @return Mount
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
     * @return Mount
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
     * @return Mount
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
     * @return Mount
     */
    public function setDevicePolicy($DevicePolicy)
    {
        $this->DevicePolicy = $DevicePolicy;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDirectoryMode()
    {
        return $this->DirectoryMode;
    }

    /**
     * @param mixed $DirectoryMode
     * @return Mount
     */
    public function setDirectoryMode($DirectoryMode)
    {
        $this->DirectoryMode = $DirectoryMode;
        return $this;
    }

    /**
     * @return array
     */
    public function getDocumentation(): array
    {
        return $this->Documentation;
    }

    /**
     * @param array $Documentation
     * @return Mount
     */
    public function setDocumentation(array $Documentation): Mount
    {
        $this->Documentation = $Documentation;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDynamicUser()
    {
        return $this->DynamicUser;
    }

    /**
     * @param mixed $DynamicUser
     * @return Mount
     */
    public function setDynamicUser($DynamicUser)
    {
        $this->DynamicUser = $DynamicUser;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getForceUnmount()
    {
        return $this->ForceUnmount;
    }

    /**
     * @param mixed $ForceUnmount
     * @return Mount
     */
    public function setForceUnmount($ForceUnmount)
    {
        $this->ForceUnmount = $ForceUnmount;
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
     * @return Mount
     */
    public function setFragmentPath($FragmentPath)
    {
        $this->FragmentPath = $FragmentPath;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGID()
    {
        return $this->GID;
    }

    /**
     * @param mixed $GID
     * @return Mount
     */
    public function setGID($GID)
    {
        $this->GID = $GID;
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
     * @return Mount
     */
    public function setIOAccounting($IOAccounting)
    {
        $this->IOAccounting = $IOAccounting;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIOScheduling()
    {
        return $this->IOScheduling;
    }

    /**
     * @param mixed $IOScheduling
     * @return Mount
     */
    public function setIOScheduling($IOScheduling)
    {
        $this->IOScheduling = $IOScheduling;
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
     * @return Mount
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
     * @return Mount
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
     * @return Mount
     */
    public function setIgnoreOnIsolate($IgnoreOnIsolate)
    {
        $this->IgnoreOnIsolate = $IgnoreOnIsolate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIgnoreSIGPIPE()
    {
        return $this->IgnoreSIGPIPE;
    }

    /**
     * @param mixed $IgnoreSIGPIPE
     * @return Mount
     */
    public function setIgnoreSIGPIPE($IgnoreSIGPIPE)
    {
        $this->IgnoreSIGPIPE = $IgnoreSIGPIPE;
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
     * @return Mount
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
     * @return Mount
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
     * @return Mount
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
     * @return Mount
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
     * @return Mount
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
     * @return Mount
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
     * @return Mount
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
     * @return Mount
     */
    public function setKillSignal($KillSignal)
    {
        $this->KillSignal = $KillSignal;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLazyUnmount()
    {
        return $this->LazyUnmount;
    }

    /**
     * @param mixed $LazyUnmount
     * @return Mount
     */
    public function setLazyUnmount($LazyUnmount)
    {
        $this->LazyUnmount = $LazyUnmount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLimitAS()
    {
        return $this->LimitAS;
    }

    /**
     * @param mixed $LimitAS
     * @return Mount
     */
    public function setLimitAS($LimitAS)
    {
        $this->LimitAS = $LimitAS;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLimitASSoft()
    {
        return $this->LimitASSoft;
    }

    /**
     * @param mixed $LimitASSoft
     * @return Mount
     */
    public function setLimitASSoft($LimitASSoft)
    {
        $this->LimitASSoft = $LimitASSoft;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLimitCORE()
    {
        return $this->LimitCORE;
    }

    /**
     * @param mixed $LimitCORE
     * @return Mount
     */
    public function setLimitCORE($LimitCORE)
    {
        $this->LimitCORE = $LimitCORE;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLimitCORESoft()
    {
        return $this->LimitCORESoft;
    }

    /**
     * @param mixed $LimitCORESoft
     * @return Mount
     */
    public function setLimitCORESoft($LimitCORESoft)
    {
        $this->LimitCORESoft = $LimitCORESoft;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLimitCPU()
    {
        return $this->LimitCPU;
    }

    /**
     * @param mixed $LimitCPU
     * @return Mount
     */
    public function setLimitCPU($LimitCPU)
    {
        $this->LimitCPU = $LimitCPU;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLimitCPUSoft()
    {
        return $this->LimitCPUSoft;
    }

    /**
     * @param mixed $LimitCPUSoft
     * @return Mount
     */
    public function setLimitCPUSoft($LimitCPUSoft)
    {
        $this->LimitCPUSoft = $LimitCPUSoft;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLimitDATA()
    {
        return $this->LimitDATA;
    }

    /**
     * @param mixed $LimitDATA
     * @return Mount
     */
    public function setLimitDATA($LimitDATA)
    {
        $this->LimitDATA = $LimitDATA;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLimitDATASoft()
    {
        return $this->LimitDATASoft;
    }

    /**
     * @param mixed $LimitDATASoft
     * @return Mount
     */
    public function setLimitDATASoft($LimitDATASoft)
    {
        $this->LimitDATASoft = $LimitDATASoft;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLimitFSIZE()
    {
        return $this->LimitFSIZE;
    }

    /**
     * @param mixed $LimitFSIZE
     * @return Mount
     */
    public function setLimitFSIZE($LimitFSIZE)
    {
        $this->LimitFSIZE = $LimitFSIZE;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLimitFSIZESoft()
    {
        return $this->LimitFSIZESoft;
    }

    /**
     * @param mixed $LimitFSIZESoft
     * @return Mount
     */
    public function setLimitFSIZESoft($LimitFSIZESoft)
    {
        $this->LimitFSIZESoft = $LimitFSIZESoft;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLimitLOCKS()
    {
        return $this->LimitLOCKS;
    }

    /**
     * @param mixed $LimitLOCKS
     * @return Mount
     */
    public function setLimitLOCKS($LimitLOCKS)
    {
        $this->LimitLOCKS = $LimitLOCKS;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLimitLOCKSSoft()
    {
        return $this->LimitLOCKSSoft;
    }

    /**
     * @param mixed $LimitLOCKSSoft
     * @return Mount
     */
    public function setLimitLOCKSSoft($LimitLOCKSSoft)
    {
        $this->LimitLOCKSSoft = $LimitLOCKSSoft;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLimitMEMLOCK()
    {
        return $this->LimitMEMLOCK;
    }

    /**
     * @param mixed $LimitMEMLOCK
     * @return Mount
     */
    public function setLimitMEMLOCK($LimitMEMLOCK)
    {
        $this->LimitMEMLOCK = $LimitMEMLOCK;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLimitMEMLOCKSoft()
    {
        return $this->LimitMEMLOCKSoft;
    }

    /**
     * @param mixed $LimitMEMLOCKSoft
     * @return Mount
     */
    public function setLimitMEMLOCKSoft($LimitMEMLOCKSoft)
    {
        $this->LimitMEMLOCKSoft = $LimitMEMLOCKSoft;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLimitMSGQUEUE()
    {
        return $this->LimitMSGQUEUE;
    }

    /**
     * @param mixed $LimitMSGQUEUE
     * @return Mount
     */
    public function setLimitMSGQUEUE($LimitMSGQUEUE)
    {
        $this->LimitMSGQUEUE = $LimitMSGQUEUE;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLimitMSGQUEUESoft()
    {
        return $this->LimitMSGQUEUESoft;
    }

    /**
     * @param mixed $LimitMSGQUEUESoft
     * @return Mount
     */
    public function setLimitMSGQUEUESoft($LimitMSGQUEUESoft)
    {
        $this->LimitMSGQUEUESoft = $LimitMSGQUEUESoft;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLimitNICE()
    {
        return $this->LimitNICE;
    }

    /**
     * @param mixed $LimitNICE
     * @return Mount
     */
    public function setLimitNICE($LimitNICE)
    {
        $this->LimitNICE = $LimitNICE;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLimitNICESoft()
    {
        return $this->LimitNICESoft;
    }

    /**
     * @param mixed $LimitNICESoft
     * @return Mount
     */
    public function setLimitNICESoft($LimitNICESoft)
    {
        $this->LimitNICESoft = $LimitNICESoft;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLimitNOFILE()
    {
        return $this->LimitNOFILE;
    }

    /**
     * @param mixed $LimitNOFILE
     * @return Mount
     */
    public function setLimitNOFILE($LimitNOFILE)
    {
        $this->LimitNOFILE = $LimitNOFILE;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLimitNOFILESoft()
    {
        return $this->LimitNOFILESoft;
    }

    /**
     * @param mixed $LimitNOFILESoft
     * @return Mount
     */
    public function setLimitNOFILESoft($LimitNOFILESoft)
    {
        $this->LimitNOFILESoft = $LimitNOFILESoft;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLimitNPROC()
    {
        return $this->LimitNPROC;
    }

    /**
     * @param mixed $LimitNPROC
     * @return Mount
     */
    public function setLimitNPROC($LimitNPROC)
    {
        $this->LimitNPROC = $LimitNPROC;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLimitNPROCSoft()
    {
        return $this->LimitNPROCSoft;
    }

    /**
     * @param mixed $LimitNPROCSoft
     * @return Mount
     */
    public function setLimitNPROCSoft($LimitNPROCSoft)
    {
        $this->LimitNPROCSoft = $LimitNPROCSoft;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLimitRSS()
    {
        return $this->LimitRSS;
    }

    /**
     * @param mixed $LimitRSS
     * @return Mount
     */
    public function setLimitRSS($LimitRSS)
    {
        $this->LimitRSS = $LimitRSS;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLimitRSSSoft()
    {
        return $this->LimitRSSSoft;
    }

    /**
     * @param mixed $LimitRSSSoft
     * @return Mount
     */
    public function setLimitRSSSoft($LimitRSSSoft)
    {
        $this->LimitRSSSoft = $LimitRSSSoft;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLimitRTPRIO()
    {
        return $this->LimitRTPRIO;
    }

    /**
     * @param mixed $LimitRTPRIO
     * @return Mount
     */
    public function setLimitRTPRIO($LimitRTPRIO)
    {
        $this->LimitRTPRIO = $LimitRTPRIO;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLimitRTPRIOSoft()
    {
        return $this->LimitRTPRIOSoft;
    }

    /**
     * @param mixed $LimitRTPRIOSoft
     * @return Mount
     */
    public function setLimitRTPRIOSoft($LimitRTPRIOSoft)
    {
        $this->LimitRTPRIOSoft = $LimitRTPRIOSoft;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLimitRTTIME()
    {
        return $this->LimitRTTIME;
    }

    /**
     * @param mixed $LimitRTTIME
     * @return Mount
     */
    public function setLimitRTTIME($LimitRTTIME)
    {
        $this->LimitRTTIME = $LimitRTTIME;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLimitRTTIMESoft()
    {
        return $this->LimitRTTIMESoft;
    }

    /**
     * @param mixed $LimitRTTIMESoft
     * @return Mount
     */
    public function setLimitRTTIMESoft($LimitRTTIMESoft)
    {
        $this->LimitRTTIMESoft = $LimitRTTIMESoft;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLimitSIGPENDING()
    {
        return $this->LimitSIGPENDING;
    }

    /**
     * @param mixed $LimitSIGPENDING
     * @return Mount
     */
    public function setLimitSIGPENDING($LimitSIGPENDING)
    {
        $this->LimitSIGPENDING = $LimitSIGPENDING;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLimitSIGPENDINGSoft()
    {
        return $this->LimitSIGPENDINGSoft;
    }

    /**
     * @param mixed $LimitSIGPENDINGSoft
     * @return Mount
     */
    public function setLimitSIGPENDINGSoft($LimitSIGPENDINGSoft)
    {
        $this->LimitSIGPENDINGSoft = $LimitSIGPENDINGSoft;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLimitSTACK()
    {
        return $this->LimitSTACK;
    }

    /**
     * @param mixed $LimitSTACK
     * @return Mount
     */
    public function setLimitSTACK($LimitSTACK)
    {
        $this->LimitSTACK = $LimitSTACK;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLimitSTACKSoft()
    {
        return $this->LimitSTACKSoft;
    }

    /**
     * @param mixed $LimitSTACKSoft
     * @return Mount
     */
    public function setLimitSTACKSoft($LimitSTACKSoft)
    {
        $this->LimitSTACKSoft = $LimitSTACKSoft;
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
     * @return Mount
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
     * @return Mount
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
     * @return Mount
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
     * @return Mount
     */
    public function setMemoryCurrent($MemoryCurrent)
    {
        $this->MemoryCurrent = $MemoryCurrent;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMemoryDenyWriteExecute()
    {
        return $this->MemoryDenyWriteExecute;
    }

    /**
     * @param mixed $MemoryDenyWriteExecute
     * @return Mount
     */
    public function setMemoryDenyWriteExecute($MemoryDenyWriteExecute)
    {
        $this->MemoryDenyWriteExecute = $MemoryDenyWriteExecute;
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
     * @return Mount
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
     * @return Mount
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
     * @return Mount
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
     * @return Mount
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
     * @return Mount
     */
    public function setMemorySwapMax($MemorySwapMax)
    {
        $this->MemorySwapMax = $MemorySwapMax;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMountFlags()
    {
        return $this->MountFlags;
    }

    /**
     * @param mixed $MountFlags
     * @return Mount
     */
    public function setMountFlags($MountFlags)
    {
        $this->MountFlags = $MountFlags;
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
     * @return Mount
     */
    public function setNames(array $Names): Mount
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
     * @return Mount
     */
    public function setNeedDaemonReload($NeedDaemonReload)
    {
        $this->NeedDaemonReload = $NeedDaemonReload;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNice()
    {
        return $this->Nice;
    }

    /**
     * @param mixed $Nice
     * @return Mount
     */
    public function setNice($Nice)
    {
        $this->Nice = $Nice;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNoNewPrivileges()
    {
        return $this->NoNewPrivileges;
    }

    /**
     * @param mixed $NoNewPrivileges
     * @return Mount
     */
    public function setNoNewPrivileges($NoNewPrivileges)
    {
        $this->NoNewPrivileges = $NoNewPrivileges;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNonBlocking()
    {
        return $this->NonBlocking;
    }

    /**
     * @param mixed $NonBlocking
     * @return Mount
     */
    public function setNonBlocking($NonBlocking)
    {
        $this->NonBlocking = $NonBlocking;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOOMScoreAdjust()
    {
        return $this->OOMScoreAdjust;
    }

    /**
     * @param mixed $OOMScoreAdjust
     * @return Mount
     */
    public function setOOMScoreAdjust($OOMScoreAdjust)
    {
        $this->OOMScoreAdjust = $OOMScoreAdjust;
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
     * @return Mount
     */
    public function setOnFailureJobMode($OnFailureJobMode)
    {
        $this->OnFailureJobMode = $OnFailureJobMode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOptions()
    {
        return $this->Options;
    }

    /**
     * @param mixed $Options
     * @return Mount
     */
    public function setOptions($Options)
    {
        $this->Options = $Options;
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
     * @return Mount
     */
    public function setPerpetual($Perpetual)
    {
        $this->Perpetual = $Perpetual;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrivateDevices()
    {
        return $this->PrivateDevices;
    }

    /**
     * @param mixed $PrivateDevices
     * @return Mount
     */
    public function setPrivateDevices($PrivateDevices)
    {
        $this->PrivateDevices = $PrivateDevices;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrivateNetwork()
    {
        return $this->PrivateNetwork;
    }

    /**
     * @param mixed $PrivateNetwork
     * @return Mount
     */
    public function setPrivateNetwork($PrivateNetwork)
    {
        $this->PrivateNetwork = $PrivateNetwork;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrivateTmp()
    {
        return $this->PrivateTmp;
    }

    /**
     * @param mixed $PrivateTmp
     * @return Mount
     */
    public function setPrivateTmp($PrivateTmp)
    {
        $this->PrivateTmp = $PrivateTmp;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrivateUsers()
    {
        return $this->PrivateUsers;
    }

    /**
     * @param mixed $PrivateUsers
     * @return Mount
     */
    public function setPrivateUsers($PrivateUsers)
    {
        $this->PrivateUsers = $PrivateUsers;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProtectControlGroups()
    {
        return $this->ProtectControlGroups;
    }

    /**
     * @param mixed $ProtectControlGroups
     * @return Mount
     */
    public function setProtectControlGroups($ProtectControlGroups)
    {
        $this->ProtectControlGroups = $ProtectControlGroups;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProtectHome()
    {
        return $this->ProtectHome;
    }

    /**
     * @param mixed $ProtectHome
     * @return Mount
     */
    public function setProtectHome($ProtectHome)
    {
        $this->ProtectHome = $ProtectHome;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProtectKernelModules()
    {
        return $this->ProtectKernelModules;
    }

    /**
     * @param mixed $ProtectKernelModules
     * @return Mount
     */
    public function setProtectKernelModules($ProtectKernelModules)
    {
        $this->ProtectKernelModules = $ProtectKernelModules;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProtectKernelTunables()
    {
        return $this->ProtectKernelTunables;
    }

    /**
     * @param mixed $ProtectKernelTunables
     * @return Mount
     */
    public function setProtectKernelTunables($ProtectKernelTunables)
    {
        $this->ProtectKernelTunables = $ProtectKernelTunables;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProtectSystem()
    {
        return $this->ProtectSystem;
    }

    /**
     * @param mixed $ProtectSystem
     * @return Mount
     */
    public function setProtectSystem($ProtectSystem)
    {
        $this->ProtectSystem = $ProtectSystem;
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
     * @return Mount
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
     * @return Mount
     */
    public function setRefuseManualStop($RefuseManualStop)
    {
        $this->RefuseManualStop = $RefuseManualStop;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRemoveIPC()
    {
        return $this->RemoveIPC;
    }

    /**
     * @param mixed $RemoveIPC
     * @return Mount
     */
    public function setRemoveIPC($RemoveIPC)
    {
        $this->RemoveIPC = $RemoveIPC;
        return $this;
    }

    /**
     * @return array
     */
    public function getRequiredBy(): array
    {
        return $this->RequiredBy;
    }

    /**
     * @param array $RequiredBy
     * @return Mount
     */
    public function setRequiredBy(array $RequiredBy): Mount
    {
        $this->RequiredBy = $RequiredBy;
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
     * @return Mount
     */
    public function setRequires(array $Requires): Mount
    {
        $this->Requires = $Requires;
        return $this;
    }

    /**
     * @return array
     */
    public function getRequiresMountsFor(): array
    {
        return $this->RequiresMountsFor;
    }

    /**
     * @param array $RequiresMountsFor
     * @return Mount
     */
    public function setRequiresMountsFor(array $RequiresMountsFor): Mount
    {
        $this->RequiresMountsFor = $RequiresMountsFor;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRestrictNamespace()
    {
        return $this->RestrictNamespace;
    }

    /**
     * @param mixed $RestrictNamespace
     * @return Mount
     */
    public function setRestrictNamespace($RestrictNamespace)
    {
        $this->RestrictNamespace = $RestrictNamespace;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRestrictRealtime()
    {
        return $this->RestrictRealtime;
    }

    /**
     * @param mixed $RestrictRealtime
     * @return Mount
     */
    public function setRestrictRealtime($RestrictRealtime)
    {
        $this->RestrictRealtime = $RestrictRealtime;
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
     * @return Mount
     */
    public function setResult($Result)
    {
        $this->Result = $Result;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRuntimeDirectoryMode()
    {
        return $this->RuntimeDirectoryMode;
    }

    /**
     * @param mixed $RuntimeDirectoryMode
     * @return Mount
     */
    public function setRuntimeDirectoryMode($RuntimeDirectoryMode)
    {
        $this->RuntimeDirectoryMode = $RuntimeDirectoryMode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSameProcessGroup()
    {
        return $this->SameProcessGroup;
    }

    /**
     * @param mixed $SameProcessGroup
     * @return Mount
     */
    public function setSameProcessGroup($SameProcessGroup)
    {
        $this->SameProcessGroup = $SameProcessGroup;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSecureBits()
    {
        return $this->SecureBits;
    }

    /**
     * @param mixed $SecureBits
     * @return Mount
     */
    public function setSecureBits($SecureBits)
    {
        $this->SecureBits = $SecureBits;
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
     * @return Mount
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
     * @return Mount
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
     * @return Mount
     */
    public function setSlice($Slice)
    {
        $this->Slice = $Slice;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSloppyOptions()
    {
        return $this->SloppyOptions;
    }

    /**
     * @param mixed $SloppyOptions
     * @return Mount
     */
    public function setSloppyOptions($SloppyOptions)
    {
        $this->SloppyOptions = $SloppyOptions;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSourcePath()
    {
        return $this->SourcePath;
    }

    /**
     * @param mixed $SourcePath
     * @return Mount
     */
    public function setSourcePath($SourcePath)
    {
        $this->SourcePath = $SourcePath;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStandardError()
    {
        return $this->StandardError;
    }

    /**
     * @param mixed $StandardError
     * @return Mount
     */
    public function setStandardError($StandardError)
    {
        $this->StandardError = $StandardError;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStandardInput()
    {
        return $this->StandardInput;
    }

    /**
     * @param mixed $StandardInput
     * @return Mount
     */
    public function setStandardInput($StandardInput)
    {
        $this->StandardInput = $StandardInput;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStandardOutput()
    {
        return $this->StandardOutput;
    }

    /**
     * @param mixed $StandardOutput
     * @return Mount
     */
    public function setStandardOutput($StandardOutput)
    {
        $this->StandardOutput = $StandardOutput;
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
     * @return Mount
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
     * @return Mount
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
     * @return Mount
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
     * @return Mount
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
     * @return Mount
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
     * @return Mount
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
     * @return Mount
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
     * @return Mount
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
     * @return Mount
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
     * @return Mount
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
     * @return Mount
     */
    public function setSubState($SubState)
    {
        $this->SubState = $SubState;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSyslogFacility()
    {
        return $this->SyslogFacility;
    }

    /**
     * @param mixed $SyslogFacility
     * @return Mount
     */
    public function setSyslogFacility($SyslogFacility)
    {
        $this->SyslogFacility = $SyslogFacility;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSyslogLevel()
    {
        return $this->SyslogLevel;
    }

    /**
     * @param mixed $SyslogLevel
     * @return Mount
     */
    public function setSyslogLevel($SyslogLevel)
    {
        $this->SyslogLevel = $SyslogLevel;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSyslogLevelPrefix()
    {
        return $this->SyslogLevelPrefix;
    }

    /**
     * @param mixed $SyslogLevelPrefix
     * @return Mount
     */
    public function setSyslogLevelPrefix($SyslogLevelPrefix)
    {
        $this->SyslogLevelPrefix = $SyslogLevelPrefix;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSyslogPriority()
    {
        return $this->SyslogPriority;
    }

    /**
     * @param mixed $SyslogPriority
     * @return Mount
     */
    public function setSyslogPriority($SyslogPriority)
    {
        $this->SyslogPriority = $SyslogPriority;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSystemCallErrorNumber()
    {
        return $this->SystemCallErrorNumber;
    }

    /**
     * @param mixed $SystemCallErrorNumber
     * @return Mount
     */
    public function setSystemCallErrorNumber($SystemCallErrorNumber)
    {
        $this->SystemCallErrorNumber = $SystemCallErrorNumber;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTTYReset()
    {
        return $this->TTYReset;
    }

    /**
     * @param mixed $TTYReset
     * @return Mount
     */
    public function setTTYReset($TTYReset)
    {
        $this->TTYReset = $TTYReset;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTTYVHangup()
    {
        return $this->TTYVHangup;
    }

    /**
     * @param mixed $TTYVHangup
     * @return Mount
     */
    public function setTTYVHangup($TTYVHangup)
    {
        $this->TTYVHangup = $TTYVHangup;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTTYVTDisallocate()
    {
        return $this->TTYVTDisallocate;
    }

    /**
     * @param mixed $TTYVTDisallocate
     * @return Mount
     */
    public function setTTYVTDisallocate($TTYVTDisallocate)
    {
        $this->TTYVTDisallocate = $TTYVTDisallocate;
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
     * @return Mount
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
     * @return Mount
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
     * @return Mount
     */
    public function setTasksMax($TasksMax)
    {
        $this->TasksMax = $TasksMax;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTimeoutUSec()
    {
        return $this->TimeoutUSec;
    }

    /**
     * @param mixed $TimeoutUSec
     * @return Mount
     */
    public function setTimeoutUSec($TimeoutUSec)
    {
        $this->TimeoutUSec = $TimeoutUSec;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTimerSlackNSec()
    {
        return $this->TimerSlackNSec;
    }

    /**
     * @param mixed $TimerSlackNSec
     * @return Mount
     */
    public function setTimerSlackNSec($TimerSlackNSec)
    {
        $this->TimerSlackNSec = $TimerSlackNSec;
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
     * @return Mount
     */
    public function setTransient($Transient)
    {
        $this->Transient = $Transient;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTriggeredBy()
    {
        return $this->TriggeredBy;
    }

    /**
     * @param mixed $TriggeredBy
     * @return Mount
     */
    public function setTriggeredBy($TriggeredBy)
    {
        $this->TriggeredBy = $TriggeredBy;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param mixed $Type
     * @return Mount
     */
    public function setType($Type)
    {
        $this->Type = $Type;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUID()
    {
        return $this->UID;
    }

    /**
     * @param mixed $UID
     * @return Mount
     */
    public function setUID($UID)
    {
        $this->UID = $UID;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUMask()
    {
        return $this->UMask;
    }

    /**
     * @param mixed $UMask
     * @return Mount
     */
    public function setUMask($UMask)
    {
        $this->UMask = $UMask;
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
     * @return Mount
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
     * @return Mount
     */
    public function setUnitFileState($UnitFileState)
    {
        $this->UnitFileState = $UnitFileState;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUtmpMode()
    {
        return $this->UtmpMode;
    }

    /**
     * @param mixed $UtmpMode
     * @return Mount
     */
    public function setUtmpMode($UtmpMode)
    {
        $this->UtmpMode = $UtmpMode;
        return $this;
    }

    /**
     * @return array
     */
    public function getWantedBy(): array
    {
        return $this->WantedBy;
    }

    /**
     * @param array $WantedBy
     * @return Mount
     */
    public function setWantedBy(array $WantedBy): Mount
    {
        $this->WantedBy = $WantedBy;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWhat()
    {
        return $this->What;
    }

    /**
     * @param mixed $What
     * @return Mount
     */
    public function setWhat($What)
    {
        $this->What = $What;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWhere()
    {
        return $this->Where;
    }

    /**
     * @param mixed $Where
     * @return Mount
     */
    public function setWhere($Where)
    {
        $this->Where = $Where;
        return $this;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
