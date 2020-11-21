<?php

include_once './01_classes/Vehicule.php';

echo str_repeat('-', 90).'<br>';
echo "Ici commence l'exo 2 <br>";

// Instanciation de l'objet: appel implicite à la methode __construct()
$monVehicule = new vehicule();


// Mise à jour de la marque du vehicule
$monVehicule->marque = 'Peugeot';




























?>