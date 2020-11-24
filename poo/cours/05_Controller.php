<?php
include_once './01_classes/Point.php';
//$oDot = new Point();
$oDot = new Point;
$oDot->setCoords(10,10);
var_dump($oDot);
$oNewDot = $oDot;
$oNewDot->setCoords(20,20);
echo '<br>';
var_dump($oDot);
echo '<br>';

echo str_repeat('-', 90);

echo '<br>';

$oNewDot = clone $oDot;

$oDot = new Point;
$oDot->setCoords(10,10);
var_dump($oDot);
echo '<br>';
$oNewDot = clone $oDot;
$oNewDot->setCoords(20,20);
var_dump($oDot);
echo '<br>';
var_dump($oNewDot);
