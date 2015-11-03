<?php


namespace Fedot\FootballManager\Model;


class BallTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateNew()
    {
        $ball = new Ball();

        $this->assertInstanceOf(Ball::class, $ball);
    }
}