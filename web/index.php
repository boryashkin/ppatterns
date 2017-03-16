<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require(__DIR__ . '/../vendor/autoload.php');

use Ppatterns\singleton\classes\ChocolateBoiler;

$boiler = ChocolateBoiler::getInstance();

$boiler->fill();
$boiler->boil();
$boiler->drain();