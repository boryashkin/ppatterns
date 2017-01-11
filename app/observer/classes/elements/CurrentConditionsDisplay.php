<?php

namespace Ppatterns\observer\classes\elements;

use Ppatterns\observer\classes\subjects\WeatherData;
use Ppatterns\observer\interfaces\DisplayElement;
use SplSubject;
use SplObserver;

class CurrentConditionsDisplay implements SplObserver, DisplayElement
{
    /**
     * @var WeatherData
     */
    private $weatherData;
    /**
     * @var float
     */
    private $temperature;
    /**
     * @var float
     */
    private $humidity;

    public function __construct(WeatherData $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->attach($this);
    }

    public function update(SplSubject $observer)
    {
        /** @var WeatherData $observer */
        $this->temperature = $this->weatherData->getTemperature();
        $this->humidity = $this->weatherData->getHumidity();
        $this->display();
    }

    public function display()
    {
        echo 'Current conditions: ' . $this->temperature . 'F degrees and ' . $this->humidity . '% humidity';
    }
}