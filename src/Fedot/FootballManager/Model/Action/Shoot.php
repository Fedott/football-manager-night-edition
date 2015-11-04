<?php


namespace Fedot\FootballManager\Model\Action;


class Shoot
{
    /**
     * @var int
     */
    protected $power;

    /**
     * @var int
     */
    protected $angle;

    /**
     * @return int
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * @param int $power
     * @return Shoot
     */
    public function setPower($power)
    {
        $this->power = $power;
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
     * @return Shoot
     */
    public function setAngle($angle)
    {
        $this->angle = $angle;
        return $this;
    }
}