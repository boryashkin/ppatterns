<?php

namespace Ppatterns\command\entities;

class Light
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function on()
    {
        echo "{$this->name} light is on\n";

        return 'on';
    }

    public function off()
    {
        echo "{$this->name} light is off\n";

        return 'off';
    }
}