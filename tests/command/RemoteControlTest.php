<?php

namespace Ppatterns\tests\command;

use Ppatterns\command\commands\LightOnCommand;
use Ppatterns\command\entities\Light;
use Ppatterns\command\SimpleRemoteControl;

class RemoteControlTest
{
    public function main(array $args)
    {
        $remote = new SimpleRemoteControl();
        $light = new Light();
        $lightOn = new LightOnCommand($light);

        $remote->setCommand($lightOn);
        $remote->buttonWasPressed();
    }
}
