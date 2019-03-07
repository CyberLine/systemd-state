<?php

use CyberLine\SystemdState\SystemdState;

class SystemdStateTest extends \PHPUnit\Framework\TestCase
{
    public function testGetReportException1(): void
    {
        $this->expectExceptionObject(new InvalidArgumentException('You have to add at least one unit to check!'));

        $systemdState = new SystemdState;
        $systemdState->getReport();
    }

    public function testGetReportException2(): void
    {
        $this->expectExceptionObject(new RangeException('No report found for `baz`. Maybe misspelled?'));

        $systemdState = new SystemdState;

        $reflection = new \ReflectionClass($systemdState);
        $reflectionProperty = $reflection->getProperty('reports');
        $reflectionProperty->setAccessible(true);
        $reflectionProperty->setValue($systemdState, ['foo' => 'bar']);

        $systemdState->getReport('baz');
    }
}
