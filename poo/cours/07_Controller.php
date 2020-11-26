<?php
include_once './01_classes/Homme.php';
include_once './01_classes/Femme.php';

$oBob = new Homme('Bobby');
echo $oBob->getNom();