<?php

namespace Fedot\FootballManager\Model\Action;


class MoveTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateNew()
    {
        $move = new Move();
        $this->assertInstanceOf(Move::class, $move);
    }

    public function testProperties()
    {
        $move = new Move();
        $move->setSpeed(40);
        $this->assertEquals(40, $move->getSpeed());
        $move->setAngle(25);
        $this->assertEquals(25, $move->getAngle());
    }
}
