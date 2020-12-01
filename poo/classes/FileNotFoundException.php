<?php

//  Fichier FileNotFoundException.class.php
class FileNotFoundException extends Exception
{
    protected $timestamp;

    public function __construct($message=NULL, $code=0)
    {
        parent::__construct($message, $code);
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
    protected $timestamp;

    public function __construct($message=NULL, $code=0)
    {
        parent::__construct($message, $code);
        $this->timestamp = time();
    }

    public function getTimestamp()
    {
        return $this->getTimestamp;
    }
}