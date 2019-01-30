<?php

namespace CyberLine\SystemdState\Types;

class Target extends AbstractType
{
    protected $After = [];

    protected $Conflicts = [];

    protected $Documentation = [];

    protected $DropInPaths = [];

    protected $FragmentPath;

    protected $OnFailure;

    protected $RequiredBy = [];

    protected $Requires = [];

    protected $RequiresMountsFor = [];

    protected $SourcePath;

    protected $UnitFilePreset;

    protected $UnitFileState;

    protected $WantedBy = [];

    protected $Wants = [];

    /**
     * @return array
     */
    public function getAfter(): array
    {
        return $this->After;
    }

    /**
     * @param array $After
     * @return Target
     */
    public function setAfter(array $After): Target
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
     * @return Target
     */
    public function setConflicts(array $Conflicts): Target
    {
        $this->Conflicts = $Conflicts;
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
     * @return Target
     */
    public function setDocumentation(array $Documentation): Target
    {
        $this->Documentation = $Documentation;
        return $this;
    }

    /**
     * @return array
     */
    public function getDropInPaths(): array
    {
        return $this->DropInPaths;
    }

    /**
     * @param array $DropInPaths
     * @return Target
     */
    public function setDropInPaths(array $DropInPaths): Target
    {
        $this->DropInPaths = $DropInPaths;
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
     * @return Target
     */
    public function setFragmentPath($FragmentPath)
    {
        $this->FragmentPath = $FragmentPath;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOnFailure()
    {
        return $this->OnFailure;
    }

    /**
     * @param mixed $OnFailure
     * @return Target
     */
    public function setOnFailure($OnFailure)
    {
        $this->OnFailure = $OnFailure;
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
     * @return Target
     */
    public function setRequiredBy(array $RequiredBy): Target
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
     * @return Target
     */
    public function setRequires(array $Requires): Target
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
     * @return Target
     */
    public function setRequiresMountsFor(array $RequiresMountsFor): Target
    {
        $this->RequiresMountsFor = $RequiresMountsFor;
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
     * @return Target
     */
    public function setSourcePath($SourcePath)
    {
        $this->SourcePath = $SourcePath;
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
     * @return Target
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
     * @return Target
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
     * @return Target
     */
    public function setWantedBy(array $WantedBy): Target
    {
        $this->WantedBy = $WantedBy;
        return $this;
    }

    /**
     * @return array
     */
    public function getWants(): array
    {
        return $this->Wants;
    }

    /**
     * @param array $Wants
     * @return Target
     */
    public function setWants(array $Wants): Target
    {
        $this->Wants = $Wants;
        return $this;
    }
}
