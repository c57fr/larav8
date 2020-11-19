<?php

/*
 * Ce fichier est la propriété de larav8 (c) 2020
 */

include_once './01_classes/Personne.php';

// Instanciation & Objets
    $personne1 = new Personne();
    $personne2 = new Personne();
    $personne3 = new Personne();
    $personne4 = new Personne();
// Objets
    $personne1->boire();
    $personne2->manger();
    echo 'Les gens ont généralement '.Personne::NOMBRE_DE_MAINS.' mains.';
