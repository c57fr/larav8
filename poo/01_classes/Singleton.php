<?php

class Singleton {
    
    protected static $_instance = null;

    protected function __construct() 
    {

    }

    public static function getInstance() 
    {
        if(null === self::$_instance) self::$_instance = new Singleton();
        return self::$_instance;
    }

    public function __clone() 
    {
        throw new Exception('Are you Trying to clone me ? I\'m a Singleton dude !');
    }
}