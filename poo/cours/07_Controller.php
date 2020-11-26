<?php
include_once './01_classes/Homme.php';
include_once './01_classes/Femme.php';

//$oBob = new Homme('Bobby');
//echo $oBob->getNom();


$oAlice = new Femme('Alice');
$oAlice->faireDuSport();
echo '<br/>';
$oAlice->seDivertir();
echo '<br/>';
echo 'Sexe : ', $oAlice->getSexe();

echo '<br/><br/>';

$oBob = new Homme('Bobby');
$oBob->faireDuSport();
echo '<br/>';
$oBob->seDivertir();
echo '<br/>';
echo 'Sexe : ', $oBob->getSexe();