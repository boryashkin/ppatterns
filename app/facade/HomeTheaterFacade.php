<?php

namespace Ppatterns\facade;

use Ppatterns\facade\devices\Amplifier;
use Ppatterns\facade\devices\CdPlayer;
use Ppatterns\facade\devices\DvdPlayer;
use Ppatterns\facade\devices\PopcornPopper;
use Ppatterns\facade\devices\Projector;
use Ppatterns\facade\devices\Screen;
use Ppatterns\facade\devices\TheaterLights;
use Ppatterns\facade\devices\Tuner;

class HomeTheaterFacade
{
    /** @var Amplifier */
    public $amplifier;
    /** @var Tuner */
    public $tuner;
    /** @var DvdPlayer */
    public $dvd;
    /** @var CdPlayer */
    public $cd;
    /** @var Projector */
    public $projector;
    /** @var TheaterLights */
    public $lights;
    /** @var Screen */
    public $screen;
    /** @var PopcornPopper */
    public $popper;

    public function __construct(
        Amplifier $amplifier,
        Tuner $tuner,
        DvdPlayer $dvd,
        CdPlayer $cd,
        Projector $projector,
        TheaterLights $theaterLights,
        Screen $screen,
        PopcornPopper $popcorn
    ) {
        $this->amplifier = $amplifier;
        $this->tuner = $tuner;
        $this->dvd = $dvd;
        $this->cd = $cd;
        $this->projector = $projector;
        $this->lights = $theaterLights;
        $this->screen = $screen;
        $this->popper = $popcorn;
    }

    /**
     * @param string $movie
     */
    public function watchMovie($movie)
    {
        echo 'Get ready to watch a movie...';
        $this->popper->on();
        $this->popper->pop();
        $this->lights->dim(10);
        $this->screen->down();
        $this->projector->on();
        $this->amplifier->setDvd($this->dvd);
        $this->amplifier->setSurroundSound();
        $this->dvd->on();
        $this->dvd->play($movie);
    }

    public function endMovie()
    {
        echo 'Shutting movie theater down...';
        $this->popper->off();
        $this->lights->off();
        $this->screen->up();
        $this->projector->off();
        $this->amplifier->off();
        $this->dvd->stop();
        $this->dvd->eject();
        $this->dvd->off();
    }

    public function listenToCd()
    {

    }

    public function endCd()
    {

    }

    public function listenToRadio()
    {

    }

    public function endRadio()
    {

    }
}