<?php

class Manchot
{
    // Methodes
    private function __call($method, $arguments)
    {
        echo 'Vous avez appele la methode '. $method. 'avec les arguments : ' . implode(', ', $arguments);
    }
}