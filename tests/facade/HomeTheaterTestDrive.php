<?php

namespace Ppatterns\tests\facade;

use Ppatterns\facade\devices\Amplifier;
use Ppatterns\facade\devices\CdPlayer;
use Ppatterns\facade\devices\DvdPlayer;
use Ppatterns\facade\devices\PopcornPopper;
use Ppatterns\facade\devices\Projector;
use Ppatterns\facade\devices\Screen;
use Ppatterns\facade\devices\TheaterLights;
use Ppatterns\facade\devices\Tuner;
use Ppatterns\facade\HomeTheaterFacade;

class HomeTheaterTestDrive
{
    public function main(array $args)
    {
        $theater = new HomeTheaterFacade(
            new Amplifier(),
            new Tuner(),
            new DvdPlayer(),
            new CdPlayer(),
            new Projector(),
            new TheaterLights(),
            new Screen(),
            new PopcornPopper()
        );

        $theater->watchMovie('Buffalo 66');
        $theater->endMovie();
    }
}