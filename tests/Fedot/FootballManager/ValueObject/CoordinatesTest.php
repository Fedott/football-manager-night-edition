<?php


namespace Fedot\FootballManager\ValueObject;


class CoordinatesTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateNew()
    {
        $coordinates = new Coordinates(400, 300);

        $this->assertInstanceOf(Coordinates::class, $coordinates);
    }

    public function testProperties()
    {
        $coordinates = new Coordinates(400, 300);

        $this->assertEquals(400, $coordinates->getX());
        $this->assertEquals(300, $coordinates->getY());
    }
}
