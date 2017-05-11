<?php

namespace Ppatterns\command\entities;

class Stereo
{
    public $volume = 1;

    public function on()
    {
        echo "Stereo is on\n";
    }
    public function off()
    {
        echo "Stereo is off\n";
    }

    public function setCd()
    {
        echo "CD is inserted\n";
    }

    public function setVolume($volume)
    {
        if (!is_int($volume) || $volume < 0) {
            throw new \Exception('Wrong value for volume');
        }
        $this->volume = $volume;

        echo "Volume = $volume\n";
    }
}