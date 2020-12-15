<?php

namespace Observer\Implementations;

use Observer\Interfaces\DisplayElement;
use Observer\Interfaces\Observer;
use Observer\Interfaces\Subject;

class CurrentConditionsDisplay implements Observer, DisplayElement
{
    private float $temperature;
    private float $humidity;
    private float $pressure;
    private Subject $weatherData;

    public function __construct(Subject $weatherData) {
        $this->weatherData = $weatherData;
        $weatherData->registerObserver($this);
    }

    public function display(): void
    {
        echo("Current conditions: ". $this->temperature. "c, ". $this->humidity. "%, ". $this->pressure. "mm\n");
    }

    public function update(float $temperature, float $humidity, float $pressure): void
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->display();
    }
}