<?php

class SearchEngineBis
{
    public function search($conditions =[])
    {


        $query = 'SELECT id FROM table';
 
      if(sizeof($conditions) > 0) {
        $query.=' WHERE '.implode(' AND ',$conditions);
      }
 
      // Exécution de la requête SQL avec une classe PDO
      $result = SPDO::getInstance()->query($query);
      $return = $result->fetchAll(PDO::FETCH_ASSOC);    
      return $return;
    }


}