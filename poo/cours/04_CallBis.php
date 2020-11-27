<?php
include_once './01_classes/ManchotBis.php';
include_once './01_classes/SearchEngineBis.php';

/*$george = new ManchotBis();
$george->langage('PHP'); */


$mySearchEngine = new SearchEngineBis();
$mySearchEngine->search(array(
  'champ1' => 'apprendre la programmation',
  'champ2' => 'c57.fr'
));

