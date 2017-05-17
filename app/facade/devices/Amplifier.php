<?php

namespace Ppatterns\facade\devices;

class Amplifier
{
    /** @var Tuner */
    public $tuner;
    /** @var   */
    public $dvdPlayer;
    /** @var   */
    public $cdPlayer;

    public function setDvd(DvdPlayer $dvd)
    {
        $this->dvdPlayer = $dvd;
        echo 'Amplifier: Dvd is set';
    }

    public function setSurroundSound()
    {
        echo 'Amplifier: surround sound is set';
    }

    /**
     * @param int $volume
     * @throws \Exception
     */
    public function setVolume($volume)
    {
        if (!is_int($volume)) {
            throw new \Exception('Volume must be integer');
        }
    }

    public function off()
    {
        echo 'Amplifier is off';
    }
}