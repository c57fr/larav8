<?php
include_once 'EtreHumain.php';
final class Homme extends EtreHumain
{
    // Construit l'objet Homme
    public function __construct($nom)
    {
        $this->nom  = $nom;
        $this->sexe = 'M';
    }

    // Affiche le sport de l'homme
    public function faireDuSport()
  {
    echo $this->nom .' fait de la boxe';
  }

  // Affiche la distraction de l'homme
  public function seDivertir()
  {
    echo 'Soirée foot et bières';
  }

  //Retourne le sexe
  public function getSexe()
  {
    return 'Masculin';
  }

}