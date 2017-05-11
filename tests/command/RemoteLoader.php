<?php

namespace Ppatterns\tests\command;

use Ppatterns\command\commands\LightOffCommand;
use Ppatterns\command\commands\LightOnCommand;
use Ppatterns\command\commands\StereoOffWithCdCommand;
use Ppatterns\command\commands\StereoOnWithCdCommand;
use Ppatterns\command\entities\Light;
use Ppatterns\command\entities\Stereo;
use Ppatterns\command\RemoteControl;

class RemoteLoader
{
    public function main($config = [])
    {
        $rc = new RemoteControl();

        $kitchenLight = new Light('Kitchen');
        $lrLight = new Light('Living Room');
        $stereo = new Stereo();

        $kitchenOnCommand = new LightOnCommand($kitchenLight);
        $kitchenOffCommand = new LightOffCommand($kitchenLight);
        $lrOnCommand = new LightOnCommand($lrLight);
        $lrOffCommand = new LightOffCommand($lrLight);
        $stereoOnCommand = new StereoOnWithCdCommand($stereo);
        $stereoOffCommand = new StereoOffWithCdCommand($stereo);

        $i = 0;
        $rc->setCommand($i++, $kitchenOnCommand, $kitchenOffCommand);
        $rc->setCommand($i++, $lrOnCommand, $lrOffCommand);
        $rc->setCommand($i++, $stereoOnCommand, $stereoOffCommand);

        while ($i--) {
            $rc->onButtonWasPressed($i);
            $rc->offButtonWasPressed($i);
        }

        echo $rc;
    }
}