<?php

namespace Ppatterns\tests\templateMethod;

use Ppatterns\templateMethod\beverages\CoffeeWithHook;
use Ppatterns\templateMethod\beverages\Tea;

class TestBeverages
{
    public function main($config = [])
    {
        echo "Making tea...\n";
        $tea = new Tea();
        $tea->prepareRecipe();

        echo "Making coffee...\n";
        $coffee = new CoffeeWithHook();
        $coffee->prepareRecipe();
    }
}
