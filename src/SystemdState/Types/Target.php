<?php

namespace CyberLine\SystemdState\Types;

class Target extends AbstractType
{
    /** @var array */
    protected $After = [];

    /** @var array */
    protected $Conflicts = [];

    /** @var array */
    protected $Documentation = [];

    /** @var array */
    protected $DropInPaths = [];

    protected $FragmentPath;

    protected $OnFailure;

    /** @var array */
    protected $RequiredBy = [];

    /** @var array */
    protected $Requires = [];

    /** @var array */
    protected $RequiresMountsFor = [];

    protected $SourcePath;

    protected $UnitFilePreset;

    protected $UnitFileState;

    /** @var array */
    protected $WantedBy = [];

    /** @var array */
    protected $Wants = [];
}
