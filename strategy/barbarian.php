<?php
require "../vendor/autoload.php";
use Strategy\Models\Barbarian;


$barbarian = new Barbarian();
echo($barbarian->attack());