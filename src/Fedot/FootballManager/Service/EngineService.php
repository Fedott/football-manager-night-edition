<?php


namespace Fedot\FootballManager\Service;


use Fedot\FootballManager\Model\Action\Move;
use Fedot\FootballManager\Model\Action\Shoot;
use Fedot\FootballManager\Model\Ball;
use Fedot\FootballManager\Model\Field;
use Fedot\FootballManager\Model\Player;
use Fedot\FootballManager\Model\World;
use Fedot\FootballManager\ValueObject\Coordinates;

class EngineService
{
    /**
     * @var World
     */
    protected $world;

    public function prepare()
    {
        $this->world = new World();
        $this
            ->world
            ->setBall(
                new Ball()
            )
            ->getBall()
            ->setCoordinate(
                new Coordinates(100, 100)
            );

        $this->world
            ->setField(new Field())
            ->getField()
            ->setCoordinate(new Coordinates(0, 0));

        $player = new Player();
        $player->setCoordinate(new Coordinates(10, 10));
        $player->setWorld($this->world);
        $this->world->setPlayers([$player]);
    }

    /**
     * @return World
     */
    public function getWorld()
    {
        return $this->world;
    }

    /**
     * @param World $world
     * @return $this
     */
    public function setWorld($world)
    {
        $this->world = $world;
        return $this;
    }

    /**
     * @param Move|Shoot $action
     * @param Player $player
     */
    public function processMove($action, Player $player)
    {

    }
}
