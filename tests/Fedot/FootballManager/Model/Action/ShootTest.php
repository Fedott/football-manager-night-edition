<?php

namespace Fedot\FootballManager\Model\Action;


class ShootTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateNew()
    {
        $shoot = new Shoot();
        $this->assertInstanceOf(Shoot::class, $shoot);
    }

    public function testProperties()
    {
        $shoot = new Shoot();
        $shoot->setPower(10);
        $this->assertEquals(10, $shoot->getPower());
        $shoot->setAngle(25);
        $this->assertEquals(25, $shoot->getAngle());
    }
}
