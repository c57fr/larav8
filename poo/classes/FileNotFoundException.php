<?php
include_once 'Exception.php';
// Fichier FileException.class.php

class FileException extends Exception
{
    protected $timestamp;

    public function __construct($message=NULL,
 $code=0)
    {
        parent::__construct($message,
 $code);
        $this->timestamp=time();
    }
    public function getTimestamp()
    {
        return $this->timestamp;
    }
}

//  Fichier FileNotFoundException.class.php
class FileNotFoundException extends Exception
{

    public function __construct($message=NULL,
 $code=0)
    {
        parent::__construct($message,
 $code);
        $this->timestamp = time();
    }

    public function getTimestamp()
    {
        return $this->timestamp;
    }
}


//  Fichier FileNotWriteableException.class.php
class FileNotWriteableException extends exception 
{

    public function __construct($message=NULL,
 $code=0)
    {
        parent::__construct($message,
 $code);
        $this->timestamp = time();
    }

    public function getTimestamp()
    {
        return $this->getTimestamp;
    }
}