<?php


namespace Fedot\FootballManager\Model;


use Fedot\FootballManager\Interfaces\Coordinatable;

class BallTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateNew()
    {
        $ball = new Ball();

        $this->assertInstanceOf(Ball::class, $ball);
    }

    public function testImplementsCoordinatable()
    {
        $ball = new Ball();
        $this->assertInstanceOf(Coordinatable::class, $ball);
    }
}