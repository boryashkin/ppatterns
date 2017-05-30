<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require(__DIR__ . '/../vendor/autoload.php');

/* test with CLI SAPI */
$test = new \Ppatterns\tests\templateMethod\TestBeverages();
$test->main([]);