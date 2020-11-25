<?php
class Dormeur {
 
    protected $_age;
   
    protected $_aSonBonnet;
   
    private $_couleurPreferee;
   
    public $_gouts;
   
    /**
     * Constructeur de la classe
     */
    public function __construct() {
      $this->_age = 19;
      $this->_aSonBonnet = true;
      $this->_couleurPreferee = 'rouge';
      $this->_gouts = array('musique','cinéma','curling');
    }
  }