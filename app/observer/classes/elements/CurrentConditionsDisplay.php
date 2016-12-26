<?php

namespace Ppatterns\observer\classes\elements;

use Ppatterns\observer\interfaces\DisplayElement;
use Ppatterns\observer\interfaces\Observer;
use Ppatterns\observer\interfaces\Subject;

class CurrentConditionsDisplay implements Observer, DisplayElement
{
    /**
     * @var Subject
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

    public function __construct(Subject $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update($temp, $humidity, $pressure)
    {
        $this->temperature = $temp;
        $this->humidity = $humidity;
        $this->display();
    }

    public function display()
    {
        echo 'Current conditions: ' . $this->temperature . 'F degrees and ' . $this->humidity . '% humidity';
    }
}