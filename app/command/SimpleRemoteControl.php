<?php

namespace Ppatterns\command;

use Ppatterns\command\abstracts\Command;

class SimpleRemoteControl
{
    /**
     * @var Command
     */
    public $slot;

    public function setCommand(Command $command)
    {
        $this->slot = $command;
    }

    public function buttonWasPressed()
    {
        echo 'button was pressed; ';

        $this->slot->execute();
    }
}
