<?php

namespace Ppatterns\templateMethod\beverages;

use Ppatterns\templateMethod\abstracts\CaffeineBeverage;

class Tea extends CaffeineBeverage
{
    public function brew()
    {
        echo "Steeping the tea\n";
    }

    public function addCondiments()
    {
        echo "Adding Lemon\n";
    }
}
