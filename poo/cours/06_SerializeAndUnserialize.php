<?php

$iVar = 1;
$sSerialized    = serialize($iVar);
$iUnserialized  = unserialize($sSerialized);

echo '<pre>';
var_dump($sSerialized,$iUnserialized);
echo '</pre>';

echo '<br>';

