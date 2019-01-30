<?php

namespace CyberLine\SystemdState\Types;

class Socket extends AbstractType
{
    private $Accept;

    private $After = [];

    private $AmbientCapabilities;

    private $Backlog;

    private $BindIPv6Only;

    private $BlockIOAccounting;

    private $BlockIOWeight;

    private $Broadcast;

    private $CPUAccounting;

    private $CPUQuotaPerSecUSec;

    private $CPUSchedulingPolicy;

    private $CPUSchedulingPriority;

    private $CPUSchedulingResetOnFork;

    private $CPUShares;

    private $CPUUsageNSec;

    private $CPUWeight;

    private $CapabilityBoundingSet;

    private $ConflictedBy = [];

    private $Conflicts = [];

    private $ControlPID;

    private $DeferAcceptUSec;

    private $Delegate;

    private $DevicePolicy;

    private $DirectoryMode;

    private $Documentation = [];

    private $DynamicUser;

    private $FileDescriptorName;

    private $FragmentPath;

    private $FreeBind;

    private $GID;

    private $IOAccounting;

    private $IOScheduling;

    private $IOWeight;

    private $IPTOS;

    private $IPTTL;

    private $IgnoreSIGPIPE;

    private $KeepAlive;

    private $KeepAliveIntervalUSec;

    private $KeepAliveProbes;

    private $KeepAliveTimeUSec;

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

    private $ListenDatagram;

    private $ListenFIFO;

    private $ListenNetlink;

    private $ListenSequentialPacket;

    private $ListenStream;

    private $Mark;

    private $MaxConnections;

    private $MaxConnectionsPerSource;

    private $MemoryAccounting;

    private $MemoryCurrent;

    private $MemoryDenyWriteExecute;

    private $MemoryHigh;

    private $MemoryLimit;

    private $MemoryLow;

    private $MemoryMax;

    private $MemorySwapMax;

    private $MessageQueueMaxMessages;

    private $MessageQueueMessageSize;

    private $MountFlags;

    private $NAccepted;

    private $NConnections;

    private $Nice;

    private $NoDelay;

    private $NoNewPrivileges;

    private $NonBlocking;

    private $OOMScoreAdjust;

    private $PassCredentials;

    private $PassSecurity;

    private $PipeSize;

    private $Priority;

    private $PrivateDevices;

    private $PrivateNetwork;

    private $PrivateTmp;

    private $PrivateUsers;

    private $ProtectControlGroups;

    private $ProtectHome;

    private $ProtectKernelModules;

    private $ProtectKernelTunables;

    private $ProtectSystem;

    private $ReceiveBuffer;

    private $RemoveIPC;

    private $RemoveOnStop;

    private $RequiredBy = [];

    private $Requires = [];

    private $RequiresMountsFor = [];

    private $RestrictNamespace;

    private $RestrictRealtime;

    private $Result;

    private $ReusePort;

    private $RuntimeDirectoryMode;

    private $SameProcessGroup;

    private $SecureBits;

    private $SendBuffer;

    private $SendSIGHUP;

    private $SendSIGKILL;

    private $SocketMode;

    private $SocketProtocol;

    private $StandardError;

    private $StandardInput;

    private $StandardOutput;

    private $StartupBlockIOWeight;

    private $StartupCPUShares;

    private $StartupCPUWeight;

    private $StartupIOWeight;

    private $Symlinks;

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

    private $Transparent;

    private $TriggerLimitBurst;

    private $TriggerLimitIntervalUSec;

    private $Triggers = [];

    private $UID;

    private $UMask;

    private $UnitFilePreset;

    private $UnitFileState;

    private $UtmpMode;

    private $WantedBy = [];

    private $Writable;

    /**
     * @return mixed
     */
    public function getAccept()
    {
        return $this->Accept;
    }

    /**
     * @param mixed $Accept
     * @return Socket
     */
    public function setAccept($Accept)
    {
        $this->Accept = $Accept;
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
     * @return Socket
     */
    public function setAfter(array $After): Socket
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
     * @return Socket
     */
    public function setAmbientCapabilities($AmbientCapabilities)
    {
        $this->AmbientCapabilities = $AmbientCapabilities;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBacklog()
    {
        return $this->Backlog;
    }

    /**
     * @param mixed $Backlog
     * @return Socket
     */
    public function setBacklog($Backlog)
    {
        $this->Backlog = $Backlog;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBindIPv6Only()
    {
        return $this->BindIPv6Only;
    }

    /**
     * @param mixed $BindIPv6Only
     * @return Socket
     */
    public function setBindIPv6Only($BindIPv6Only)
    {
        $this->BindIPv6Only = $BindIPv6Only;
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
     * @return Socket
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
     * @return Socket
     */
    public function setBlockIOWeight($BlockIOWeight)
    {
        $this->BlockIOWeight = $BlockIOWeight;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBroadcast()
    {
        return $this->Broadcast;
    }

    /**
     * @param mixed $Broadcast
     * @return Socket
     */
    public function setBroadcast($Broadcast)
    {
        $this->Broadcast = $Broadcast;
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
     */
    public function setCapabilityBoundingSet($CapabilityBoundingSet)
    {
        $this->CapabilityBoundingSet = $CapabilityBoundingSet;
        return $this;
    }

    /**
     * @return array
     */
    public function getConflictedBy(): array
    {
        return $this->ConflictedBy;
    }

    /**
     * @param array $ConflictedBy
     * @return Socket
     */
    public function setConflictedBy(array $ConflictedBy): Socket
    {
        $this->ConflictedBy = $ConflictedBy;
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
     * @return Socket
     */
    public function setConflicts(array $Conflicts): Socket
    {
        $this->Conflicts = $Conflicts;
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
     * @return Socket
     */
    public function setControlPID($ControlPID)
    {
        $this->ControlPID = $ControlPID;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeferAcceptUSec()
    {
        return $this->DeferAcceptUSec;
    }

    /**
     * @param mixed $DeferAcceptUSec
     * @return Socket
     */
    public function setDeferAcceptUSec($DeferAcceptUSec)
    {
        $this->DeferAcceptUSec = $DeferAcceptUSec;
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
     */
    public function setDocumentation(array $Documentation): Socket
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
     * @return Socket
     */
    public function setDynamicUser($DynamicUser)
    {
        $this->DynamicUser = $DynamicUser;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFileDescriptorName()
    {
        return $this->FileDescriptorName;
    }

    /**
     * @param mixed $FileDescriptorName
     * @return Socket
     */
    public function setFileDescriptorName($FileDescriptorName)
    {
        $this->FileDescriptorName = $FileDescriptorName;
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
     * @return Socket
     */
    public function setFragmentPath($FragmentPath)
    {
        $this->FragmentPath = $FragmentPath;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFreeBind()
    {
        return $this->FreeBind;
    }

    /**
     * @param mixed $FreeBind
     * @return Socket
     */
    public function setFreeBind($FreeBind)
    {
        $this->FreeBind = $FreeBind;
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
     */
    public function setIOWeight($IOWeight)
    {
        $this->IOWeight = $IOWeight;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIPTOS()
    {
        return $this->IPTOS;
    }

    /**
     * @param mixed $IPTOS
     * @return Socket
     */
    public function setIPTOS($IPTOS)
    {
        $this->IPTOS = $IPTOS;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIPTTL()
    {
        return $this->IPTTL;
    }

    /**
     * @param mixed $IPTTL
     * @return Socket
     */
    public function setIPTTL($IPTTL)
    {
        $this->IPTTL = $IPTTL;
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
     * @return Socket
     */
    public function setIgnoreSIGPIPE($IgnoreSIGPIPE)
    {
        $this->IgnoreSIGPIPE = $IgnoreSIGPIPE;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getKeepAlive()
    {
        return $this->KeepAlive;
    }

    /**
     * @param mixed $KeepAlive
     * @return Socket
     */
    public function setKeepAlive($KeepAlive)
    {
        $this->KeepAlive = $KeepAlive;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getKeepAliveIntervalUSec()
    {
        return $this->KeepAliveIntervalUSec;
    }

    /**
     * @param mixed $KeepAliveIntervalUSec
     * @return Socket
     */
    public function setKeepAliveIntervalUSec($KeepAliveIntervalUSec)
    {
        $this->KeepAliveIntervalUSec = $KeepAliveIntervalUSec;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getKeepAliveProbes()
    {
        return $this->KeepAliveProbes;
    }

    /**
     * @param mixed $KeepAliveProbes
     * @return Socket
     */
    public function setKeepAliveProbes($KeepAliveProbes)
    {
        $this->KeepAliveProbes = $KeepAliveProbes;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getKeepAliveTimeUSec()
    {
        return $this->KeepAliveTimeUSec;
    }

    /**
     * @param mixed $KeepAliveTimeUSec
     * @return Socket
     */
    public function setKeepAliveTimeUSec($KeepAliveTimeUSec)
    {
        $this->KeepAliveTimeUSec = $KeepAliveTimeUSec;
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
     */
    public function setLimitSTACKSoft($LimitSTACKSoft)
    {
        $this->LimitSTACKSoft = $LimitSTACKSoft;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getListenDatagram()
    {
        return $this->ListenDatagram;
    }

    /**
     * @param mixed $ListenDatagram
     * @return Socket
     */
    public function setListenDatagram($ListenDatagram)
    {
        $this->ListenDatagram = $ListenDatagram;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getListenFIFO()
    {
        return $this->ListenFIFO;
    }

    /**
     * @param mixed $ListenFIFO
     * @return Socket
     */
    public function setListenFIFO($ListenFIFO)
    {
        $this->ListenFIFO = $ListenFIFO;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getListenNetlink()
    {
        return $this->ListenNetlink;
    }

    /**
     * @param mixed $ListenNetlink
     * @return Socket
     */
    public function setListenNetlink($ListenNetlink)
    {
        $this->ListenNetlink = $ListenNetlink;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getListenSequentialPacket()
    {
        return $this->ListenSequentialPacket;
    }

    /**
     * @param mixed $ListenSequentialPacket
     * @return Socket
     */
    public function setListenSequentialPacket($ListenSequentialPacket)
    {
        $this->ListenSequentialPacket = $ListenSequentialPacket;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getListenStream()
    {
        return $this->ListenStream;
    }

    /**
     * @param mixed $ListenStream
     * @return Socket
     */
    public function setListenStream($ListenStream)
    {
        $this->ListenStream = $ListenStream;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMark()
    {
        return $this->Mark;
    }

    /**
     * @param mixed $Mark
     * @return Socket
     */
    public function setMark($Mark)
    {
        $this->Mark = $Mark;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMaxConnections()
    {
        return $this->MaxConnections;
    }

    /**
     * @param mixed $MaxConnections
     * @return Socket
     */
    public function setMaxConnections($MaxConnections)
    {
        $this->MaxConnections = $MaxConnections;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMaxConnectionsPerSource()
    {
        return $this->MaxConnectionsPerSource;
    }

    /**
     * @param mixed $MaxConnectionsPerSource
     * @return Socket
     */
    public function setMaxConnectionsPerSource($MaxConnectionsPerSource)
    {
        $this->MaxConnectionsPerSource = $MaxConnectionsPerSource;
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
     */
    public function setMemorySwapMax($MemorySwapMax)
    {
        $this->MemorySwapMax = $MemorySwapMax;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMessageQueueMaxMessages()
    {
        return $this->MessageQueueMaxMessages;
    }

    /**
     * @param mixed $MessageQueueMaxMessages
     * @return Socket
     */
    public function setMessageQueueMaxMessages($MessageQueueMaxMessages)
    {
        $this->MessageQueueMaxMessages = $MessageQueueMaxMessages;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMessageQueueMessageSize()
    {
        return $this->MessageQueueMessageSize;
    }

    /**
     * @param mixed $MessageQueueMessageSize
     * @return Socket
     */
    public function setMessageQueueMessageSize($MessageQueueMessageSize)
    {
        $this->MessageQueueMessageSize = $MessageQueueMessageSize;
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
     * @return Socket
     */
    public function setMountFlags($MountFlags)
    {
        $this->MountFlags = $MountFlags;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNAccepted()
    {
        return $this->NAccepted;
    }

    /**
     * @param mixed $NAccepted
     * @return Socket
     */
    public function setNAccepted($NAccepted)
    {
        $this->NAccepted = $NAccepted;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNConnections()
    {
        return $this->NConnections;
    }

    /**
     * @param mixed $NConnections
     * @return Socket
     */
    public function setNConnections($NConnections)
    {
        $this->NConnections = $NConnections;
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
     * @return Socket
     */
    public function setNice($Nice)
    {
        $this->Nice = $Nice;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNoDelay()
    {
        return $this->NoDelay;
    }

    /**
     * @param mixed $NoDelay
     * @return Socket
     */
    public function setNoDelay($NoDelay)
    {
        $this->NoDelay = $NoDelay;
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
     */
    public function setOOMScoreAdjust($OOMScoreAdjust)
    {
        $this->OOMScoreAdjust = $OOMScoreAdjust;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPassCredentials()
    {
        return $this->PassCredentials;
    }

    /**
     * @param mixed $PassCredentials
     * @return Socket
     */
    public function setPassCredentials($PassCredentials)
    {
        $this->PassCredentials = $PassCredentials;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPassSecurity()
    {
        return $this->PassSecurity;
    }

    /**
     * @param mixed $PassSecurity
     * @return Socket
     */
    public function setPassSecurity($PassSecurity)
    {
        $this->PassSecurity = $PassSecurity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPipeSize()
    {
        return $this->PipeSize;
    }

    /**
     * @param mixed $PipeSize
     * @return Socket
     */
    public function setPipeSize($PipeSize)
    {
        $this->PipeSize = $PipeSize;
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
     */
    public function setProtectSystem($ProtectSystem)
    {
        $this->ProtectSystem = $ProtectSystem;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReceiveBuffer()
    {
        return $this->ReceiveBuffer;
    }

    /**
     * @param mixed $ReceiveBuffer
     * @return Socket
     */
    public function setReceiveBuffer($ReceiveBuffer)
    {
        $this->ReceiveBuffer = $ReceiveBuffer;
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
     * @return Socket
     */
    public function setRemoveIPC($RemoveIPC)
    {
        $this->RemoveIPC = $RemoveIPC;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRemoveOnStop()
    {
        return $this->RemoveOnStop;
    }

    /**
     * @param mixed $RemoveOnStop
     * @return Socket
     */
    public function setRemoveOnStop($RemoveOnStop)
    {
        $this->RemoveOnStop = $RemoveOnStop;
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
     * @return Socket
     */
    public function setRequiredBy(array $RequiredBy): Socket
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
     * @return Socket
     */
    public function setRequires(array $Requires): Socket
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
     * @return Socket
     */
    public function setRequiresMountsFor(array $RequiresMountsFor): Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
     */
    public function setResult($Result)
    {
        $this->Result = $Result;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReusePort()
    {
        return $this->ReusePort;
    }

    /**
     * @param mixed $ReusePort
     * @return Socket
     */
    public function setReusePort($ReusePort)
    {
        $this->ReusePort = $ReusePort;
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
     */
    public function setSecureBits($SecureBits)
    {
        $this->SecureBits = $SecureBits;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSendBuffer()
    {
        return $this->SendBuffer;
    }

    /**
     * @param mixed $SendBuffer
     * @return Socket
     */
    public function setSendBuffer($SendBuffer)
    {
        $this->SendBuffer = $SendBuffer;
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
     * @return Socket
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
     * @return Socket
     */
    public function setSendSIGKILL($SendSIGKILL)
    {
        $this->SendSIGKILL = $SendSIGKILL;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSocketMode()
    {
        return $this->SocketMode;
    }

    /**
     * @param mixed $SocketMode
     * @return Socket
     */
    public function setSocketMode($SocketMode)
    {
        $this->SocketMode = $SocketMode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSocketProtocol()
    {
        return $this->SocketProtocol;
    }

    /**
     * @param mixed $SocketProtocol
     * @return Socket
     */
    public function setSocketProtocol($SocketProtocol)
    {
        $this->SocketProtocol = $SocketProtocol;
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
     */
    public function setStartupIOWeight($StartupIOWeight)
    {
        $this->StartupIOWeight = $StartupIOWeight;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSymlinks()
    {
        return $this->Symlinks;
    }

    /**
     * @param mixed $Symlinks
     * @return Socket
     */
    public function setSymlinks($Symlinks)
    {
        $this->Symlinks = $Symlinks;
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
     */
    public function setTimerSlackNSec($TimerSlackNSec)
    {
        $this->TimerSlackNSec = $TimerSlackNSec;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTransparent()
    {
        return $this->Transparent;
    }

    /**
     * @param mixed $Transparent
     * @return Socket
     */
    public function setTransparent($Transparent)
    {
        $this->Transparent = $Transparent;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTriggerLimitBurst()
    {
        return $this->TriggerLimitBurst;
    }

    /**
     * @param mixed $TriggerLimitBurst
     * @return Socket
     */
    public function setTriggerLimitBurst($TriggerLimitBurst)
    {
        $this->TriggerLimitBurst = $TriggerLimitBurst;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTriggerLimitIntervalUSec()
    {
        return $this->TriggerLimitIntervalUSec;
    }

    /**
     * @param mixed $TriggerLimitIntervalUSec
     * @return Socket
     */
    public function setTriggerLimitIntervalUSec($TriggerLimitIntervalUSec)
    {
        $this->TriggerLimitIntervalUSec = $TriggerLimitIntervalUSec;
        return $this;
    }

    /**
     * @return array
     */
    public function getTriggers(): array
    {
        return $this->Triggers;
    }

    /**
     * @param array $Triggers
     * @return Socket
     */
    public function setTriggers(array $Triggers): Socket
    {
        $this->Triggers = $Triggers;
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
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
     * @return Socket
     */
    public function setWantedBy(array $WantedBy): Socket
    {
        $this->WantedBy = $WantedBy;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWritable()
    {
        return $this->Writable;
    }

    /**
     * @param mixed $Writable
     * @return Socket
     */
    public function setWritable($Writable)
    {
        $this->Writable = $Writable;
        return $this;
    }
}
