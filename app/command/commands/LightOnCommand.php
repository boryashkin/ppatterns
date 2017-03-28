<?php

namespace Ppatterns\command\commands;

use Ppatterns\command\abstracts\Command;
use Ppatterns\command\entities\Light;

class LightOnCommand implements Command
{
    /**
     * @var Light
     */
    public $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        $this->light->on();
    }
}
