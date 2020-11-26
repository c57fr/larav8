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

    // Affiche le sport de la femme
    public function faireDuSport()
    {
        echo $this->nom .' fait du fitness';
    }

    // Affiche la distraction de la femme
    public function seDivertir()
    {
        echo 'Shopping entre filles';
    }
}
