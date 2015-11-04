<?php


namespace Fedot\FootballManager\Model;


use Fedot\FootballManager\Interfaces\Coordinatable;
use Fedot\FootballManager\Model\Action\Move;
use Fedot\FootballManager\Model\Action\Shoot;
use Fedot\FootballManager\ValueObject\Coordinates;

class PlayerTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateNew()
    {
        $player = new Player();
        $this->assertInstanceOf(Player::class, $player);
    }

    public function testPlayerProperties()
    {
        $player = new Player();
        $player->setName('Zlatan');
        $player->setNumber(7);

        $player->setSpeed(75);
        $player->setShotAccurency(90);
        $player->setShotPower(98);

        $this->assertEquals('Zlatan', $player->getName());
        $this->assertEquals(7, $player->getNumber());
        $this->assertEquals(75, $player->getSpeed());
        $this->assertEquals(90, $player->getShotAccurency());
        $this->assertEquals(98, $player->getShotPower());

        $world = new World();
        $player->setWorld($world);
        $this->assertEquals($world, $player->getWorld());
    }

    public function testImplementCoordinatable()
    {
        $player = new Player();
        $this->assertInstanceOf(Coordinatable::class, $player);
    }

    public function testDecideMove()
    {
        $world = new World();
        $field = new Field();
        $field->setCoordinate(new Coordinates(0, 0));
        $world->setField($field);

        $ball = new Ball();
        $ball->setCoordinate(new Coordinates(100, 100));
        $world->setBall($ball);

        $player = new Player();
        $player->setCoordinate(new Coordinates(10, 100));
        $player->setWorld($world);
        $players = [$player];

        $world->setPlayers($players);

        $action = $player->decide();
        $this->assertInstanceOf(Move::class, $action);
    }

    public function testDecideShoot()
    {
        $world = new World();
        $field = new Field();
        $field->setCoordinate(new Coordinates(0, 0));
        $world->setField($field);

        $ball = new Ball();
        $ball->setCoordinate(new Coordinates(100, 100));
        $world->setBall($ball);

        $player = new Player();
        $player->setCoordinate(new Coordinates(90, 100));
        $player->setWorld($world);
        $players = [$player];

        $world->setPlayers($players);

        $action = $player->decide();
        $this->assertInstanceOf(Shoot::class, $action);
    }

}
