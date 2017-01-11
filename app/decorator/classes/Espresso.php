<?php

namespace Ppatterns\decorator\classes;

use Ppatterns\decorator\abstracts\Beverage;

class Espresso extends Beverage
{
    protected $description = 'Espresso';

    public function cost()
    {
        return 1.99;
    }
}
