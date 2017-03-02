<?php
namespace Ppatterns\factory\classes\pizzas\ch;

use Ppatterns\factory\abstracts\Pizza;

class PepperoniPizza extends Pizza
{
    /** @inheritdoc */
    public function prepare()
    {
        echo "Preparing {$this->getName()} ";
        $this->dough = $this->ingredientFactory->createDough();
        $this->dough->swell();
        $this->cheese = $this->ingredientFactory->createCheese();
        $this->cheese->melt();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->sauce->spill();
    }
}
