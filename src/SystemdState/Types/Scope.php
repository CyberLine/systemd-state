<?php

namespace CyberLine\SystemdState\Types;

class Scope extends AbstractType
{
    /** @var array */
    protected $After = [];

    protected $BlockIOAccounting;

    protected $BlockIOWeight;

    protected $CPUAccounting;

    protected $CPUQuotaPerSecUSec;

    protected $CPUShares;

    protected $CPUUsageNSec;

    protected $CPUWeight;

    /** @var array */
    protected $Conflicts = [];

    protected $ControlGroup;

    protected $Delegate;

    protected $DevicePolicy;

    protected $Documentation;

    /** @var array */
    protected $DropInPaths = [];

    protected $FragmentPath;

    protected $IOAccounting;

    protected $IOWeight;

    protected $KillMode;

    protected $KillSignal;

    protected $MemoryAccounting;

    protected $MemoryCurrent;

    protected $MemoryHigh;

    protected $MemoryLimit;

    protected $MemoryLow;

    protected $MemoryMax;

    protected $MemorySwapMax;

    /** @var array */
    protected $Requires = [];

    protected $Result;

    protected $SendSIGHUP;

    protected $SendSIGKILL;

    protected $Slice;

    protected $StartupBlockIOWeight;

    protected $StartupCPUShares;

    protected $StartupCPUWeight;

    protected $StartupIOWeight;

    protected $TasksAccounting;

    protected $TasksCurrent;

    protected $TasksMax;

    protected $TimeoutStopUSec;

    protected $UnitFilePreset;

    protected $UnitFileState;
}
