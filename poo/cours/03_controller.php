<?php
include_once './01_classes/Kid.php';
echo str_repeat('-', 90).'<br>';
echo 'Exo 3<br>';
$billy = new Kid();
$billy->age = "Ecore plus rouge qu'avant";
echo $billy->showAge();