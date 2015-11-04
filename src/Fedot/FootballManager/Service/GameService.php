<?php


namespace Fedot\FootballManager\Service;


use Fedot\FootballManager\Model\Ball;
use Fedot\FootballManager\Model\Field;
use Fedot\FootballManager\Model\Player;

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
        $this->ball = new Ball();
        $this->players[] = new Player();
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
