<?php

namespace Ppatterns\templateMethod\beverages;

use Ppatterns\templateMethod\abstracts\CaffeineBeverage;

class Coffee extends CaffeineBeverage
{
    public function brew()
    {
        echo "Dripping Coffee through filter\n";
    }

    public function addCondiments()
    {
        echo "Adding Sugar and Milk\n";
    }
}
