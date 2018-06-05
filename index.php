<?php
require __DIR__ . "/vendor/autoload.php";
use Solt9029\Utility;

$positions = [[10, 10], [20, 10], [30, 30], [40, 40], [100, 100], [100, 120]];
$circle = Utility::getCircleContainingAllPositions($positions);
var_dump($circle);