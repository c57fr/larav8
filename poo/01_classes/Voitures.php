<?php
class Voiture extends Vehicules
{
    //Attributs
    private $_volumeCarburant;

    // Methodes
    public function __construt()
    {
        // Appel du constructeur de la classe parente
        parent::__construt($marque);
        $this->_volumeCarburant = 40;
    }

    // Demarrer la voiture si le reservoi n'est pas vide
    public function demarrer()
    {
        if($this->controlerVolumeCarburant())
        {
            echo 'Le vehicule demarre';
            return true;
        }
        echo 'Le reservoir est vide';
    }

    // Verifier au'il y'a du carburant dans le reservoir
    public function __controlerVolumeCarburant()
    {
        return ($this->_volumeCarburant > 0);
    }
}