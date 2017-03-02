<?php
namespace Ppatterns\factory\classes\pizzas\ny;

use Ppatterns\factory\abstracts\Pizza;
use Ppatterns\factory\interfaces\PizzaIngredientFactory;

class PepperoniPizza extends Pizza
{
    /** @inheritdoc */
    public function prepare()
    {
        echo "Preparing {$this->getName()} ";
        $this->dough = $this->ingredientFactory->createDough();
        $this->dough->swell();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->sauce->spill();
        $this->cheese = $this->ingredientFactory->createCheese();
        $this->cheese->melt();
        $this->cheese = $this->ingredientFactory->createCheese();
        $this->cheese->melt();
    }
}
