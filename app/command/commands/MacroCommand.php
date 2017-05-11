<?php

namespace Ppatterns\command\commands;

use Ppatterns\command\abstracts\Command;

class MacroCommand implements Command
{
    /** @var Command[] */
    public $commands;

    public function __construct(array $commands)
    {
        foreach ($commands as $command) {
            if (!$command instanceof Command) {
                throw new \Exception('Waiting for Command[]');
            }
            $this->commands = $commands;
        }
    }

    public function execute()
    {
        foreach ($this->commands as $command) {
            $command->execute();
        }
    }

    public function undo()
    {
        foreach ($this->commands as $command) {
            $command->undo();
        }
    }
}