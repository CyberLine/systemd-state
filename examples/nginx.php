<?php

use CyberLine\SystemdState\SystemdState;

require_once '../vendor/autoload.php';

$state = new SystemdState;
$state->addCheckUnit('nginx');

try {
    header('Content-Type: application/json');
    print json_encode($state->getReport());
} catch (Throwable $throwable) {
    header('Content-Type: text/plain');
    print $throwable->getMessage() . PHP_EOL . $throwable->getTraceAsString();
}