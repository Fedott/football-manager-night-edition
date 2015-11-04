<?php


namespace Fedot\FootballManager\Model\Action;


class Move
{
    /**
     * @var int
     */
    protected $speed;

    /**
     * @var int
     */
    protected $angle;

    /**
     * @return int
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @param int $speed
     * @return Move
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;
        return $this;
    }

    /**
     * @return int
     */
    public function getAngle()
    {
        return $this->angle;
    }

    /**
     * @param int $angle
     * @return Move
     */
    public function setAngle($angle)
    {
        $this->angle = $angle;
        return $this;
    }
}