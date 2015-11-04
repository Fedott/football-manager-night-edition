<?php


namespace Fedot\FootballManager\Service;

use Fedot\FootballManager\Model\Ball;
use Fedot\FootballManager\Model\Field;
use Fedot\FootballManager\Model\Player;

class GameServiceTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateNew()
    {
        $gameService = new GameService();

        $this->assertInstanceOf(GameService::class, $gameService);
    }

    public function testPrepare()
    {
        $gameService = new GameService();

        $gameService->prepare();

        $field = $gameService->getField();
        $ball = $gameService->getBall();
        $players = $gameService->getPlayers();

        $this->assertInstanceOf(Field::class, $field);
        $this->assertInstanceOf(Ball::class, $ball);
        foreach ($players as $player) {
            $this->assertInstanceOf(Player::class, $player);
        }
    }
}