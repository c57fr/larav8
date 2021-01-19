<?php

/*
 * Ce fichier est la propriété de larav8 (c) 2020
 */

class Kid
{
  //Attributs
  private $age;

  // Methodes magiques __get()
  public function __get($property)
  {
    if ('age' === $property) {
      return $this->age;
    }

    throw new Exception('Propriété invalide !');
  }

  // Methodes magiques __set()
  public function __set($property,
 $value)
  {
    if ('age' === $property && is_numeric($value)) {
      $this->age = (int) $value;
    } else {
      throw new Exception('Propriété ou valeur invalide: '.$property);
    }
  }
}
