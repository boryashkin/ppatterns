<?php

namespace Ppatterns\facade\devices;

class TheaterLights
{
    public function on()
    {
        echo 'TheaterLights is on';
    }

    public function off()
    {
        echo 'TheaterLights is off';
    }

    public function dim($brightness)
    {
        if (!is_numeric($brightness)) {
            throw new \Exception('Brightness must be a number');
        }
        echo "Dimmed light to $brightness";
    }
}