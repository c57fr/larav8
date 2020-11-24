<?php

class SearchEngine
{
    public function search($conditions = array())
    {
        $query = 'SELECT id FROM table';
        if(sizeof($conditions) > 0){
            //$query.='WHERE '. implode('AND '.$conditions);
            $query.=' WHERE '.implode(' AND ',$conditions);
        }
    

        // Execution de la requete SQL avec une classe PDO
        $result = SPDO::getInstance()->query($query);
        //$result = SPDO::getInstance()->query($query);
        $return = $result->fetchAll(PDO::FETCH_ASSOC);
        return $return;
    }
}