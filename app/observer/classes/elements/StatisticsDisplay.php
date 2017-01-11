<?php

namespace Ppatterns\observer\classes\elements;

use Ppatterns\observer\classes\subjects\WeatherData;
use Ppatterns\observer\interfaces\DisplayElement;

class StatisticsDisplay implements \SplObserver, DisplayElement
{
    /**
     * @var WeatherData
     */
    private $weatherData;

    public function __construct(WeatherData $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->attach($this);
    }

    public function update(\SplSubject $observable)
    {
        $this->display();
    }

    public function display()
    {
        /* statistics */
        echo 'Statistics will be there soon';
    }
}