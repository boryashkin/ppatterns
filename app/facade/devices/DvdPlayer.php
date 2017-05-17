<?php

namespace Ppatterns\facade\devices;

class DvdPlayer
{
    public $amplifier;

    public function on()
    {
        echo 'DvdPlayer is on';
    }

    public function off()
    {
        echo 'DvdPlayer is off';
    }

    /**
     * @param string $movie
     * @throws \Exception
     */
    public function play($movie)
    {
        if (!is_scalar($movie)) {
            throw new \Exception('Movie name must be string');
        }
        echo "Movie \"$movie\" has started";
    }

    public function eject()
    {
        echo 'Dvd eject';
    }

    public function stop()
    {
        echo 'Dvd stop';
    }
}