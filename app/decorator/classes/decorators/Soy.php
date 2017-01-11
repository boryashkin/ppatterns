<?php

namespace Ppatterns\decorator\classes\decorators;

use Ppatterns\decorator\abstracts\Beverage;
use Ppatterns\decorator\abstracts\CondimentDecorator;

class Soy extends CondimentDecorator
{
    /** @var  Beverage */
    private $beverage;
    
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }
    
    public function getDescription()
    {
        return $this->beverage->getDescription() . ', Soy';
    }
    
    public function cost()
    {
        return 0.1 + $this->beverage->cost();
    }
}
