<?php

namespace Ppatterns\command\commands;

use Ppatterns\command\abstracts\Command;
use Ppatterns\command\entities\Stereo;

class StereoOffWithCdCommand implements Command
{
    /** @var Stereo */
    public $stereo;

    public function __construct(Stereo $stereo)
    {
        $this->stereo = $stereo;
    }

    public function execute()
    {
        $this->stereo->off();
    }

    public function undo()
    {
        $this->stereo->on();
    }
}
