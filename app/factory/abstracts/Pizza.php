<?php

namespace Ppatterns\factory\abstracts;

use Ppatterns\factory\interfaces\Cheese;
use Ppatterns\factory\interfaces\Dough;
use Ppatterns\factory\interfaces\PizzaIngredientFactory;
use Ppatterns\factory\interfaces\Sauce;

/**
 * Default Pizza
 * @package Ppatterns\factory\classes
 */
abstract class Pizza
{
    /** @var PizzaIngredientFactory */
    public $ingredientFactory;
    /** @var Dough */
    public $dough;
    /** @var Sauce */
    public $sauce;
    /** @var Cheese */
    public $cheese;

    public function __construct(PizzaIngredientFactory $ingredientFactory)
    {
        $this->ingredientFactory = $ingredientFactory;
    }

    public function getName()
    {
        return static::class;
    }

    /** fill out the ingredients */
    abstract function prepare();

    public function bake()
    {
        echo 'baking...';
    }

    public function cut()
    {
        echo 'slicing...';
    }

    public function box()
    {
        echo "packing... Your {$this->getName()} is done";
    }
}
