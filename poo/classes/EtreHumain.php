<?php

/*
 * Ce fichier est la propriété de larav8 (c) 2020
 */

abstract class EtreHumain
{
  protected $_sexe;

  protected $_nom;

  // La personne fait du sport
  abstract public function faireDuSport();

  // Divertit la personne
  abstract public function seDivertir();

  // Met à jour le nom
  final public function setNom($nom)
  {
    $this->nom = $nom;
  }

  // Retourne le nom de la personne
  final public function getNom()
  {
    return $this->nom;
  }

  // Retourne le sexe de la personne
  public function getSexe()
  {
    return $this->sexe;
  }
}
