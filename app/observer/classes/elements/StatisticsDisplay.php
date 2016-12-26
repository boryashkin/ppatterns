<?php

namespace Ppatterns\observer\classes\elements;

use Ppatterns\observer\interfaces\DisplayElement;
use Ppatterns\observer\interfaces\Observer;

class StatisticsDisplay implements Observer, DisplayElement
{
    public function update($temp, $humidity, $pressure)
    {
        // TODO: Implement update() method.
    }

    public function display()
    {
        /* statistics */
    }
}