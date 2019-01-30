<?php

namespace CyberLine\SystemdState\Types;

class Path extends AbstractType
{
    private $After = [];

    private $Conflicts = [];

    private $DirectoryMode;

    private $DirectoryNotEmpty;

    private $Documentation = [];

    private $FragmentPath;

    private $MakeDirectory;

    private $Requires = [];

    private $RequiresMountsFor = [];

    private $Result;

    private $Triggers = [];

    private $Unit;

    private $UnitFilePreset;

    private $UnitFileState;

    private $WantedBy = [];

    /**
     * @return array
     */
    public function getAfter(): array
    {
        return $this->After;
    }

    /**
     * @param array $After
     * @return Path
     */
    public function setAfter(array $After): Path
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
     * @return Path
     */
    public function setConflicts(array $Conflicts): Path
    {
        $this->Conflicts = $Conflicts;
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
     * @return Path
     */
    public function setDirectoryMode($DirectoryMode)
    {
        $this->DirectoryMode = $DirectoryMode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDirectoryNotEmpty()
    {
        return $this->DirectoryNotEmpty;
    }

    /**
     * @param mixed $DirectoryNotEmpty
     * @return Path
     */
    public function setDirectoryNotEmpty($DirectoryNotEmpty)
    {
        $this->DirectoryNotEmpty = $DirectoryNotEmpty;
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
     * @return Path
     */
    public function setDocumentation(array $Documentation): Path
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
     * @return Path
     */
    public function setFragmentPath($FragmentPath)
    {
        $this->FragmentPath = $FragmentPath;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMakeDirectory()
    {
        return $this->MakeDirectory;
    }

    /**
     * @param mixed $MakeDirectory
     * @return Path
     */
    public function setMakeDirectory($MakeDirectory)
    {
        $this->MakeDirectory = $MakeDirectory;
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
     * @return Path
     */
    public function setRequires(array $Requires): Path
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
     * @return Path
     */
    public function setRequiresMountsFor(array $RequiresMountsFor): Path
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
     * @return Path
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
     * @return Path
     */
    public function setTriggers(array $Triggers): Path
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
     * @return Path
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
     * @return Path
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
     * @return Path
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
     * @return Path
     */
    public function setWantedBy(array $WantedBy): Path
    {
        $this->WantedBy = $WantedBy;
        return $this;
    }
}
