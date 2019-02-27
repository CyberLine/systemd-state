<?php

namespace CyberLine\SystemdState\Types;

class Service extends AbstractType
{
    protected $ActiveExitTimestamp;

    /** @var array */
    protected $After = [];

    protected $AmbientCapabilities;

    /** @var array */
    protected $BindsTo = [];

    protected $BlockIOAccounting;

    protected $BlockIOWeight;

    /** @var array */
    protected $BoundBy = [];

    protected $BusName;

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

    protected $ConsistsOf;

    protected $ControlGroup;

    protected $ControlPID;

    protected $Delegate;

    protected $DevicePolicy;

    /** @var array */
    protected $Documentation = [];

    /** @var array */
    protected $DropInPaths = [];

    protected $DynamicUser;

    /** @var array */
    protected $Environment = [];

    protected $EnvironmentFile;

    protected $ExecMainCode;

    protected $ExecMainExitTimestamp;

    protected $ExecMainExitTimestampMonotonic;

    protected $ExecMainPID;

    protected $ExecMainStartTimestamp;

    protected $ExecMainStartTimestampMonotonic;

    protected $ExecMainStatus;

    protected $ExecReload;

    protected $ExecStart;

    protected $ExecStartPost;

    protected $ExecStartPre;

    protected $ExecStop;

    protected $ExecStopPost;

    protected $FailureAction;

    protected $FileDescriptorStoreMax;

    protected $FragmentPath;

    protected $GID;

    protected $Group;

    protected $GuessMainPID;

    protected $IOAccounting;

    protected $IOScheduling;

    protected $IOWeight;

    protected $IgnoreOnSnapshot;

    protected $IgnoreSIGPIPE;

    protected $InactiveEnterTimestamp;

    protected $Job;

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

    protected $MainPID;

    protected $MemoryAccounting;

    protected $MemoryCurrent;

    protected $MemoryDenyWriteExecute;

    protected $MemoryHigh;

    protected $MemoryLimit;

    protected $MemoryLow;

    protected $MemoryMax;

    protected $MemorySwapMax;

    protected $MountFlags;

    protected $NFileDescriptorStore;

    protected $Nice;

    protected $NoNewPrivileges;

    protected $NonBlocking;

    protected $NotifyAccess;

    protected $OOMScoreAdjust;

    protected $PAMName;

    protected $PartOf;

    protected $PIDFile;

    protected $PermissionsStartOnly;

    protected $PrivateDevices;

    protected $PrivateNetwork;

    protected $PrivateTmp;

    protected $PrivateUsers;

    protected $PropagatesReloadTo;

    protected $ProtectControlGroups;

    protected $ProtectHome;

    protected $ProtectKernelModules;

    protected $ProtectKernelTunables;

    protected $ProtectSystem;

    /** @var array */
    protected $ReadOnlyPaths = [];

    /** @var array */
    protected $ReadWritePaths = [];

    protected $ReloadPropagatedFrom;

    protected $RemainAfterExit;

    protected $RemoveIPC;

    /** @var array */
    protected $RequiredBy = [];

    /** @var array */
    protected $RequiredByOverridable = [];

    /** @var array */
    protected $Requires = [];

    /** @var array */
    protected $RequiresMountsFor = [];

    protected $Requisite;

    protected $RequisiteOf;

    protected $Restart;

    protected $RestartUSec;

    protected $RestrictNamespace;

    protected $RestrictRealtime;

    protected $Result;

    protected $RootDirectoryStartOnly;

    protected $RuntimeDirectory;

    protected $RuntimeDirectoryMode;

    protected $RuntimeMaxUSec;

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

    protected $StatusText;

    protected $StatusErrno;

    protected $SyslogFacility;

    protected $SyslogIdentifier;

    protected $SyslogLevel;

    protected $SyslogLevelPrefix;

    protected $SyslogPriority;

    protected $SystemCallErrorNumber;

    protected $SystemCallFilter;

    protected $TTYPath;

    protected $TTYReset;

    protected $TTYVHangup;

    protected $TTYVTDisallocate;

    protected $TasksAccounting;

    protected $TasksCurrent;

    protected $TasksMax;

    protected $TimeoutStartUSec;

    protected $TimeoutStopUSec;

    protected $TimerSlackNSec;

    protected $TriggeredBy;

    protected $Type;

    protected $UID;

    protected $UMask;

    protected $UnitFilePreset;

    protected $UnitFileState;

    protected $User;

    protected $UtmpIdentifier;

    protected $UtmpMode;

    /** @var array */
    protected $WantedBy = [];

    /** @var array */
    protected $Wants = [];

    protected $WatchdogTimestamp;

    protected $WatchdogTimestampMonotonic;

    protected $WatchdogUSec;

    protected $WorkingDirectory;
}
