<?php

namespace Ppatterns\strategy\behaviors\quack;

use Ppatterns\strategy\interfaces\QuackBehavior;

class Quack implements QuackBehavior
{
    public function quack()
    {
        echo 'Quack';
    }
}