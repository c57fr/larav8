<?php

include_once './classes/Vehicule.php';

echo "Ici commence l'exo 2 <br>";

// Instanciation de l'objet: appel implicite à la methode __construct()
//$monVehicule = new vehicule();


// Mise à jour de la marque du vehicule
//$monVehicule->marque = 'Peugeot';

echo str_repeat('-',
 90).'<br>';
$monVehicule = new Voiture('Peugeot');
$monVehicule->demarrer();
$monVehicule->reparer().'<br>';
echo str_repeat('-',
 90).'<br>';

$monVehicule->setVolumeCarburant(50);
echo sprintf("Il me reste %u L d'essence",
 $monVehicule->getVolumeCarburant());



























?>