<?php

namespace Ppatterns\factory\interfaces;

interface PizzaIngredientFactory
{
    /** @return Dough */
    public function createDough();
    /** @return Sauce */
    public function createSauce();
    /** @return Cheese */
    public function createCheese();
}
