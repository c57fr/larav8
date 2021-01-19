<?php
include_once './classes/FileNotFoundException.php';
//include_once './classes/Exception.php';


  // Import des 3 classes précédentes
  require_once(dirname(__FILE__).'/FileException.class.php');
  require_once(dirname(__FILE__).'/FileNotFoundException.class.php');
  require_once(dirname(__FILE__).'/FileNotWriteableException.class.php');


  // Variable
  $fichier = '/var/www/projet/toto.txt';

  try
  {
    // Le fichier existe-t-il ?
    if(!file_exists($fichier))
    {
        throw new FileNotFoundException('Le fichier '. $fichier . 'est inexistant');
    }

    // Le fichier est-il inscriptible ?
    if(!is_writable($fichier))
    {
        throw new FileNotWriteableException('Le fichier '. $fichier .' n\'a pas les droits d\'écriture');   
    }

    // A-t-on ouvert le fichier en mode écriture ?
    if(!($fp = @fopen($fichier,
 'w')))
    {
        throw new FileException('L\'ouverture du fichier '. $fichier .' a échoué');
    }

    //  J'écris dans mon fichier
    fwrite($fp,
 "Coucou Emacs\n");

    // Puis je ferme mon fichier
    fclose($fp);
  }
  catch(FileNotFoundException $e)
  {
     // Je crée le fichier 
  }
  catch(FileNotWriteableException $e)
  {
    // Je change les droits du fichier
  }
  catch(FileException $e)
  {
    // Je stoppe tout
    exit($e->getMessage());
  }
  catch(Exception $e)
  {
    // Je stoppe tout
    exit($e->getMessage());
  }

      /**
   * Fonction de rappel appellée automatiquement par l'exception handler
   *
   * @param Exception $e une exception lancée et perdue dans le programme
   * @return void
   */

  function traitementExceptionPerdue(Exception $e) {
 
    echo 'Une exception orpheline a été attrapée : ';
    echo $e->getMessage(),
 "\n";
    exit;
  }
/**
* Enregistrement de la fonction de rappel dans l'exception handler de PHP
*/
set_exception_handler('traitementExceptionPerdue');

// Exemple de génération d'exception perdu
$password = 'Toto';
if('Emacs' !== $password) {
  throw new Exception('Votre password est incorrect !');
}
echo 'Bonjour Emacs'; 