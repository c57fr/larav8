<?php
class Kid{

    //Attributs
    private $age;

    // Methodes magiques __get()
    public function __get($property)
    {
        if('age' === $property)
        {
            return $this->age;
        }else{
            throw new Exception ('Propriete invalide !');
        }
    }

    // Methodes magiques __set()
    public function __set($property, $value)
    {
        if('age' === $property && ctype_digit($value))
        {
            $this->age = (int) $value;
        }else{
            throw new Exception('Propriete ou valeur invalide');
        }
    }

}