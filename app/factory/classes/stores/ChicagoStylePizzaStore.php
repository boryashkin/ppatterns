<?php

namespace Ppatterns\factory\classes\stores;

use Ppatterns\factory\abstracts\PizzaStore;
use Ppatterns\factory\classes\pizzas\ch\CheesePizza;
use Ppatterns\factory\classes\pizzas\ch\GreekPizza;
use Ppatterns\factory\classes\pizzas\ch\PepperoniPizza;

/**
 * Class ChicagoStylePizzaStore
 * @package Ppatterns\factory\classes
 */
class ChicagoStylePizzaStore extends PizzaStore
{
    /** @inheritdoc */
    public function createPizza($type)
    {
        switch ($type) {
            case 'cheese':
                $pizza = CheesePizza::class;
                break;
            case 'pepperoni':
                $pizza = PepperoniPizza::class;
                break;
            default:
                $pizza = GreekPizza::class;
        }

        return new $pizza;
    }
}