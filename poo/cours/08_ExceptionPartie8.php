<?php


//include_once './classes/Exception.php';


//$e = new Exception("Une errer s4est produite");


/*$password = 'Toto';
  if('Emacs' !== $password) {
    throw new Exception('Votre password est incorrect !');
  }

  echo 'Bonjour Emacs';*/

  try{
    $password = 'Toto';

    if('Emacs' !== $password){
      throw New Exception('Votre password est incorrect !');
    }

    echo 'Bonjour Emacs';
  }
  catch(Exception $e)
  {
    echo "L'erreur suivante a été générée : ". "\n";
    echo $e->getMessage();
  }
