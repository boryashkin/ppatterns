<?php

namespace Ppatterns\facade\devices;

class CdPlayer
{
    public $amplifier;

    public function on()
    {
        echo 'CdPlayer is on';
    }

    public function off()
    {
        echo 'CdPlayer is off';
    }
}