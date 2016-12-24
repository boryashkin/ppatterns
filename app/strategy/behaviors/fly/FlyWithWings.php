<?php

namespace Ppatterns\strategy\behaviors\fly;

use Ppatterns\strategy\interfaces\FlyBehavior;

class FlyWithWings implements FlyBehavior
{
    public function fly()
    {
        echo 'I\'m flying!';
    }
}