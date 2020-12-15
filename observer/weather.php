<?php
require "../vendor/autoload.php";
use Observer\WeatherStation;

$weatherStation = new WeatherStation();
$weatherStation->displayWeather();