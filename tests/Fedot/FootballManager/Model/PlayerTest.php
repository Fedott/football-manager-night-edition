<?php


namespace Fedot\FootballManager\Model;


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
    }
}
