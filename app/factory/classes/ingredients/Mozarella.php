<?php

namespace Ppatterns\factory\classes\ingredients;

use Ppatterns\factory\abstracts\Cheese;

class Mozarella extends Cheese
{
    public $name = 'Mozarella';

    public function melt()
    {
        echo 'too much ';
    }
}
