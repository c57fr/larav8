<?php

/*
 * Ce fichier est la propriété de larav8 (c) 2020
 */

class Point
{
  //Atributs
  // Abscisse du point
  protected $_x = 0;
  // Ordonnée du point
  protected $_y = 0;

  // Methodes
  public function setCoords($x,
 $y)
  {
    $this->_x = (int) $x;
    $this->_y = (int) $y;
  }
}
