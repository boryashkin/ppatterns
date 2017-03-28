<?php

namespace Ppatterns\command\entities;

class Light
{
    public function on()
    {
        echo "on\n";

        return 'on';
    }

    public function off()
    {
        echo "off\n";

        return 'off';
    }
}
