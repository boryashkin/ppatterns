<?php

namespace Ppatterns\command;

use Ppatterns\command\abstracts\Command;
use Ppatterns\command\commands\NoCommand;

class RemoteControl
{
    const AMOUNT_OF_SLOTS = 7;

    /** @var Command[] */
    protected $onCommands;
    /** @var Command[] */
    protected $offCommands;

    public function __construct()
    {
        $noCommand = new NoCommand();
        for ($i = 0; $i < self::AMOUNT_OF_SLOTS; $i++) {
            $this->onCommands[] = $noCommand;
            $this->offCommands[] = $noCommand;
        }
    }

    public function setCommand($slot, Command $onCommand, Command $offCommand)
    {
        $this->validateSlot($slot);
        $this->onCommands[$slot] = $onCommand;
        $this->offCommands[$slot] = $offCommand;
    }

    public function onButtonWasPressed($slot)
    {
        $this->validateSlot($slot);
        $this->onCommands[$slot]->execute();
    }

    public function offButtonWasPressed($slot)
    {
        $this->validateSlot($slot);
        $this->offCommands[$slot]->execute();
    }

    public function __toString()
    {
        $text = "\n -------------- Remote Control -------------- \n";
        for ($i = 0, $c = count($this->onCommands); $i < $c; $i++) {
            $text .= "[slot $i] " . get_class($this->onCommands[$i]) . " "
            . get_class($this->offCommands[$i]) . "\n";
        }

        return $text;
    }

    /**
     * @param $slot
     * @throws \Exception
     */
    private function validateSlot($slot)
    {
        if (!is_int($slot) || $slot < 0 || $slot > self::AMOUNT_OF_SLOTS) {
            throw new \Exception('There are ' . self::AMOUNT_OF_SLOTS . ' slots in RC');
        }
    }
}
