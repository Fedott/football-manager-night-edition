<?php

namespace Fedot\FootballManager\Model;


use Fedot\FootballManager\ValueObject\Coordinates;

class AbstractCoordinatableTest extends \PHPUnit_Framework_TestCase
{
    public function testProperties()
    {
        /** @var AbstractCoordinatable $abstractCoordinatable */
        $abstractCoordinatable = $this->getMock(AbstractCoordinatable::class, null);
        $coordinate = new Coordinates(50, 50);
        $abstractCoordinatable->setCoordinate($coordinate);
        $this->assertEquals($coordinate, $abstractCoordinatable->getCoordinate());
    }
}
