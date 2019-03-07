<?php

use CyberLine\SystemdState\Model\ExecCommand;
use CyberLine\SystemdState\Parser;

class ParserTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Dataprovider for Parser
     * @return array
     */
    public function dpParseValueByContent(): array
    {
        $dateTime = \date_create_immutable_from_format('* Y-m-d H:i:s e', time());
        $execCommand = new ExecCommand;

        $execCommand2 = new ExecCommand;
        $execCommand2->path = '/usr/sbin/nginx';
        $execCommand2->argv = '-c /etc/nginx/nginx.conf';
        $execCommand2->ignoreErrors = false;
        $execCommand2->startTime = '[n/a]';
        $execCommand2->stopTime = '[n/a]';
        $execCommand2->pid = 0;
        $execCommand2->code = '(null)';
        $execCommand2->status = '0/0';

        $testCases = [
            [['test'], null],
            [['test', 'yes'], true],
            [['test', 'no'], false],
            [['test', '0'], 0],
            [['test', 'test'], 'test'],
            [['test', '0123'], '0123'],
            [['test', '1234'], 1234],
            [['test', '18446744073709551615'], '18446744073709551615'],
            [['Timestamp', (string)$dateTime], $dateTime],
            [['Environment', 'FOO=bar BAZ=foo'], ['FOO' => 'bar', 'BAZ' => 'foo']],
            [['ExecStart', ''], $execCommand],
            [['ExecStart', '{ path=/usr/sbin/nginx ; argv[]=/usr/sbin/nginx -c /etc/nginx/nginx.conf ; ignore_errors=no ; start_time=[n/a] ; stop_time=[n/a] ; pid=0 ; code=(null) ; status=0/0 }'], $execCommand2],
        ];

        // To cover codecoverage
        foreach (Parser::getArrayTypes() as $arrayType) {
            $testCases[] = [[$arrayType, 'test1 test2'], ['test1', 'test2']];
        }

        return $testCases;
    }

    /**
     * @dataProvider dpParseValueByContent
     * @param $data
     * @param $expected
     */
    public function testParseValueByContent($data, $expected): void
    {
        $this->assertEquals($expected, Parser::parseValueByContent($data));
    }
}
