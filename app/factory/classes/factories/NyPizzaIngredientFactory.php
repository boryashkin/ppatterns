<?php

namespace Ppatterns\factory\classes\factories;

use Ppatterns\factory\classes\ingredients\Mozarella;
use Ppatterns\factory\classes\ingredients\PlumTomato;
use Ppatterns\factory\classes\ingredients\ThickCrust;
use Ppatterns\factory\interfaces\PizzaIngredientFactory;

class NyPizzaIngredientFactory implements PizzaIngredientFactory
{
    /** @inheritdoc */
    public function createCheese()
    {
        return new Mozarella();
    }

    /** @inheritdoc */
    public function createDough()
    {
        return new ThickCrust();
    }

    /** @inheritdoc */
    public function createSauce()
    {
        return new PlumTomato();
    }
}