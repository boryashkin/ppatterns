<?php

namespace Ppatterns\tests\command;

use Ppatterns\command\commands\LightOffCommand;
use Ppatterns\command\commands\LightOnCommand;
use Ppatterns\command\commands\MacroCommand;
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
        $m1Light = new Light('Macro 1');
        $m2Light = new Light('Macro 2');
        $m1OnCommand = new LightOnCommand($m1Light);
        $m1OffCommand = new LightOffCommand($m1Light);
        $m2OnCommand = new LightOnCommand($m2Light);
        $m2OffCommand = new LightOffCommand($m2Light);

        $macroOnCommand = new MacroCommand([$m1OnCommand, $m2OnCommand]);
        $macroOffCommand = new MacroCommand([$m1OffCommand, $m2OffCommand]);

        $i = 0;
        $rc->setCommand($i++, $kitchenOnCommand, $kitchenOffCommand);
        $rc->setCommand($i++, $lrOnCommand, $lrOffCommand);
        $rc->setCommand($i++, $stereoOnCommand, $stereoOffCommand);
        $rc->setCommand($i++, $macroOnCommand, $macroOffCommand);

        while ($i--) {
            $rc->onButtonWasPushed($i);
            if (rand(0,1)) {
                $rc->undoButtonWasPushed();
            } else {
                $rc->offButtonWasPushed($i);
            }
        }

        echo $rc;
    }
}