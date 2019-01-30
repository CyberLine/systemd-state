<?php

namespace CyberLine\SystemdState\Types;

class Swap extends AbstractType
{
    protected $After = [];

    protected $AmbientCapabilities;

    protected $BindsTo = [];

    protected $BlockIOAccounting;

    protected $BlockIOWeight;

    protected $CPUAccounting;

    protected $CPUQuotaPerSecUSec;

    protected $CPUSchedulingPolicy;

    protected $CPUSchedulingPriority;

    protected $CPUSchedulingResetOnFork;

    protected $CPUShares;

    protected $CPUUsageNSec;

    protected $CPUWeight;

    protected $CapabilityBoundingSet;

    protected $Conflicts = [];

    protected $ControlGroup;

    protected $ControlPID;

    protected $Delegate;

    protected $DevicePolicy;

    protected $Documentation = [];

    protected $DynamicUser;

    protected $FragmentPath;

    protected $GID;

    protected $IOAccounting;

    protected $IOScheduling;

    protected $IOWeight;

    protected $IgnoreSIGPIPE;

    protected $KillMode;

    protected $KillSignal;

    protected $LimitAS;

    protected $LimitASSoft;

    protected $LimitCORE;

    protected $LimitCORESoft;

    protected $LimitCPU;

    protected $LimitCPUSoft;

    protected $LimitDATA;

    protected $LimitDATASoft;

    protected $LimitFSIZE;

    protected $LimitFSIZESoft;

    protected $LimitLOCKS;

    protected $LimitLOCKSSoft;

    protected $LimitMEMLOCK;

    protected $LimitMEMLOCKSoft;

    protected $LimitMSGQUEUE;

    protected $LimitMSGQUEUESoft;

    protected $LimitNICE;

    protected $LimitNICESoft;

    protected $LimitNOFILE;

    protected $LimitNOFILESoft;

    protected $LimitNPROC;

    protected $LimitNPROCSoft;

    protected $LimitRSS;

    protected $LimitRSSSoft;

    protected $LimitRTPRIO;

    protected $LimitRTPRIOSoft;

    protected $LimitRTTIME;

    protected $LimitRTTIMESoft;

    protected $LimitSIGPENDING;

    protected $LimitSIGPENDINGSoft;

    protected $LimitSTACK;

    protected $LimitSTACKSoft;

    protected $MemoryAccounting;

    protected $MemoryCurrent;

    protected $MemoryDenyWriteExecute;

    protected $MemoryHigh;

    protected $MemoryLimit;

    protected $MemoryLow;

    protected $MemoryMax;

    protected $MemorySwapMax;

    protected $MountFlags;

    protected $Nice;

    protected $NoNewPrivileges;

    protected $NonBlocking;

    protected $OOMScoreAdjust;

    protected $Options;

    protected $Priority;

    protected $PrivateDevices;

    protected $PrivateNetwork;

    protected $PrivateTmp;

    protected $PrivateUsers;

    protected $ProtectControlGroups;

    protected $ProtectHome;

    protected $ProtectKernelModules;

    protected $ProtectKernelTunables;

    protected $ProtectSystem;

    protected $RemoveIPC;

    protected $RequiredBy = [];

    protected $Requires = [];

    protected $RequiresMountsFor = [];

    protected $RestrictNamespace;

    protected $RestrictRealtime;

    protected $Result;

    protected $RuntimeDirectoryMode;

    protected $SameProcessGroup;

    protected $SecureBits;

    protected $SendSIGHUP;

    protected $SendSIGKILL;

    protected $Slice;

    protected $SourcePath;

    protected $StandardError;

    protected $StandardInput;

    protected $StandardOutput;

    protected $StartupBlockIOWeight;

    protected $StartupCPUShares;

    protected $StartupCPUWeight;

    protected $StartupIOWeight;

    protected $SyslogFacility;

    protected $SyslogLevel;

    protected $SyslogLevelPrefix;

    protected $SyslogPriority;

    protected $SystemCallErrorNumber;

    protected $TTYReset;

    protected $TTYVHangup;

    protected $TTYVTDisallocate;

    protected $TasksAccounting;

    protected $TasksCurrent;

    protected $TasksMax;

    protected $TimeoutUSec;

    protected $TimerSlackNSec;

    protected $UID;

    protected $UMask;

    protected $UnitFilePreset;

    protected $UnitFileState;

    protected $UtmpMode;

    protected $WantedBy = [];

    protected $What;

    /**
     * @return array
     */
    public function getAfter(): array
    {
        return $this->After;
    }

    /**
     * @param array $After
     * @return Swap
     */
    public function setAfter(array $After): Swap
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
     * @return Swap
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
     * @return Swap
     */
    public function setBindsTo(array $BindsTo): Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
     */
    public function setConflicts(array $Conflicts): Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
     */
    public function setDocumentation(array $Documentation): Swap
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
     * @return Swap
     */
    public function setDynamicUser($DynamicUser)
    {
        $this->DynamicUser = $DynamicUser;
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
     */
    public function setIgnoreSIGPIPE($IgnoreSIGPIPE)
    {
        $this->IgnoreSIGPIPE = $IgnoreSIGPIPE;
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
     */
    public function setLimitSTACKSoft($LimitSTACKSoft)
    {
        $this->LimitSTACKSoft = $LimitSTACKSoft;
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
     */
    public function setMountFlags($MountFlags)
    {
        $this->MountFlags = $MountFlags;
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
     */
    public function setOOMScoreAdjust($OOMScoreAdjust)
    {
        $this->OOMScoreAdjust = $OOMScoreAdjust;
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
     * @return Swap
     */
    public function setOptions($Options)
    {
        $this->Options = $Options;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPriority()
    {
        return $this->Priority;
    }

    /**
     * @param mixed $Priority
     * @return Swap
     */
    public function setPriority($Priority)
    {
        $this->Priority = $Priority;
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
     */
    public function setProtectSystem($ProtectSystem)
    {
        $this->ProtectSystem = $ProtectSystem;
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
     * @return Swap
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
     * @return Swap
     */
    public function setRequiredBy(array $RequiredBy): Swap
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
     * @return Swap
     */
    public function setRequires(array $Requires): Swap
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
     * @return Swap
     */
    public function setRequiresMountsFor(array $RequiresMountsFor): Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
     */
    public function setStartupIOWeight($StartupIOWeight)
    {
        $this->StartupIOWeight = $StartupIOWeight;
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
     */
    public function setTimerSlackNSec($TimerSlackNSec)
    {
        $this->TimerSlackNSec = $TimerSlackNSec;
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
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
     * @return Swap
     */
    public function setWantedBy(array $WantedBy): Swap
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
     * @return Swap
     */
    public function setWhat($What)
    {
        $this->What = $What;
        return $this;
    }
}
