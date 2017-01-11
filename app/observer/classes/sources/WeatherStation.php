<?php

namespace Ppatterns\observer\classes\sources;

use Ppatterns\observer\classes\elements\CurrentConditionsDisplay;
use Ppatterns\observer\classes\elements\StatisticsDisplay;
use Ppatterns\observer\classes\subjects\WeatherData;

class WeatherStation
{
    public static function main(array $args)
    {
        $weatherData = new WeatherData();

        $currentDisplay = new CurrentConditionsDisplay($weatherData);
        $display = new StatisticsDisplay($weatherData);

        $weatherData->setMeasurements(80, 65, 30.40);
        $weatherData->setMeasurements(82, 70, 29.2);
        $weatherData->setMeasurements(78, 90, 29.2);

        $weatherData->detach($currentDisplay);

        $weatherData->setMeasurements(80, 65, 30.40);
        $weatherData->setMeasurements(82, 70, 29.2);
        $weatherData->setMeasurements(78, 90, 29.2);
    }
}