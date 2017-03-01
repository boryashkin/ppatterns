<?php

namespace Ppatterns\factory\classes\ingredients;

use Ppatterns\factory\abstracts\Sauce;

class PlumTomato extends Sauce
{
    public $name = 'Plum tomato';

    public function spill()
    {
        echo 'red sauce';
    }
}
