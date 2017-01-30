<?php

namespace Ppatterns\factory\classes;

/**
 * Default Pizza
 * @package Ppatterns\factory\classes
 */
class Pizza
{
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
        echo 'packing...';
    }
}
