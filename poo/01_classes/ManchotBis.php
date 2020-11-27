<?php
class ManchotBis
{
    private function __call($method, $arguments)
    {
        echo 'Vous avez appelé la methode ' .$method. ' avec les arguments : '. implode(', ' , $arguments);
    }
}