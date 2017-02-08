<?php

namespace Ppatterns\factory\abstracts;

/**
 * Default Pizza
 * @package Ppatterns\factory\classes
 */
abstract class Pizza
{
    private function getName()
    {
        return static::class;
    }

    public function prepare()
    {
        echo 'preparing...';
    }

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
