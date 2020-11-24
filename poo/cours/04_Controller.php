<?php

include_once './01_classes/Manchot.php';
include_once './01_classes/SearchEngine.php';

/*$george = new Manchot();
echo $george->voler('Afriaue'); */

$mySearchEngine = new SearchEngine();
$mySearchEngine->search(array(
    'champ1' => 'apprendre-php',
    'champ2' => 'palleas'
));