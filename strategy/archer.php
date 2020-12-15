<?php

require "../vendor/autoload.php";
use Strategy\Models\Archer;

$archer = new Archer();
echo($archer->attack());