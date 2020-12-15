<?php
declare(strict_types=1);

namespace Observer\Implementations;

use Observer\Interfaces\Observer;
use Observer\Interfaces\Subject;

class WeatherData implements Subject
{
    private array $observers;
    private float $temperature;
    private float $humidity;
    private float $pressure;

    public function __construct() {
        $this->observers = [];
    }

    public function registerObserver(Observer $o): void
    {
        array_push($this->observers, $o);
    }

    public function removeObserver(Observer $o): void
    {
        foreach ($this->observers as $key => $value) {
            if($value === $o) {
                unset($this->observers[$key]);
            }
        }
    }

    public function notifyObserver(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

    private function measurementChanged(): void {
        $this->notifyObserver();
    }

    public function setMeasurements(float $temperature, float $humidity, float $pressure): void {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementChanged();
    }
}