<?php


namespace Fedot\FootballManager\Model;


use Fedot\FootballManager\Model\Action\Move;
use Fedot\FootballManager\Model\Action\Shoot;
use Fedot\FootballManager\ValueObject\Coordinates;



class Player extends AbstractCoordinatable
{
    /**
     * @var World
     */
    protected $world;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    protected $number;

    /**
     * @var int
     */
    protected $speed;

    /**
     * @var int
     */
    protected $shotAccurency;

    /**
     * @var int
     */
    protected $shotPower;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Player
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param int $number
     * @return Player
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return int
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @param int $speed
     * @return Player
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;
        return $this;
    }

    /**
     * @return int
     */
    public function getShotAccurency()
    {
        return $this->shotAccurency;
    }

    /**
     * @param int $shotAccurency
     * @return Player
     */
    public function setShotAccurency($shotAccurency)
    {
        $this->shotAccurency = $shotAccurency;
        return $this;
    }

    /**
     * @return int
     */
    public function getShotPower()
    {
        return $this->shotPower;
    }

    /**
     * @param int $shotPower
     * @return Player
     */
    public function setShotPower($shotPower)
    {
        $this->shotPower = $shotPower;
        return $this;
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
     * @return Player
     */
    public function setWorld(World $world)
    {
        $this->world = $world;
        return $this;
    }

    public function decide()
    {
        $ballCoordinates = $this->world->getBall()->getCoordinate();

        $dx = $ballCoordinates->getX() - $this->getCoordinate()->getX();
        $dy = $ballCoordinates->getY() - $this->getCoordinate()->getY();

        $distance = pow((pow($dx, 2) + pow($dy, 2)), 0.5);

        if ($distance < 15) {
            $action = new Shoot();
            $action->setAngle(rand(0, 100));
            $action->setPower(rand(0, 100));
        } else {
            $action = new Move();
            $action->setAngle(rand(0, 100));
            $action->setSpeed(rand(0, 100));
        }
        return $action;
    }
}
