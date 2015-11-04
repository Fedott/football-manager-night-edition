<?php


namespace Fedot\FootballManager\ValueObject;


class Coordinates
{
    /**
     * @var int
     */
    protected $x;

    /**
     * @var int
     */
    protected $y;

    /**
     * Coordinates constructor.
     * @param int $x
     * @param int $y
     */
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @return int
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @return int
     */
    public function getY()
    {
        return $this->y;
    }
}
