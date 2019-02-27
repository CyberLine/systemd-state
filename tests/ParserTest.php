<?php

use CyberLine\SystemdState\Model\ExecCommand;
use CyberLine\SystemdState\Parser;

class ParserTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Dataprovider for Parser
     * @return array
     */
    public function dpParseValueByContent()
    {
        $dateTime = \date_create_immutable_from_format('* Y-m-d H:i:s e', time());
        $execCommand = new ExecCommand;

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
            [['ExecStart', ''], $execCommand]
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
    public function testParseValueByContent($data, $expected)
    {
        $this->assertEquals($expected, Parser::parseValueByContent($data));
    }
}
