<?php

namespace Ppatterns\decorator;

use Ppatterns\decorator\classes\decorators\Mocha;
use Ppatterns\decorator\classes\decorators\Whip;
use Ppatterns\decorator\classes\Espresso;
use Ppatterns\decorator\classes\HouseBlend;

class StarbuzzCoffee
{
    public function main($args)
    {
        $beverage = new Espresso();
        echo $beverage->getDescription() . ' $' .  $beverage->cost();

        $beverage2 = new HouseBlend();
        $beverage2 = new Mocha($beverage2);
        $beverage2 = new Whip($beverage2);
        echo $beverage2->getDescription() . ' $' . $beverage2->cost();
    }
}