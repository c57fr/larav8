<?php
include_once 'EtreHumain.php';

class Femme extends EtreHumain
{
    // Construit l'objet Femme
    public function __construct($nom)
    {
      $this->nom  = $nom;
      $this->sexe = 'F';  
    }
}
