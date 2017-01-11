<?php

namespace Ppatterns\decorator\classes\decorators;

use Ppatterns\decorator\abstracts\Beverage;
use Ppatterns\decorator\abstracts\CondimentDecorator;

class Whip extends CondimentDecorator
{
    /** @var  Beverage */
    private $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription()
    {
        return $this->beverage->getDescription() . ', Whip';
    }

    public function cost()
    {
        return 0.3 + $this->beverage->cost();
    }
}
