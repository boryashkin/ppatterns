<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require(__DIR__ . '/../vendor/autoload.php');

$store = new \Ppatterns\factory\PizzaStore();

$store->orderPizza();
