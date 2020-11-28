<?php

/*
 * Ce fichier est la propriété de larav8 (c) 2020
 */

include_once './classes/Point.php';
include_once './classes/Sheep.php';
include_once './classes/Singleton.php';

$oDot = new Point();
$oDot->setCoords(10, 10);
var_dump($oDot);
$oNewDot = $oDot;
$oNewDot->setCoords(20, 20);
var_dump($oDot);

echo str_repeat('-', 90);

$oDot = new Point();
$oDot->setCoords(10, 10);
var_dump($oDot);
$oNewDot = clone $oDot;
$oNewDot->setCoords(20, 20);
var_dump($oDot);
var_dump($oNewDot);

echo str_repeat('-', 90);

$oSheep = new Sheep('Dolly');
var_dump($oSheep);
$oNewSheep = clone $oSheep;
var_dump($oNewSheep);

echo str_repeat('-', 90);

try {
  $oSingleton = Singleton::getInstance();
  clone $oSingleton;
} catch (Exception $e) {
  echo 'Oops, exception : ', $e->getMessage();
}
