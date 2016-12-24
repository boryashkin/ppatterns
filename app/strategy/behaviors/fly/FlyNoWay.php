<?php

namespace Ppatterns\strategy\behaviors\fly;

use Ppatterns\strategy\interfaces\FlyBehavior;

class FlyNoWay implements FlyBehavior
{
    public function fly()
    {
        echo 'I can\'t fly!';
    }
}