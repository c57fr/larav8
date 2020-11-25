<?php
include_once './01_classes/Dormeur.php';


$oDormeur = new Dormeur();
$sSerialized = serialize($oDormeur);
$oUnserialized = unserialize($sSerialized);
 
echo '<pre>';
var_dump($sSerialized,$oUnserialized);
echo '</pre>';