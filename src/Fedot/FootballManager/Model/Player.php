<?php


namespace Fedot\FootballManager\Model;


class Player
{
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
}
