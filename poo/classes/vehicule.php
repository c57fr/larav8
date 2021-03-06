<?php


class Vehicule
{
    // Atributs
    protected $_marque;
    protected $_estRepare;

    // Methodes
    public function __construct($marque)
    {
        $this->_marque = $marque;
        $this->_estRepare = false;
    }

    // Met le vehicule en maintenance
    public function reparer()
    {
        $this->_estRepare = true;
        echo 'Le vehicule est en reparation<br>';
    }
    
}

class Voiture extends Vehicule
{
    //Attributs
    private $_volumeCarburant;

    //Methodes
    public function __construct($marque)
    {
        // Appel du constructeur de la classe parente
        parent::__construct($marque);
        $this->_volumeCarburant = 40;
    }

    // Demarre la voiture si le reservoir n'est pas vide
    public function demarrer()
    {
        if ($this->_controlerVolumeCarburant())
        {
            echo 'Le vehicule demarre';
            return true;
        }
        echo 'Le reservoir est vide ...';
        return false;
    }


    // Verifier qu'il y'a du carburant dans le reservoir
    private function _controlerVolumeCarburant()
    {
        return ($this->_volumeCarburant) > 0;
    }

    // ... 
    public function setVolumeCarburant($dVolume)
    {
        $this->_volumeCarburant = $dVolume;
    }
    // ... 
    public function getVolumeCarburant()
    {
       return $this->_volumeCarburant;
    }
}
