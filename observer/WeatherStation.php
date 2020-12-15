<?php

namespace Observer;

use Observer\Implementations\AverageConditionsDisplay;
use Observer\Implementations\CurrentConditionsDisplay;
use Observer\Implementations\WeatherData;

class WeatherStation
{
    public function displayWeather(): void {
        $weatherData = new WeatherData();
        new CurrentConditionsDisplay($weatherData);
        new AverageConditionsDisplay($weatherData);

        $weatherData->setMeasurements(80, 65, 30.4);
    }
}