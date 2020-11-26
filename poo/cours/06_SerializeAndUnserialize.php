<?php

/*
 * Ce fichier est la propriété de larav8 (c) 2020
 */

$iVar          = 1;
$sSerialized   = serialize($iVar);
$iUnserialized = unserialize($sSerialized);

echo '<pre>';
var_dump($sSerialized, $iUnserialized);
echo '</pre>';

echo str_repeat('-', 90);

$aTableau      = ['Riri', 'Fifi', 'Loulou', 'Donald', 'Picsou'];
$sSerialized   = serialize($aTableau);
$aUnserialized = unserialize($sSerialized);

echo '<pre>';
var_dump($sSerialized, $aUnserialized);
echo '</pre>';

echo str_repeat('-', 90);

include_once './01_classes/Dormeur.php';

$oDormeur      = new Dormeur();
$sSerialized   = serialize($oDormeur);
$oUnserialized = unserialize($sSerialized);

echo '<pre>';
var_dump($sSerialized, $oUnserialized);
echo '</pre>';

echo str_repeat('-', 90);
