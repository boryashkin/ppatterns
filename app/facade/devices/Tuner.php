<?php

namespace Ppatterns\facade\devices;

class Tuner
{
    /** @var Amplifier */
    public $amplifier;

    public function on()
    {
        echo 'Tuner is on';
    }

    public function off()
    {
        echo 'Tuner is off';
    }

    public function setAm()
    {
        echo 'Tuner setting Am';
    }

    public function setFm()
    {
        echo 'Tuner setting Fm';
    }

    public function setFrequency()
    {
        echo 'Tuner setting Frequency';
    }

    public function __toString()
    {
        return serialize($this);
    }
}