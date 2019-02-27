<?php

namespace CyberLine\SystemdState\Types;

class Automount extends AbstractType
{
    /** @var array */
    protected $After = [];

    protected $DirectoryMode;

    /** @var array */
    protected $Documentation = [];

    protected $FragmentPath;

    /** @var array */
    protected $Requires = [];

    /** @var array */
    protected $RequiresMountsFor = [];

    protected $Result;

    protected $TimeoutIdleUSec;

    /** @var array */
    protected $Triggers = [];

    protected $UnitFilePreset;

    protected $UnitFileState;

    /** @var array */
    protected $WantedBy = [];

    protected $Where;
}
