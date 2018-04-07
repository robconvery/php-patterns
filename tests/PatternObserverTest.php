<?php
namespace Tests;

use PHPUnit\Framework\TestCase;

class PatternObserverTest extends TestCase
{

    /**
     * @covers \Patterns\Observer\PatternSubject::updateMe
     * @param $value
     * @param $message
     * @expectedException \RuntimeException
     * @dataProvider dataUpdateMeException
     */
    public function testUpdateMeException($value, $message)
    {
        $subject = new \Patterns\Observer\PatternSubject();
        $subject->updateMe($value);
    }

    /**
     * data provider
     * @return array
     */
    public function dataUpdateMeException()
    {
        $class = new \stdClass();
        return [
            [[], 'An array isn\'t allowed'],
            [$class, 'An class isn\'t allowed'],
            [null, 'null isn\'t allowed'],
        ];
    }

    /**
     * @covers \Patterns\Observer\PatternSubject::updateMe
     * @param $value
     * @param $message
     * @dataProvider dataUpdateMeNoException
     */
    public function testUpdateMeNoException($value, $message)
    {
        $subject = new \Patterns\Observer\PatternSubject();
        $subject->updateMe($value);
        $this->assertTrue(true, $message);
    }

    /**
     * data provider
     * @return array
     */
    public function dataUpdateMeNoException()
    {
        return [
            ['Hello world', 'This string should be allowed'],
            [1, 'Integer should be allowed'],
            [1.1, 'Float should be allowed'],
            [0, '0 should be a allowed'],
        ];
    }
}
