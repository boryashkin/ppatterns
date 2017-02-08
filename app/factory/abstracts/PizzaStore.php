<?php

namespace Ppatterns\factory\abstracts;
use Ppatterns\factory\abstracts\Pizza;

/**
 * PizzaStore become abstract
 * @package Ppatterns\factory\abstracts
 */
abstract class PizzaStore
{
    /**
     * Corporate technology
     * @param $type
     * @return Pizza
     * @throws \Exception
     */
    final public function orderPizza($type)
    {
        /** @var Pizza $pizza */
        $pizza = $this->createPizza($type);
        if (!$pizza instanceof Pizza) {
            throw new \Exception('Illegal argument received!');
        }
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }

    /**
     * Factory method
     * @param $type
     * @return mixed
     */
    abstract public function createPizza($type);
}
