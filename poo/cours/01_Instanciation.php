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
   // $personne1->boire();
   // $personne2->manger();
   // echo 'Les gens ont généralement '.Personne::NOMBRE_DE_MAINS.' mains.';


// Utilisation des attributs d'un objet

    // Définition des attributs de la personne 1
    $personne1->nom = 'Hamon';
    $personne1->prenom = 'Hugo';
    $personne1->dateDeNaissance = '02-07-1987';
    $personne1->taille = '180';
    $personne1->sexe = 'M';

    // Définition des attributs de la personne 2
    $personne2->nom = 'dubois';
    $personne2->prenom = 'Michelle';
    $personne2->dateDeNaissance = '18-11-1968';
    $personne2->taille = '166';
    $personne2->sexe = 'F';

    // Définition des attributs de la personne 3
    $personne3->nom = 'Durant';
    $personne3->prenom = 'Betrice';
    $personne3->dateDeNaissance = '02-08-1975';
    $personne3->taille = '160';
    $personne3->sexe = 'F';
    
    // Définition des attributs de la personne 4
    $personne4->nom = 'Martin';
    $personne4->prenom = 'Pierre';
    $personne4->dateDeNaissance = '23-05-1993';
    $personne4->taille = '155';
    $personne4->sexe = 'M';