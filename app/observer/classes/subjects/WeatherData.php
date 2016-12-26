<?php

namespace Ppatterns\observer\classes\subjects;

use Ppatterns\observer\interfaces\Observer;
use Ppatterns\observer\interfaces\Subject;

class WeatherData implements Subject
{
    /**
     * @var Observer[]
     */
    private $arrayList = [];
    /**
     * @var float
     */
    private $temperature;
    /**
     * @var float
     */
    private $humidity;
    /**
     * @var float
     */
    private $pressure;

    public function registerObserver(Observer $o)
    {
        $this->arrayList[] = $o;
    }

    public function removeObserver(Observer $o)
    {
        if ($key = array_search($o, $this->arrayList)) {
            unset($this->arrayList[$key]);
        }
    }

    public function notifyObservers()
    {
        foreach ($this->arrayList as $observer) {
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

    public function measurementsChanged()
    {
        $this->notifyObservers();
    }

    public function setMeasurements($temperature, $humidity, $pressure)
    {
        $this->temperature = (float)$temperature;
        $this->humidity = (float)$humidity;
        $this->pressure = (float)$pressure;
        
        $this->measurementsChanged();
    }
}