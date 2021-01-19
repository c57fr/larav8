<?php

/*
 * Ce fichier est la propriété de larav8 (c) 2020
 */

class Singleton
{
  protected static $_instance = null;

  public function __clone()
  {
    throw new Exception('Are you Trying to clone me ? I\'m a Singleton,
 dude !');
  }

  public static function getInstance()
  {
    if (null === self::$_instance) {
      self::$_instance = new self();
    }

    return self::$_instance;
  }
}
