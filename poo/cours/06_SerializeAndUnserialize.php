<?php
include_once './01_classes/Singleton.php';

$iVar = 1;
$sSerialized    = serialize($iVar);
$iUnserialized  = unserialize($sSerialized);

echo '<pre>';
var_dump($sSerialized,$iUnserialized);
echo '</pre>';

echo '<br>';

$aTableau = array('Riri','Fifi','Loulou','Donald','Picsou');
$sSerialized = serialize($aTableau);
$aUnserialized = unserialize($sSerialized);
 
echo '<pre>';
var_dump($sSerialized,$aUnserialized);
echo '</pre>';