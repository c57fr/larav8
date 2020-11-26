<?php
abstract class EtreHumain
{
    protected $_sexe;

    protected $_nom;

    // Met à jour le nom
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    // Retourne le nom de la personne
    public function getNom()
    {
        return $this->nom;
    }

    // Retourne le sexe de la personne
    public function getSexe()
    {
        return $this->sexe;
    }
}