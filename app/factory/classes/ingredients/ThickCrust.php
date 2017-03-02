<?php

namespace Ppatterns\factory\classes\ingredients;

use Ppatterns\factory\abstracts\Dough;

class ThickCrust extends Dough
{
    public $name = 'Thick Crust';

    public function swell()
    {
        echo 'stick ';
    }
}
