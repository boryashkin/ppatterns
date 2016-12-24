<?php

namespace Ppatterns\strategy\behaviors\quack;

use Ppatterns\strategy\interfaces\QuackBehavior;

class Squeak implements QuackBehavior
{
    public function quack()
    {
        echo 'Squeak';
    }
}