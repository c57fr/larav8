<?php
class Exception
{
    protected $message = 'exception inconnue';  // message de l'exception
    protected $code    = 0;                     // code de l'exception défini par l'utilisateur
    protected $file;                            // nom du fichier source de l'exception
    protected $line;                            // ligne de la source de l'exception


    function __construct(string $message=NULL, int $code=0);
 
    final function getMessage();              // message de l'exception
    final function getCode();                 // code de l'exception
    final function getFile();                 // nom du fichier source
    final function getLine();                 // ligne du fichier source
    final function getTrace();                // un tableau de backtrace()
    final function getTraceAsString();        // chaîne formattée de trace

    function __toString();                    // chaîne formatée pour l'affichage
}