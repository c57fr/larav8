<?php

class Sheep{
    // Nom du mouton
    protected $_name;

    public function __construct($name)
    {
        $this->_name = (string) $name;
    }

    // Methode magiqie clone
    public function __clone()
    {
        $this->_name = 'Copie de '. $this->_name;
    }
}