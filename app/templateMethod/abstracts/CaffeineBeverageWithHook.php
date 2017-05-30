<?php

namespace Ppatterns\templateMethod\abstracts;

abstract class CaffeineBeverageWithHook
{
    public final function prepareRecipe()
    {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        if ($this->customerWantsCondiments()) {
            $this->addCondiments();
        }
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

    public function customerWantsCondiments()
    {
        return true;
    }
}
