<?php

namespace CyberLine\SystemdState\Types;

class Service extends AbstractType
{
    private $ActiveExitTimestamp;

    private $After = [];

    private $AmbientCapabilities;

    private $BindsTo = [];

    private $BlockIOAccounting;

    private $BlockIOWeight;

    private $BusName;

    private $CPUAccounting;

    private $CPUQuotaPerSecUSec;

    private $CPUSchedulingPolicy;

    private $CPUSchedulingPriority;

    private $CPUSchedulingResetOnFork;

    private $CPUShares;

    private $CPUUsageNSec;

    private $CPUWeight;

    private $CapabilityBoundingSet;

    private $Conflicts = [];

    private $ConsistsOf;

    private $ControlGroup;

    private $ControlPID;

    private $Delegate;

    private $DevicePolicy;

    private $Documentation = [];

    private $DropInPaths = [];

    private $DynamicUser;

    private $Environment = [];

    private $EnvironmentFile;

    private $ExecMainCode;

    private $ExecMainExitTimestamp;

    private $ExecMainExitTimestampMonotonic;

    private $ExecMainPID;

    private $ExecMainStartTimestamp;

    private $ExecMainStartTimestampMonotonic;

    private $ExecMainStatus;

    private $ExecReload;

    private $ExecStart;

    private $ExecStartPost;

    private $ExecStartPre;

    private $ExecStop;

    private $ExecStopPost;

    private $FailureAction;

    private $FileDescriptorStoreMax;

    private $FragmentPath;

    private $GID;

    private $Group;

    private $GuessMainPID;

    private $IOAccounting;

    private $IOScheduling;

    private $IOWeight;

    private $IgnoreSIGPIPE;

    private $InactiveEnterTimestamp;

    private $KillMode;

    private $KillSignal;

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

    private $MainPID;

    private $MemoryAccounting;

    private $MemoryCurrent;

    private $MemoryDenyWriteExecute;

    private $MemoryHigh;

    private $MemoryLimit;

    private $MemoryLow;

    private $MemoryMax;

    private $MemorySwapMax;

    private $MountFlags;

    private $NFileDescriptorStore;

    private $Nice;

    private $NoNewPrivileges;

    private $NonBlocking;

    private $NotifyAccess;

    private $OOMScoreAdjust;

    private $PAMName;

    private $PartOf;

    private $PIDFile;

    private $PermissionsStartOnly;

    private $PrivateDevices;

    private $PrivateNetwork;

    private $PrivateTmp;

    private $PrivateUsers;

    private $PropagatesReloadTo;

    private $ProtectControlGroups;

    private $ProtectHome;

    private $ProtectKernelModules;

    private $ProtectKernelTunables;

    private $ProtectSystem;

    private $ReadOnlyPaths = [];

    private $ReadWritePaths = [];

    private $ReloadPropagatedFrom;

    private $RemainAfterExit;

    private $RemoveIPC;

    private $RequiredBy = [];

    private $Requires = [];

    private $RequiresMountsFor = [];

    private $RequisiteOf;

    private $Restart;

    private $RestartUSec;

    private $RestrictNamespace;

    private $RestrictRealtime;

    private $Result;

    private $RootDirectoryStartOnly;

    private $RuntimeDirectory;

    private $RuntimeDirectoryMode;

    private $RuntimeMaxUSec;

    private $SameProcessGroup;

    private $SecureBits;

    private $SendSIGHUP;

    private $SendSIGKILL;

    private $Slice;

    private $SourcePath;

    private $StandardError;

    private $StandardInput;

    private $StandardOutput;

    private $StartupBlockIOWeight;

    private $StartupCPUShares;

    private $StartupCPUWeight;

    private $StartupIOWeight;

    private $StatusText;

    private $StatusErrno;

    private $SyslogFacility;

    private $SyslogIdentifier;

    private $SyslogLevel;

    private $SyslogLevelPrefix;

    private $SyslogPriority;

    private $SystemCallErrorNumber;

    private $SystemCallFilter;

    private $TTYPath;

    private $TTYReset;

    private $TTYVHangup;

    private $TTYVTDisallocate;

    private $TasksAccounting;

    private $TasksCurrent;

    private $TasksMax;

    private $TimeoutStartUSec;

    private $TimeoutStopUSec;

    private $TimerSlackNSec;

    private $TriggeredBy;

    private $Type;

    private $UID;

    private $UMask;

    private $UnitFilePreset;

    private $UnitFileState;

    private $User;

    private $UtmpIdentifier;

    private $UtmpMode;

    private $WantedBy = [];

    private $Wants = [];

    private $WatchdogTimestamp;

    private $WatchdogTimestampMonotonic;

    private $WatchdogUSec;

    private $WorkingDirectory;

    /**
     * @return mixed
     */
    public function getActiveExitTimestamp()
    {
        return $this->ActiveExitTimestamp;
    }

    /**
     * @param mixed $ActiveExitTimestamp
     * @return Service
     */
    public function setActiveExitTimestamp($ActiveExitTimestamp)
    {
        $this->ActiveExitTimestamp = $ActiveExitTimestamp;
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
     * @return Service
     */
    public function setAfter(array $After): Service
    {
        $this->After = $After;
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
     * @return Service
     */
    public function setAmbientCapabilities($AmbientCapabilities)
    {
        $this->AmbientCapabilities = $AmbientCapabilities;
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
     * @return Service
     */
    public function setBindsTo(array $BindsTo): Service
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
     * @return Service
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
     * @return Service
     */
    public function setBlockIOWeight($BlockIOWeight)
    {
        $this->BlockIOWeight = $BlockIOWeight;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBusName()
    {
        return $this->BusName;
    }

    /**
     * @param mixed $BusName
     * @return Service
     */
    public function setBusName($BusName)
    {
        $this->BusName = $BusName;
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
     */
    public function setCPUWeight($CPUWeight)
    {
        $this->CPUWeight = $CPUWeight;
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
     * @return Service
     */
    public function setCapabilityBoundingSet($CapabilityBoundingSet)
    {
        $this->CapabilityBoundingSet = $CapabilityBoundingSet;
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
     * @return Service
     */
    public function setConflicts(array $Conflicts): Service
    {
        $this->Conflicts = $Conflicts;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getConsistsOf()
    {
        return $this->ConsistsOf;
    }

    /**
     * @param mixed $ConsistsOf
     * @return Service
     */
    public function setConsistsOf($ConsistsOf)
    {
        $this->ConsistsOf = $ConsistsOf;
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
     * @return Service
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
     * @return Service
     */
    public function setControlPID($ControlPID)
    {
        $this->ControlPID = $ControlPID;
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
     * @return Service
     */
    public function setDelegate($Delegate)
    {
        $this->Delegate = $Delegate;
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
     * @return Service
     */
    public function setDevicePolicy($DevicePolicy)
    {
        $this->DevicePolicy = $DevicePolicy;
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
     * @return Service
     */
    public function setDocumentation(array $Documentation): Service
    {
        $this->Documentation = $Documentation;
        return $this;
    }

    /**
     * @return array
     */
    public function getDropInPaths(): array
    {
        return $this->DropInPaths;
    }

    /**
     * @param array $DropInPaths
     * @return Service
     */
    public function setDropInPaths(array $DropInPaths): Service
    {
        $this->DropInPaths = $DropInPaths;
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
     * @return Service
     */
    public function setDynamicUser($DynamicUser)
    {
        $this->DynamicUser = $DynamicUser;
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
     * @return Service
     */
    public function setEnvironment(array $Environment): Service
    {
        $this->Environment = $Environment;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEnvironmentFile()
    {
        return $this->EnvironmentFile;
    }

    /**
     * @param mixed $EnvironmentFile
     * @return Service
     */
    public function setEnvironmentFile($EnvironmentFile)
    {
        $this->EnvironmentFile = $EnvironmentFile;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExecMainCode()
    {
        return $this->ExecMainCode;
    }

    /**
     * @param mixed $ExecMainCode
     * @return Service
     */
    public function setExecMainCode($ExecMainCode)
    {
        $this->ExecMainCode = $ExecMainCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExecMainExitTimestamp()
    {
        return $this->ExecMainExitTimestamp;
    }

    /**
     * @param mixed $ExecMainExitTimestamp
     * @return Service
     */
    public function setExecMainExitTimestamp($ExecMainExitTimestamp)
    {
        $this->ExecMainExitTimestamp = $ExecMainExitTimestamp;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExecMainExitTimestampMonotonic()
    {
        return $this->ExecMainExitTimestampMonotonic;
    }

    /**
     * @param mixed $ExecMainExitTimestampMonotonic
     * @return Service
     */
    public function setExecMainExitTimestampMonotonic($ExecMainExitTimestampMonotonic)
    {
        $this->ExecMainExitTimestampMonotonic = $ExecMainExitTimestampMonotonic;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExecMainPID()
    {
        return $this->ExecMainPID;
    }

    /**
     * @param mixed $ExecMainPID
     * @return Service
     */
    public function setExecMainPID($ExecMainPID)
    {
        $this->ExecMainPID = $ExecMainPID;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExecMainStartTimestamp()
    {
        return $this->ExecMainStartTimestamp;
    }

    /**
     * @param mixed $ExecMainStartTimestamp
     * @return Service
     */
    public function setExecMainStartTimestamp($ExecMainStartTimestamp)
    {
        $this->ExecMainStartTimestamp = $ExecMainStartTimestamp;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExecMainStartTimestampMonotonic()
    {
        return $this->ExecMainStartTimestampMonotonic;
    }

    /**
     * @param mixed $ExecMainStartTimestampMonotonic
     * @return Service
     */
    public function setExecMainStartTimestampMonotonic($ExecMainStartTimestampMonotonic)
    {
        $this->ExecMainStartTimestampMonotonic = $ExecMainStartTimestampMonotonic;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExecMainStatus()
    {
        return $this->ExecMainStatus;
    }

    /**
     * @param mixed $ExecMainStatus
     * @return Service
     */
    public function setExecMainStatus($ExecMainStatus)
    {
        $this->ExecMainStatus = $ExecMainStatus;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExecReload()
    {
        return $this->ExecReload;
    }

    /**
     * @param mixed $ExecReload
     * @return Service
     */
    public function setExecReload($ExecReload)
    {
        $this->ExecReload = $ExecReload;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExecStart()
    {
        return $this->ExecStart;
    }

    /**
     * @param mixed $ExecStart
     * @return Service
     */
    public function setExecStart($ExecStart)
    {
        $this->ExecStart = $ExecStart;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExecStartPost()
    {
        return $this->ExecStartPost;
    }

    /**
     * @param mixed $ExecStartPost
     * @return Service
     */
    public function setExecStartPost($ExecStartPost)
    {
        $this->ExecStartPost = $ExecStartPost;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExecStartPre()
    {
        return $this->ExecStartPre;
    }

    /**
     * @param mixed $ExecStartPre
     * @return Service
     */
    public function setExecStartPre($ExecStartPre)
    {
        $this->ExecStartPre = $ExecStartPre;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExecStop()
    {
        return $this->ExecStop;
    }

    /**
     * @param mixed $ExecStop
     * @return Service
     */
    public function setExecStop($ExecStop)
    {
        $this->ExecStop = $ExecStop;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExecStopPost()
    {
        return $this->ExecStopPost;
    }

    /**
     * @param mixed $ExecStopPost
     * @return Service
     */
    public function setExecStopPost($ExecStopPost)
    {
        $this->ExecStopPost = $ExecStopPost;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFailureAction()
    {
        return $this->FailureAction;
    }

    /**
     * @param mixed $FailureAction
     * @return Service
     */
    public function setFailureAction($FailureAction)
    {
        $this->FailureAction = $FailureAction;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFileDescriptorStoreMax()
    {
        return $this->FileDescriptorStoreMax;
    }

    /**
     * @param mixed $FileDescriptorStoreMax
     * @return Service
     */
    public function setFileDescriptorStoreMax($FileDescriptorStoreMax)
    {
        $this->FileDescriptorStoreMax = $FileDescriptorStoreMax;
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
     * @return Service
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
     * @return Service
     */
    public function setGID($GID)
    {
        $this->GID = $GID;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGroup()
    {
        return $this->Group;
    }

    /**
     * @param mixed $Group
     * @return Service
     */
    public function setGroup($Group)
    {
        $this->Group = $Group;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGuessMainPID()
    {
        return $this->GuessMainPID;
    }

    /**
     * @param mixed $GuessMainPID
     * @return Service
     */
    public function setGuessMainPID($GuessMainPID)
    {
        $this->GuessMainPID = $GuessMainPID;
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
     * @return Service
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
     * @return Service
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
     * @return Service
     */
    public function setIOWeight($IOWeight)
    {
        $this->IOWeight = $IOWeight;
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
     * @return Service
     */
    public function setIgnoreSIGPIPE($IgnoreSIGPIPE)
    {
        $this->IgnoreSIGPIPE = $IgnoreSIGPIPE;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInactiveEnterTimestamp()
    {
        return $this->InactiveEnterTimestamp;
    }

    /**
     * @param mixed $InactiveEnterTimestamp
     * @return Service
     */
    public function setInactiveEnterTimestamp($InactiveEnterTimestamp)
    {
        $this->InactiveEnterTimestamp = $InactiveEnterTimestamp;
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
     * @return Service
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
     * @return Service
     */
    public function setKillSignal($KillSignal)
    {
        $this->KillSignal = $KillSignal;
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
     */
    public function setLimitSTACKSoft($LimitSTACKSoft)
    {
        $this->LimitSTACKSoft = $LimitSTACKSoft;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMainPID()
    {
        return $this->MainPID;
    }

    /**
     * @param mixed $MainPID
     * @return Service
     */
    public function setMainPID($MainPID)
    {
        $this->MainPID = $MainPID;
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
     */
    public function setMountFlags($MountFlags)
    {
        $this->MountFlags = $MountFlags;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNFileDescriptorStore()
    {
        return $this->NFileDescriptorStore;
    }

    /**
     * @param mixed $NFileDescriptorStore
     * @return Service
     */
    public function setNFileDescriptorStore($NFileDescriptorStore)
    {
        $this->NFileDescriptorStore = $NFileDescriptorStore;
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
     * @return Service
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
     * @return Service
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
     * @return Service
     */
    public function setNonBlocking($NonBlocking)
    {
        $this->NonBlocking = $NonBlocking;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNotifyAccess()
    {
        return $this->NotifyAccess;
    }

    /**
     * @param mixed $NotifyAccess
     * @return Service
     */
    public function setNotifyAccess($NotifyAccess)
    {
        $this->NotifyAccess = $NotifyAccess;
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
     * @return Service
     */
    public function setOOMScoreAdjust($OOMScoreAdjust)
    {
        $this->OOMScoreAdjust = $OOMScoreAdjust;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPAMName()
    {
        return $this->PAMName;
    }

    /**
     * @param mixed $PAMName
     * @return Service
     */
    public function setPAMName($PAMName)
    {
        $this->PAMName = $PAMName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPartOf()
    {
        return $this->PartOf;
    }

    /**
     * @param mixed $PartOf
     * @return Service
     */
    public function setPartOf($PartOf)
    {
        $this->PartOf = $PartOf;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPIDFile()
    {
        return $this->PIDFile;
    }

    /**
     * @param mixed $PIDFile
     * @return Service
     */
    public function setPIDFile($PIDFile)
    {
        $this->PIDFile = $PIDFile;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPermissionsStartOnly()
    {
        return $this->PermissionsStartOnly;
    }

    /**
     * @param mixed $PermissionsStartOnly
     * @return Service
     */
    public function setPermissionsStartOnly($PermissionsStartOnly)
    {
        $this->PermissionsStartOnly = $PermissionsStartOnly;
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
     */
    public function setPrivateUsers($PrivateUsers)
    {
        $this->PrivateUsers = $PrivateUsers;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPropagatesReloadTo()
    {
        return $this->PropagatesReloadTo;
    }

    /**
     * @param mixed $PropagatesReloadTo
     * @return Service
     */
    public function setPropagatesReloadTo($PropagatesReloadTo)
    {
        $this->PropagatesReloadTo = $PropagatesReloadTo;
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
     */
    public function setProtectSystem($ProtectSystem)
    {
        $this->ProtectSystem = $ProtectSystem;
        return $this;
    }

    /**
     * @return array
     */
    public function getReadOnlyPaths(): array
    {
        return $this->ReadOnlyPaths;
    }

    /**
     * @param array $ReadOnlyPaths
     * @return Service
     */
    public function setReadOnlyPaths(array $ReadOnlyPaths): Service
    {
        $this->ReadOnlyPaths = $ReadOnlyPaths;
        return $this;
    }

    /**
     * @return array
     */
    public function getReadWritePaths(): array
    {
        return $this->ReadWritePaths;
    }

    /**
     * @param array $ReadWritePaths
     * @return Service
     */
    public function setReadWritePaths(array $ReadWritePaths): Service
    {
        $this->ReadWritePaths = $ReadWritePaths;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReloadPropagatedFrom()
    {
        return $this->ReloadPropagatedFrom;
    }

    /**
     * @param mixed $ReloadPropagatedFrom
     * @return Service
     */
    public function setReloadPropagatedFrom($ReloadPropagatedFrom)
    {
        $this->ReloadPropagatedFrom = $ReloadPropagatedFrom;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRemainAfterExit()
    {
        return $this->RemainAfterExit;
    }

    /**
     * @param mixed $RemainAfterExit
     * @return Service
     */
    public function setRemainAfterExit($RemainAfterExit)
    {
        $this->RemainAfterExit = $RemainAfterExit;
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
     * @return Service
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
     * @return Service
     */
    public function setRequiredBy(array $RequiredBy): Service
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
     * @return Service
     */
    public function setRequires(array $Requires): Service
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
     * @return Service
     */
    public function setRequiresMountsFor(array $RequiresMountsFor): Service
    {
        $this->RequiresMountsFor = $RequiresMountsFor;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRequisiteOf()
    {
        return $this->RequisiteOf;
    }

    /**
     * @param mixed $RequisiteOf
     * @return Service
     */
    public function setRequisiteOf($RequisiteOf)
    {
        $this->RequisiteOf = $RequisiteOf;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRestart()
    {
        return $this->Restart;
    }

    /**
     * @param mixed $Restart
     * @return Service
     */
    public function setRestart($Restart)
    {
        $this->Restart = $Restart;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRestartUSec()
    {
        return $this->RestartUSec;
    }

    /**
     * @param mixed $RestartUSec
     * @return Service
     */
    public function setRestartUSec($RestartUSec)
    {
        $this->RestartUSec = $RestartUSec;
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
     * @return Service
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
     * @return Service
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
     * @return Service
     */
    public function setResult($Result)
    {
        $this->Result = $Result;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRootDirectoryStartOnly()
    {
        return $this->RootDirectoryStartOnly;
    }

    /**
     * @param mixed $RootDirectoryStartOnly
     * @return Service
     */
    public function setRootDirectoryStartOnly($RootDirectoryStartOnly)
    {
        $this->RootDirectoryStartOnly = $RootDirectoryStartOnly;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRuntimeDirectory()
    {
        return $this->RuntimeDirectory;
    }

    /**
     * @param mixed $RuntimeDirectory
     * @return Service
     */
    public function setRuntimeDirectory($RuntimeDirectory)
    {
        $this->RuntimeDirectory = $RuntimeDirectory;
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
     * @return Service
     */
    public function setRuntimeDirectoryMode($RuntimeDirectoryMode)
    {
        $this->RuntimeDirectoryMode = $RuntimeDirectoryMode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRuntimeMaxUSec()
    {
        return $this->RuntimeMaxUSec;
    }

    /**
     * @param mixed $RuntimeMaxUSec
     * @return Service
     */
    public function setRuntimeMaxUSec($RuntimeMaxUSec)
    {
        $this->RuntimeMaxUSec = $RuntimeMaxUSec;
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
     */
    public function setSlice($Slice)
    {
        $this->Slice = $Slice;
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
     */
    public function setStandardOutput($StandardOutput)
    {
        $this->StandardOutput = $StandardOutput;
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
     */
    public function setStartupIOWeight($StartupIOWeight)
    {
        $this->StartupIOWeight = $StartupIOWeight;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatusText()
    {
        return $this->StatusText;
    }

    /**
     * @param mixed $StatusText
     * @return Service
     */
    public function setStatusText($StatusText)
    {
        $this->StatusText = $StatusText;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatusErrno()
    {
        return $this->StatusErrno;
    }

    /**
     * @param mixed $StatusErrno
     * @return Service
     */
    public function setStatusErrno($StatusErrno)
    {
        $this->StatusErrno = $StatusErrno;
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
     * @return Service
     */
    public function setSyslogFacility($SyslogFacility)
    {
        $this->SyslogFacility = $SyslogFacility;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSyslogIdentifier()
    {
        return $this->SyslogIdentifier;
    }

    /**
     * @param mixed $SyslogIdentifier
     * @return Service
     */
    public function setSyslogIdentifier($SyslogIdentifier)
    {
        $this->SyslogIdentifier = $SyslogIdentifier;
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
     */
    public function setSystemCallErrorNumber($SystemCallErrorNumber)
    {
        $this->SystemCallErrorNumber = $SystemCallErrorNumber;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSystemCallFilter()
    {
        return $this->SystemCallFilter;
    }

    /**
     * @param mixed $SystemCallFilter
     * @return Service
     */
    public function setSystemCallFilter($SystemCallFilter)
    {
        $this->SystemCallFilter = $SystemCallFilter;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTTYPath()
    {
        return $this->TTYPath;
    }

    /**
     * @param mixed $TTYPath
     * @return Service
     */
    public function setTTYPath($TTYPath)
    {
        $this->TTYPath = $TTYPath;
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
     */
    public function setTasksMax($TasksMax)
    {
        $this->TasksMax = $TasksMax;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTimeoutStartUSec()
    {
        return $this->TimeoutStartUSec;
    }

    /**
     * @param mixed $TimeoutStartUSec
     * @return Service
     */
    public function setTimeoutStartUSec($TimeoutStartUSec)
    {
        $this->TimeoutStartUSec = $TimeoutStartUSec;
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
     * @return Service
     */
    public function setTimeoutStopUSec($TimeoutStopUSec)
    {
        $this->TimeoutStopUSec = $TimeoutStopUSec;
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
     * @return Service
     */
    public function setTimerSlackNSec($TimerSlackNSec)
    {
        $this->TimerSlackNSec = $TimerSlackNSec;
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
     */
    public function setUnitFileState($UnitFileState)
    {
        $this->UnitFileState = $UnitFileState;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->User;
    }

    /**
     * @param mixed $User
     * @return Service
     */
    public function setUser($User)
    {
        $this->User = $User;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUtmpIdentifier()
    {
        return $this->UtmpIdentifier;
    }

    /**
     * @param mixed $UtmpIdentifier
     * @return Service
     */
    public function setUtmpIdentifier($UtmpIdentifier)
    {
        $this->UtmpIdentifier = $UtmpIdentifier;
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
     * @return Service
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
     * @return Service
     */
    public function setWantedBy(array $WantedBy): Service
    {
        $this->WantedBy = $WantedBy;
        return $this;
    }

    /**
     * @return array
     */
    public function getWants(): array
    {
        return $this->Wants;
    }

    /**
     * @param array $Wants
     * @return Service
     */
    public function setWants(array $Wants): Service
    {
        $this->Wants = $Wants;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWatchdogTimestamp()
    {
        return $this->WatchdogTimestamp;
    }

    /**
     * @param mixed $WatchdogTimestamp
     * @return Service
     */
    public function setWatchdogTimestamp($WatchdogTimestamp)
    {
        $this->WatchdogTimestamp = $WatchdogTimestamp;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWatchdogTimestampMonotonic()
    {
        return $this->WatchdogTimestampMonotonic;
    }

    /**
     * @param mixed $WatchdogTimestampMonotonic
     * @return Service
     */
    public function setWatchdogTimestampMonotonic($WatchdogTimestampMonotonic)
    {
        $this->WatchdogTimestampMonotonic = $WatchdogTimestampMonotonic;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWatchdogUSec()
    {
        return $this->WatchdogUSec;
    }

    /**
     * @param mixed $WatchdogUSec
     * @return Service
     */
    public function setWatchdogUSec($WatchdogUSec)
    {
        $this->WatchdogUSec = $WatchdogUSec;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWorkingDirectory()
    {
        return $this->WorkingDirectory;
    }

    /**
     * @param mixed $WorkingDirectory
     * @return Service
     */
    public function setWorkingDirectory($WorkingDirectory)
    {
        $this->WorkingDirectory = $WorkingDirectory;
        return $this;
    }
}
