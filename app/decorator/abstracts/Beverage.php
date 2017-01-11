<?php

namespace Ppatterns\decorator\abstracts;

abstract class Beverage
{
    /** @var string */
    protected $description = 'Unknown Beverage';

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return float
     */
    public abstract function cost();
}
