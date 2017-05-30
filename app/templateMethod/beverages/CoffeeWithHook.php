<?php

namespace Ppatterns\templateMethod\beverages;

use Ppatterns\templateMethod\abstracts\CaffeineBeverageWithHook;

class CoffeeWithHook extends CaffeineBeverageWithHook
{
    public function brew()
    {
        echo "Dripping Coffee through filter\n";
    }

    public function addCondiments()
    {
        echo "Adding Sugar and Milk\n";
    }

    public function customerWantsCondiments()
    {
        $answer = $this->getUserInput();
        if (substr(strtolower($answer), 0, 1) == 'y') {
            return true;
        }

        return false;
    }

    public function getUserInput()
    {
        $answer = null;
        echo "Would you like milk and sugar with your coffee? (y/n) ";

        return trim(fgets(STDIN));
    }
}
