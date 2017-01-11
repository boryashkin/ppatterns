<?php

namespace Ppatterns\observer\classes\subjects;

use Ppatterns\observer\abstracts\Observable;
use SplObserver;

class WeatherData extends Observable
{
    /** @var  float */
    private $temperature;

    /** @var  float */
    private $humidity;

    /** @var  float */
    private $pressure;

    /** @var bool */
    private $changed = false;

    /**
     * @return float
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * @return float
     */
    public function getHumidity()
    {
        return $this->humidity;
    }

    /**
     * @return float
     */
    public function getPressure()
    {
        return $this->pressure;
    }

    public function measurementsChanged()
    {
        $this->setChanged();
        $this->notify();
    }

    public function setMeasurements($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;

        $this->measurementsChanged();
    }
}