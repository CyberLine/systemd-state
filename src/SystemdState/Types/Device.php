<?php

namespace CyberLine\SystemdState\Types;

class Device extends AbstractType
{
    /** @var array */
    protected $BoundBy = [];

    /** @var string */
    protected $SysFSPath;

    /** @var array */
    protected $Wants = [];
}
