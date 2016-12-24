<?php

namespace Ppatterns\strategy\behaviors\quack;

use Ppatterns\strategy\interfaces\QuackBehavior;

class MuteQuack implements QuackBehavior
{
    public function quack()
    {
        echo '<< Silence >>';
    }
}