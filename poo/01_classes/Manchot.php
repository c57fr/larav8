<?php

/*
 * Ce fichier est la propriété de larav8 (c) 2020
 */

class Manchot
{
  // Methodes
  public function __call($method, $arguments)
  {
    echo 'Vous avez appele la methode '.$method.'avec les arguments : '.implode(', ', $arguments);
  }
}
