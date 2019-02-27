<?php

namespace CyberLine\SystemdState\Types;

class Mount extends AbstractType
{
    /** @var array */
    protected $After = [];

    protected $AmbientCapabilities;

    /** @var array */
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

    /** @var array */
    protected $Conflicts = [];

    protected $ControlGroup;

    protected $ControlPID;

    protected $Delegate;

    protected $DevicePolicy;

    protected $DirectoryMode;

    /** @var array */
    protected $Documentation = [];

    protected $DynamicUser;

    protected $ForceUnmount;

    protected $FragmentPath;

    protected $GID;

    protected $IOAccounting;

    protected $IOScheduling;

    protected $IOWeight;

    protected $IgnoreSIGPIPE;

    protected $KillMode;

    protected $KillSignal;

    protected $LazyUnmount;

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

    /** @var array */
    protected $RequiredBy = [];

    /** @var array */
    protected $Requires = [];

    /** @var array */
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

    protected $SloppyOptions;

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

    protected $TriggeredBy;

    protected $Type;

    protected $UID;

    protected $UMask;

    protected $UnitFilePreset;

    protected $UnitFileState;

    protected $UtmpMode;

    /** @var array */
    protected $WantedBy = [];

    /** @var array */
    protected $Wants = [];

    protected $What;

    protected $Where;
}
