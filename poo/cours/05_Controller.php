<?php
include_once './01_classes/Point.php';
include_once './01_classes/Sheep.php';
include_once './01_classes/Singleton.php';
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

echo str_repeat('-', 90);
echo '<br>';
// class Sheep
$oSheep = new Sheep('Dolly');
var_dump($oSheep);
echo '<br>';
$oNewSheep = clone $oSheep;
var_dump($oNewSheep);
echo '<br>';
// Class Singleton
echo str_repeat('-', 90);
echo '<br>';
try {
    $oSingleton = Singleton::getInstance();
    clone $oSingleton;
  }catch(Exception $e) {
    echo 'Oops, exception : ', $e->getMessage();
  }