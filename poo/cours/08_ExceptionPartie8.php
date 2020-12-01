<?php


include_once '../classes/Exception.php';


$e = new Exception("Une errer s4est produite");


$password = 'Toto';
  if('Emacs' !== $password) {
    throw new Exception('Votre password est incorrect !');
  }
 
  // Cette ligne ne sera jamais exécutée
  // car une exception est lancée pour interrompre
  // l'exécution normale du programme
  echo 'Bonjour Emacs';
