<?php

/*
 * Ce fichier est la propriété de larav8 (c) 2020
 */

class SearchEngine
{
  public function search($conditions = [])
  {
    $query = 'SELECT id FROM table';
    if (count($conditions) > 0) {
      //$query.='WHERE '. implode('AND '.$conditions);
      $query .= ' WHERE '.implode(' AND ', $conditions);
    }

    // Execution de la requete SQL avec une classe PDO
    $result = PDO::query($query);
    //$result = SPDO::getInstance()->query($query);
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

  public function __call($method, $args)
  {
    if(preg_match('#^searchBy#i', $method))
    {
      $searchConditions = str_replace('searchBy', '', $method);
      $searchCriterias = explode('and', $searchConditions);
      $conditions = array();
      $nbCriterias = sizeof($searchCriterias);

      for($i = 0; $i < $nbCriterias; $i++)
      {
        $conditions[] = strtolower($searchCriterias[$i]). '="'.$args[$i] . '"';
      }
      return null;
    }
  }

}
