<?php

/*
 * Ce fichier est la propriété de larav8 (c) 2020
 */

class Dormeur
{
  public $_gouts;

  protected $_age;

  protected $_aSonBonnet;

  private $_couleurPreferee;

  public function __construct()
  {
    $this->_age             = 19;
    $this->_aSonBonnet      = true;
    $this->_couleurPreferee = 'rouge';
    $this->_gouts           = ['musique',
 'cinéma',
 'curling'];
  }

  public function __sleep()
  {
    echo 'Bon ben moi,
 je vais dormir.';

    return ['_age',
 '_aSonBonnet',
 '_couleurPreferee'];
  }

  public function __wakeup()
  {
    echo 'bon ben moi,
 je vais me faire un café.';
  }
}
