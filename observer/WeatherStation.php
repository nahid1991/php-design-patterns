<?php

namespace Observer;

use Observer\Implementations\CurrentConditionsDisplay;
use Observer\Implementations\WeatherData;

class WeatherStation
{
    public function displayWeather(): void {
        $weatherData = new WeatherData();
        $currentDisplay = new CurrentConditionsDisplay($weatherData);

        $weatherData->setMeasurements(80, 65, 30.4);
    }
}