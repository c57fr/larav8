<?php

/*
 * Ce fichier est la propriété de larav8 (c) 2020
 */

include_once './classes/Call.php';

$george = new Call();
$george->langage('PHP', 'Js');
$george->os('Win10', 'Linux');

// → Vous avez appelé la methode langage avec les arguments : PHP
