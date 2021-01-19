<?php

class SearchEngineBis
{
    public function search($conditions =[])
    {


        $query = 'SELECT id FROM table';
 
      if(sizeof($conditions) > 0) {
        $query.=' WHERE '.implode(' AND ',
$conditions);
      }
 
      // Exécution de la requête SQL avec une classe PDO
      $result = SPDO::getInstance()->query($query);
      $return = $result->fetchAll(PDO::FETCH_ASSOC);    
      return $return;
    }

    public function __call($method,
 $args)
    {
      if(preg_match('#^searchby#i',
 $method))
      {
        $searchConditions = srt_replace('searchBy',
 '',
 $method);
        $searchCriterias = explode('and',
 $searchConditions);
        $conditions      = array();
        $nbCriterias     = sizeof($searchCriterias);

        for ($i = 0; $i < $nbCriterias; $i++)
        {
          $conditions[] = strtolower($searchCriterias[$i]).'="'.$args[$i] .'"';
        }
        return $this->search($conditions);
      }
    }

}