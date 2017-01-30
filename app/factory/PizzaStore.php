<?php

namespace Ppatterns\factory;
use Ppatterns\factory\classes\Pizza;
use Ppatterns\factory\classes\pizzas\CheesePizza;
use Ppatterns\factory\classes\pizzas\GreekPizza;
use Ppatterns\factory\classes\pizzas\PepperoniPizza;

/**
 * Class PizzaStore
 * @package Ppatterns\factory
 */
class PizzaStore
{
    /**
     * @var Pizza
     */
    protected $pizza;

    public function orderPizza($type = 'default')
    {
        switch ($type) {
            case 'cheese':
                $this->pizza = new CheesePizza();
                break;
            case 'greek':
                $this->pizza = new GreekPizza();
                break;
            case 'pepperoni':
                $this->pizza = new PepperoniPizza();
                break;
            default:
                $this->pizza = new Pizza();
        }

        $this->pizza->prepare();
        $this->pizza->bake();
        $this->pizza->cut();
        $this->pizza->box();

        return $this->pizza;
    }
}