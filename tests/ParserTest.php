<?php

use CyberLine\SystemdState\Parser;

class ParserTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Dataprovider for Parser
     * @return array
     */
    public function dpParseValueByContent()
    {
        return [
            [['test', 'yes'], true],
            [['test', 'no'], false],
            [['test', '0'], 0],
            [['test', 'test'], 'test'],
            [['test', '0123'], '0123'],
            [['test', '1234'], 1234],
            [['test', '18446744073709551615'], '18446744073709551615'],
            [['After', 'test1 test2'], ['test1', 'test2']],
            [
                ['Timestamp', 'Do 2019-02-04 12:00:00 CET'],
                date_create_immutable_from_format('* Y-m-d H:i:s e', 'Do 2019-02-04 12:00:00 CET')
            ],
            [['Environment', 'FOO=bar BAZ=foo'], ['FOO' => 'bar', 'BAZ' => 'foo']],
        ];
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
