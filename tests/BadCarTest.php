<?php
/**
 * Class BadCarTest
 *
 * @package Tests
 * @author robconvery <robconvery@me.com>
 */

namespace Tests;

use PHPUnit\Framework\TestCase;
use Patterns\SequentialCoupling\BadCar;

class BadCarTest extends TestCase
{
    /**
     * @test
     * @covers BadCar::startCar
     * @group BadCar
     */
    public function testStartCar()
    {
        $BadCar = new BadCar();
        $this->assertTrue($BadCar->startCar());
    }

    /**
     * @test
     * @covers BadCar::changeSpeed
     * @group BadCar
     * @expectedException \Exception
     */
    public function testChangeSpeedOrder()
    {
        $BadCar = new BadCar();
        $BadCar->changeSpeed(true);
    }

    /**
     * @test
     * @covers BadCar::changeSpeed
     * @group BadCar
     * @group BadCarChangeSpeedAccelerate
     */
    public function testChangeSpeedAccelerate()
    {
        $BadCar = new BadCar();
        $BadCar->startCar();
        $this->assertTrue($BadCar->changeSpeed(true));
    }

    /**
     * @test
     * @covers BadCar::changeSpeed
     * @group BadCar
     */
    public function testChangeSpeedTopSpeed()
    {
        $BadCar = new BadCar();
        $BadCar->startCar();
        for ($i=1; $i<127; $i++) {
            $BadCar->changeSpeed(true);
        }
        $this->assertFalse($BadCar->changeSpeed(true));
    }

    /**
     * @test
     * @covers BadCar::changeSpeed
     * @group BadCar
     */
    public function testChangeSpeedDecelerate()
    {
        $BadCar = new BadCar();
        $BadCar->startCar();
        $this->assertFalse($BadCar->changeSpeed(false));
    }

    /**
     * @test
     * @covers BadCar::stopCar
     * @group BadCar
     */
    public function testStopCarAfterStart()
    {
        $BadCar = new BadCar();
        $BadCar->startCar();
        $this->assertTrue($BadCar->stopCar());
    }

    /**
     * @test
     * @covers BadCar::stopCar
     * @group BadCar
     * @expectedException \Exception
     */
    public function testStopCarBeforeStart()
    {
        $BadCar = new BadCar();
        $BadCar->stopCar();
    }

    // SequentialCoupling
}
