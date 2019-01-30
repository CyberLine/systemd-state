<?php

namespace CyberLine\SystemdState\Types;

class Device extends AbstractType
{
    /** @var array */
    protected $BoundBy = [];

    /** @var string */
    protected $SysFSPath;

    protected $Wants = [];

    /**
     * @return array
     */
    public function getBoundBy(): array
    {
        return $this->BoundBy;
    }

    /**
     * @param array $BoundBy
     * @return Device
     */
    public function setBoundBy(array $BoundBy): Device
    {
        $this->BoundBy = $BoundBy;
        return $this;
    }

    /**
     * @return string
     */
    public function getSysFSPath(): string
    {
        return $this->SysFSPath;
    }

    /**
     * @param string $SysFSPath
     * @return Device
     */
    public function setSysFSPath(string $SysFSPath): Device
    {
        $this->SysFSPath = $SysFSPath;
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
     * @return Device
     */
    public function setWants(array $Wants): Device
    {
        $this->Wants = $Wants;
        return $this;
    }
}
