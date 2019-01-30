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

    /**
     * @return mixed
     */
    public function getAccuracyUSec()
    {
        return $this->AccuracyUSec;
    }

    /**
     * @param mixed $AccuracyUSec
     * @return Timer
     */
    public function setAccuracyUSec($AccuracyUSec)
    {
        $this->AccuracyUSec = $AccuracyUSec;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getActiveExitTimestamp()
    {
        return $this->ActiveExitTimestamp;
    }

    /**
     * @param mixed $ActiveExitTimestamp
     * @return Timer
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
     * @return Timer
     */
    public function setAfter(array $After): Timer
    {
        $this->After = $After;
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
     * @return Timer
     */
    public function setConflicts(array $Conflicts): Timer
    {
        $this->Conflicts = $Conflicts;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDocumentation()
    {
        return $this->Documentation;
    }

    /**
     * @param mixed $Documentation
     * @return Timer
     */
    public function setDocumentation($Documentation)
    {
        $this->Documentation = $Documentation;
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
     * @return Timer
     */
    public function setFragmentPath($FragmentPath)
    {
        $this->FragmentPath = $FragmentPath;
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
     * @return Timer
     */
    public function setInactiveEnterTimestamp($InactiveEnterTimestamp)
    {
        $this->InactiveEnterTimestamp = $InactiveEnterTimestamp;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastTriggerUSec()
    {
        return $this->LastTriggerUSec;
    }

    /**
     * @param mixed $LastTriggerUSec
     * @return Timer
     */
    public function setLastTriggerUSec($LastTriggerUSec)
    {
        $this->LastTriggerUSec = $LastTriggerUSec;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastTriggerUSecMonotonic()
    {
        return $this->LastTriggerUSecMonotonic;
    }

    /**
     * @param mixed $LastTriggerUSecMonotonic
     * @return Timer
     */
    public function setLastTriggerUSecMonotonic($LastTriggerUSecMonotonic)
    {
        $this->LastTriggerUSecMonotonic = $LastTriggerUSecMonotonic;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNextElapseUSecMonotonic()
    {
        return $this->NextElapseUSecMonotonic;
    }

    /**
     * @param mixed $NextElapseUSecMonotonic
     * @return Timer
     */
    public function setNextElapseUSecMonotonic($NextElapseUSecMonotonic)
    {
        $this->NextElapseUSecMonotonic = $NextElapseUSecMonotonic;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNextElapseUSecRealtime()
    {
        return $this->NextElapseUSecRealtime;
    }

    /**
     * @param mixed $NextElapseUSecRealtime
     * @return Timer
     */
    public function setNextElapseUSecRealtime($NextElapseUSecRealtime)
    {
        $this->NextElapseUSecRealtime = $NextElapseUSecRealtime;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPersistent()
    {
        return $this->Persistent;
    }

    /**
     * @param mixed $Persistent
     * @return Timer
     */
    public function setPersistent($Persistent)
    {
        $this->Persistent = $Persistent;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRandomizedDelayUSec()
    {
        return $this->RandomizedDelayUSec;
    }

    /**
     * @param mixed $RandomizedDelayUSec
     * @return Timer
     */
    public function setRandomizedDelayUSec($RandomizedDelayUSec)
    {
        $this->RandomizedDelayUSec = $RandomizedDelayUSec;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRemainAfterElapse()
    {
        return $this->RemainAfterElapse;
    }

    /**
     * @param mixed $RemainAfterElapse
     * @return Timer
     */
    public function setRemainAfterElapse($RemainAfterElapse)
    {
        $this->RemainAfterElapse = $RemainAfterElapse;
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
     * @return Timer
     */
    public function setRequires(array $Requires): Timer
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
     * @return Timer
     */
    public function setRequiresMountsFor(array $RequiresMountsFor): Timer
    {
        $this->RequiresMountsFor = $RequiresMountsFor;
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
     * @return Timer
     */
    public function setResult($Result)
    {
        $this->Result = $Result;
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
     * @return Timer
     */
    public function setTriggers(array $Triggers): Timer
    {
        $this->Triggers = $Triggers;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUnit()
    {
        return $this->Unit;
    }

    /**
     * @param mixed $Unit
     * @return Timer
     */
    public function setUnit($Unit)
    {
        $this->Unit = $Unit;
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
     * @return Timer
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
     * @return Timer
     */
    public function setUnitFileState($UnitFileState)
    {
        $this->UnitFileState = $UnitFileState;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWakeSystem()
    {
        return $this->WakeSystem;
    }

    /**
     * @param mixed $WakeSystem
     * @return Timer
     */
    public function setWakeSystem($WakeSystem)
    {
        $this->WakeSystem = $WakeSystem;
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
     * @return Timer
     */
    public function setWantedBy(array $WantedBy): Timer
    {
        $this->WantedBy = $WantedBy;
        return $this;
    }
}
