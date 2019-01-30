<?php

use CyberLine\SystemdState\SystemdState;

require_once '../vendor/autoload.php';

$state = new SystemdState;

try {
    header('Content-Type: application/json');
    print json_encode($state->getSystemdInfo());
} catch (Throwable $throwable) {
    header('Content-Type: text/plain');
    print $throwable->getMessage() . PHP_EOL . $throwable->getTraceAsString();
}