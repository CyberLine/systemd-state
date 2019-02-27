<?php

namespace CyberLine\SystemdState\Types;

class Timer extends AbstractType
{
    protected $AccuracyUSec;

    protected $ActiveExitTimestamp;

    protected $After = [];

    protected $Conflicts = [];

    protected $Documentation;

    protected $FragmentPath;

    protected $InactiveEnterTimestamp;

    protected $LastTriggerUSec;

    protected $LastTriggerUSecMonotonic;

    protected $NextElapseUSecMonotonic;

    protected $NextElapseUSecRealtime;

    protected $Persistent;

    protected $RandomizedDelayUSec;

    protected $RemainAfterElapse;

    protected $Requires = [];

    protected $RequiresMountsFor = [];

    protected $Result;

    protected $Triggers = [];

    protected $Unit;

    protected $UnitFilePreset;

    protected $UnitFileState;

    protected $WakeSystem;

    protected $WantedBy = [];
}
