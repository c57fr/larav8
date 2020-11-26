<?php
include_once 'EtreHumain.php';
class Homme extends EtreHumain
{
    // Construit l'objet Homme
    public function __construct($nom)
    {
        $this->nom  = $nom;
        $this->sexe = 'M';
    }


}