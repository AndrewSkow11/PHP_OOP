<?php

namespace App;

require_once '../vendor/autoload.php';

echo "<h1>ДЗ по абстрактным классам</h1>";

$car = new Car();
$car->start();
$car->stop();
$bicycle = new Bicycle();
$bicycle->start();
$bicycle->stop();
