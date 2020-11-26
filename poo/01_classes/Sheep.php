<?php

/*
 * Ce fichier est la propriété de larav8 (c) 2020
 */

class Sheep
{
  // Nom du mouton
  protected $_name;

  public function __construct($name)
  {
    $this->_name = (string) $name;
  }

  // Methode magique clone
  public function __clone()
  {
    $this->_name = 'Copie de '.$this->_name;
  }
}
