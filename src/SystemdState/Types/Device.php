<?php

namespace CyberLine\SystemdState\Types;

class Device extends AbstractType
{
    private $BoundBy;

    private $SysFSPath;

    /**
     * @return mixed
     */
    public function getBoundBy()
    {
        return $this->BoundBy;
    }

    /**
     * @param mixed $BoundBy
     * @return Device
     */
    public function setBoundBy($BoundBy)
    {
        $this->BoundBy = $BoundBy;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSysFSPath()
    {
        return $this->SysFSPath;
    }

    /**
     * @param mixed $SysFSPath
     * @return Device
     */
    public function setSysFSPath($SysFSPath)
    {
        $this->SysFSPath = $SysFSPath;
        return $this;
    }
}
