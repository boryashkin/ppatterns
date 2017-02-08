<?php

namespace Ppatterns\factory\classes\stores;

use Ppatterns\factory\abstracts\PizzaStore;
use Ppatterns\factory\classes\pizzas\ny\CheesePizza;
use Ppatterns\factory\classes\pizzas\ny\GreekPizza;
use Ppatterns\factory\classes\pizzas\ny\PepperoniPizza;

/**
 * Class NYStylePizzaStore
 * @package Ppatterns\factory\classes
 */
class NYStylePizzaStore extends PizzaStore
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