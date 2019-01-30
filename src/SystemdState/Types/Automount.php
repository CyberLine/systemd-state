<?php

namespace CyberLine\SystemdState\Types;

class Automount extends AbstractType
{
    private $After = [];

    private $DirectoryMode;

    private $Documentation = [];

    private $FragmentPath;

    private $Requires = [];

    private $RequiresMountsFor = [];

    private $Result;

    private $TimeoutIdleUSec;

    private $Triggers = [];

    private $UnitFilePreset;

    private $UnitFileState;

    private $WantedBy = [];

    private $Where;

    /**
     * @return array
     */
    public function getAfter(): array
    {
        return $this->After;
    }

    /**
     * @param array $After
     * @return Automount
     */
    public function setAfter(array $After): Automount
    {
        $this->After = $After;
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
     * @return Automount
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
     * @return Automount
     */
    public function setDocumentation(array $Documentation): Automount
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
     * @return Automount
     */
    public function setFragmentPath($FragmentPath)
    {
        $this->FragmentPath = $FragmentPath;
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
     * @return Automount
     */
    public function setRequires(array $Requires): Automount
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
     * @return Automount
     */
    public function setRequiresMountsFor(array $RequiresMountsFor): Automount
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
     * @return Automount
     */
    public function setResult($Result)
    {
        $this->Result = $Result;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTimeoutIdleUSec()
    {
        return $this->TimeoutIdleUSec;
    }

    /**
     * @param mixed $TimeoutIdleUSec
     * @return Automount
     */
    public function setTimeoutIdleUSec($TimeoutIdleUSec)
    {
        $this->TimeoutIdleUSec = $TimeoutIdleUSec;
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
     * @return Automount
     */
    public function setTriggers(array $Triggers): Automount
    {
        $this->Triggers = $Triggers;
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
     * @return Automount
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
     * @return Automount
     */
    public function setUnitFileState($UnitFileState)
    {
        $this->UnitFileState = $UnitFileState;
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
     * @return Automount
     */
    public function setWantedBy(array $WantedBy): Automount
    {
        $this->WantedBy = $WantedBy;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWhere()
    {
        return $this->Where;
    }

    /**
     * @param mixed $Where
     * @return Automount
     */
    public function setWhere($Where)
    {
        $this->Where = $Where;
        return $this;
    }
}
