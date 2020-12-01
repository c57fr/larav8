<?php


//include_once './classes/Exception.php';


//$e = new Exception("Une errer s4est produite");


$password = 'Toto';
  if('Emacs' !== $password) {
    throw new Exception('Votre password est incorrect !');
  }

  echo 'Bonjour Emacs';
