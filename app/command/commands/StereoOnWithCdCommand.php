<?php

namespace Ppatterns\command\commands;

use Ppatterns\command\abstracts\Command;
use Ppatterns\command\entities\Stereo;

class StereoOnWithCdCommand implements Command
{
    /** @var Stereo */
    public $stereo;

    public function __construct(Stereo $stereo)
    {
        $this->stereo = $stereo;
    }

    public function execute()
    {
        $this->stereo->on();
        $this->stereo->setCd();
        $this->stereo->setVolume(11);
    }

    public function undo()
    {
        $this->stereo->off();
    }
}
