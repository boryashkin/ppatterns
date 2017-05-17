<?php

namespace Ppatterns\facade\devices;

class Projector
{
    /** @var DvdPlayer */
    public $dvdPlayer;

    public function on()
    {
        echo 'Projector is on';
    }

    public function off()
    {
        echo 'Projector is off';
    }
}