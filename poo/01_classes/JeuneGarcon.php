<?php
include_once 'homme.php';
class JeuneGarcon extends Homme
{
    // onstruit l'objet JeuneGarcon
    public function __construct($nom)
    {
        parent::__construct($nom);
    }
}