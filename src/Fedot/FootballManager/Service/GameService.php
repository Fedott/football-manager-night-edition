<?php


namespace Fedot\FootballManager\Service;


use Fedot\FootballManager\Model\Ball;
use Fedot\FootballManager\Model\Field;
use Fedot\FootballManager\Model\Player;
use Fedot\FootballManager\ValueObject\Coordinates;

class GameService
{
    /**
     * @var Player[]
     */
    protected $players = [];

    /**
     * @var Ball
     */
    protected $ball;

    /**
     * @var Field
     */
    protected $field;

    public function prepare()
    {
        $this->field = new Field();
        $this->field->setCoordinate(new Coordinates(0, 0));
        $this->ball = new Ball();
        $this->ball->setCoordinate(new Coordinates(180, 180));
        $player = new Player();
        $player->setCoordinate(new Coordinates(180, 181));
        $this->players[] = $player;
    }

    /**
     * @return \Fedot\FootballManager\Model\Player[]
     */
    public function getPlayers()
    {
        return $this->players;
    }

    /**
     * @return Ball
     */
    public function getBall()
    {
        return $this->ball;
    }

    /**
     * @return Field
     */
    public function getField()
    {
        return $this->field;
    }
}
