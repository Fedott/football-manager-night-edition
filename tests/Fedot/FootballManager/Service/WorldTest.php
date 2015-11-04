<?php


namespace Fedot\FootballManager\Service;

use Fedot\FootballManager\Model\Ball;
use Fedot\FootballManager\Model\Field;
use Fedot\FootballManager\Model\Player;
use Fedot\FootballManager\Model\World;

class WorldTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateNew()
    {
        $world = new World();

        $this->assertInstanceOf(World::class, $world);
    }

    public function testProperties()
    {
        $world = new World();
        $field = new Field();
        $world->setField($field);

        $ball = new Ball();
        $world->setBall($ball);

        $player = new Player();
        $players = [$player];
        $world->setPlayers($players);

        $this->assertEquals($field, $world->getField());
        $this->assertEquals($ball, $world->getBall());
        $this->assertEquals($players, $world->getPlayers());
    }

    public function testPrepare()
    {
        $world = new World();

        $world->prepare();

        $field = $world->getField();
        $ball = $world->getBall();
        $players = $world->getPlayers();

        $this->assertInstanceOf(Field::class, $field);
        $this->assertNotNull($field->getCoordinate());
        $this->assertInstanceOf(Ball::class, $ball);
        $this->assertNotNull($ball->getCoordinate());
        foreach ($players as $player) {
            $this->assertInstanceOf(Player::class, $player);
            $this->assertNotNull($player->getCoordinate());
        }
    }
}