<?php


namespace Fedot\FootballManager\Service;


use Fedot\FootballManager\Model\Action\Move;
use Fedot\FootballManager\Model\Player;
use Fedot\FootballManager\Model\World;
use Fedot\FootballManager\ValueObject\Coordinates;

class EngineServiceTest extends \PHPUnit_Framework_TestCase
{
    public function testPrepare()
    {
        $engineService = new EngineService();

        $engineService->prepare();

        $world = $engineService->getWorld();
        $this->assertInstanceOf(World::class, $world);
    }

    public function testProcessMove()
    {
        $engineService = new EngineService();

        $player = new Player();
        $player->setCoordinate(new Coordinates(0, 0));
        $move = new Move();
        $move->setAngle(10);
        $move->setSpeed(70);

        $engineService->processMove($move, $player);

        $this->assertNotEquals(0, $player->getCoordinate()->getX());
        $this->assertNotEquals(0, $player->getCoordinate()->getY());
    }
}
