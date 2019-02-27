<?php

namespace CyberLine\SystemdState\Types;

class Socket extends AbstractType
{
    protected $Accept;

    /** @var array */
    protected $After = [];

    protected $AmbientCapabilities;

    protected $Backlog;

    /** @var array */
    protected $BindsTo = [];

    protected $BindIPv6Only;

    protected $BlockIOAccounting;

    protected $BlockIOWeight;

    protected $Broadcast;

    protected $CPUAccounting;

    protected $CPUQuotaPerSecUSec;

    protected $CPUSchedulingPolicy;

    protected $CPUSchedulingPriority;

    protected $CPUSchedulingResetOnFork;

    protected $CPUShares;

    protected $CPUUsageNSec;

    protected $CPUWeight;

    protected $CapabilityBoundingSet;

    /** @var array */
    protected $ConflictedBy = [];

    /** @var array */
    protected $Conflicts = [];

    protected $ControlPID;

    protected $DeferAcceptUSec;

    protected $Delegate;

    protected $DevicePolicy;

    protected $DirectoryMode;

    /** @var array */
    protected $Documentation = [];

    protected $DynamicUser;

    protected $FileDescriptorName;

    protected $FragmentPath;

    protected $FreeBind;

    protected $GID;

    protected $IOAccounting;

    protected $IOScheduling;

    protected $IOWeight;

    protected $IPTOS;

    protected $IPTTL;

    protected $IgnoreSIGPIPE;

    protected $KeepAlive;

    protected $KeepAliveIntervalUSec;

    protected $KeepAliveProbes;

    protected $KeepAliveTimeUSec;

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

    protected $ListenDatagram;

    protected $ListenFIFO;

    protected $ListenNetlink;

    protected $ListenSequentialPacket;

    protected $ListenSpecial;

    protected $ListenStream;

    protected $Mark;

    protected $MaxConnections;

    protected $MaxConnectionsPerSource;

    protected $MemoryAccounting;

    protected $MemoryCurrent;

    protected $MemoryDenyWriteExecute;

    protected $MemoryHigh;

    protected $MemoryLimit;

    protected $MemoryLow;

    protected $MemoryMax;

    protected $MemorySwapMax;

    protected $MessageQueueMaxMessages;

    protected $MessageQueueMessageSize;

    protected $MountFlags;

    protected $NAccepted;

    protected $NConnections;

    protected $Nice;

    protected $NoDelay;

    protected $NoNewPrivileges;

    protected $NonBlocking;

    protected $OOMScoreAdjust;

    protected $PassCredentials;

    protected $PassSecurity;

    protected $PipeSize;

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

    protected $ReceiveBuffer;

    protected $RemoveIPC;

    protected $RemoveOnStop;

    /** @var array */
    protected $RequiredBy = [];

    /** @var array */
    protected $Requires = [];

    /** @var array */
    protected $RequiresMountsFor = [];

    protected $RestrictNamespace;

    protected $RestrictRealtime;

    protected $Result;

    protected $ReusePort;

    protected $RuntimeDirectoryMode;

    protected $SameProcessGroup;

    protected $SecureBits;

    protected $SendBuffer;

    protected $SendSIGHUP;

    protected $SendSIGKILL;

    protected $SocketMode;

    protected $SocketProtocol;

    protected $StandardError;

    protected $StandardInput;

    protected $StandardOutput;

    protected $StartupBlockIOWeight;

    protected $StartupCPUShares;

    protected $StartupCPUWeight;

    protected $StartupIOWeight;

    protected $Symlinks;

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

    protected $Transparent;

    protected $TriggerLimitBurst;

    protected $TriggerLimitIntervalSec;

    protected $TriggerLimitIntervalUSec;

    /** @var array */
    protected $Triggers = [];

    protected $UID;

    protected $UMask;

    protected $UnitFilePreset;

    protected $UnitFileState;

    protected $UtmpMode;

    /** @var array */
    protected $WantedBy = [];

    protected $Writable;
}
