<?php

namespace Ppatterns\templateMethod\abstracts;

abstract class CaffeineBeverage
{
    public final function prepareRecipe()
    {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        $this->addCondiments();
    }

    abstract public function brew();
    abstract public function addCondiments();

    public function boilWater()
    {
        echo "Boiling water\n";
    }

    public function pourInCup()
    {
        echo "Pouring into cup\n";
    }
}
