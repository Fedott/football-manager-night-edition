<?php

namespace Fedot\FootballManager\Interfaces;


use Fedot\FootballManager\ValueObject\Coordinates;

interface Coordinatable
{
    /**
     * @return Coordinates
     */
    public function getCoordinate();

    /**
     * @param Coordinates $coordinates
     * @return $this
     */
    public function setCoordinate(Coordinates $coordinates);
}