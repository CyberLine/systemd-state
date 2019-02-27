<?php

namespace CyberLine\SystemdState\Types;

class Path extends AbstractType
{
    /** @var array */
    protected $After = [];

    /** @var array */
    protected $Conflicts = [];

    protected $DirectoryMode;

    protected $DirectoryNotEmpty;

    /** @var array */
    protected $Documentation = [];

    protected $FragmentPath;

    protected $MakeDirectory;

    protected $PathChanged;

    /** @var array */
    protected $Requires = [];

    /** @var array */
    protected $RequiresMountsFor = [];

    protected $Result;

    /** @var array */
    protected $Triggers = [];

    protected $Unit;

    protected $UnitFilePreset;

    protected $UnitFileState;

    /** @var array */
    protected $WantedBy = [];
}
