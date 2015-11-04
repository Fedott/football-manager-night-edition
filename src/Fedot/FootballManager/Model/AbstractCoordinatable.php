<?php


namespace Fedot\FootballManager\Model;


use Fedot\FootballManager\Interfaces\Coordinatable;
use Fedot\FootballManager\ValueObject\Coordinates;

abstract class AbstractCoordinatable implements Coordinatable
{
    /**
     * @var Coordinates
     */
    protected $coordinates;

    /**
     * @return Coordinates
     */
    public function getCoordinate()
    {
        return $this->coordinates;
    }

    /**
     * @param Coordinates $coordinates
     * @return $this
     */
    public function setCoordinate(Coordinates $coordinates)
    {
        $this->coordinates = $coordinates;
        return $this;
    }
}