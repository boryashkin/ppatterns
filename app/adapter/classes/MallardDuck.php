<?php

namespace Ppatterns\adapter\classes;

use Ppatterns\adapter\interfaces\Duck;

class MallardDuck implements Duck
{
    public function quack()
    {
        echo 'Quack!';
    }

    public function fly()
    {
        echo 'I\'m flying!';
    }
}