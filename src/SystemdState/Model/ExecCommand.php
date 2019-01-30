<?php

namespace CyberLine\SystemdState\Model;

class ExecCommand
{
    public $path;

    public $argv = '';

    public $ignoreErrors;

    public $startTime;

    public $stopTime;

    public $pid;

    public $code;

    public $status;
}
