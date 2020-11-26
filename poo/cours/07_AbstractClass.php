<?php

/*
 * Ce fichier est la propriété de larav8 (c) 2020
 */

include_once './01_classes/Homme.php';
include_once './01_classes/Femme.php';

//$oBob = new Homme('Bobby');
//echo $oBob->getNom();

$oAlice = new Femme('Alice');
$oAlice->faireDuSport();
$oAlice->seDivertir();
echo 'Sexe : ', $oAlice->getSexe();

echo '<br/><br/>';

$oBob = new Homme('Bobby');
$oBob->faireDuSport();
$oBob->seDivertir();
echo 'Sexe : ', $oBob->getSexe();
