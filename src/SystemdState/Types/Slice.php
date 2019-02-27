<?php

namespace CyberLine\SystemdState\Types;

class Slice extends AbstractType
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

    /** @var array */
    protected $Documentation = [];

    /** @var array */
    protected $DropInPaths = [];

    protected $FragmentPath;

    protected $IOAccounting;

    protected $IOWeight;

    protected $MemoryAccounting;

    protected $MemoryCurrent;

    protected $MemoryHigh;

    protected $MemoryLimit;

    protected $MemoryLow;

    protected $MemoryMax;

    protected $MemorySwapMax;

    /** @var array */
    protected $RequiredBy = [];

    /** @var array */
    protected $Requires = [];

    protected $Slice;

    protected $StartupBlockIOWeight;

    protected $StartupCPUShares;

    protected $StartupCPUWeight;

    protected $StartupIOWeight;

    protected $TasksAccounting;

    protected $TasksCurrent;

    protected $TasksMax;

    protected $UnitFilePreset;

    protected $UnitFileState;

    /** @var array */
    protected $WantedBy = [];
}
