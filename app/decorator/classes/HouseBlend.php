<?php

namespace Ppatterns\decorator\classes;

use Ppatterns\decorator\abstracts\Beverage;

class HouseBlend extends Beverage
{
    protected $description = 'House Blend Coffee';

    public function cost()
    {
        return 0.89;
    }
}
