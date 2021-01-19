<?php

/*
 * Ce fichier est la propriété de larav8 (c) 2020
 */

class Call
{
  public function __call($method,
 $arguments)
  {
    echo 'Vous avez appelé la methode <strong>'.$method.'</strong> avec les arguments: <strong>'.implode(',
 ',
 $arguments).'</strong>.<br>';
  }
}
