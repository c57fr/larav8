<?php
class Vehicules
{
    // Attributs
    protected $_marque;
    protected $_estRepare;

    // Methodes
    public function __construct($marque)
    {
        $this->_marque      =   $marque;
        $this->_estRepare   =   false;
    }

    // Met le vehicule en maintenance
    public function reparer()
    {
        $this->_estRepare = true;
        echo 'Le vehicule est en reparation';
    }

}