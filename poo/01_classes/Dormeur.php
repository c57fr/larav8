<?php
class Dormeur {
 
    protected $_age;
   
    protected $_aSonBonnet;
   
    private $_couleurPreferee;
   
    public $_gouts;
   

    public function __construct() 
    {
      $this->_age = 19;
      $this->_aSonBonnet = true;
      $this->_couleurPreferee = 'rouge';
      $this->_gouts = array('musique','cinéma','curling');
    }

    public function __sleep() 
    {
        echo 'Bon ben moi, je vais dormir.';
        return array('_age','_aSonBonnet','_couleurPreferee');
    }

    public function __wakeup() 
    {
        echo 'bon ben moi, je vais me faire un café.';
    }

  }