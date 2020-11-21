<?php


class Vehicule
{
    // Atributs
    public $marque;
    private $_volumeCarburant;
    protected $_estRepare;

    // Methodes
    public function __construct()
    {
        $this->_volumeCarburant    = 40;
        $this->_estRepare          = false;
    }

    //Demarrer la viture si le reservoir n'est pas vide
    //if ($this->_controlerVolumeCarburant())
    
    public function demarrer()
    {
        if ($this->_controlerVolumeCarburant())
        {
            echo 'Le vehicule demarre';
            return true;
        }
        echo 'Le reservoir est vide ....';
        return false;
    }

    // Verifie s'il y'a du carburant danx le reservoir
    private function _controlerVolumeCarburant()
    {
        return ($this->_volumeCarburant > 0); // renvoi true ou false
    }

    // Met le vehicule en maintenace
    protected function reparer()
    {
        $this->_estRepare = true;
        echo 'Le vehicule est en reparation';
    }
}