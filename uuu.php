<?php

/*
 * Ce fichier est la propriété de larav8 (c) 2020
 */

namespace Codecademy;

$my_car = [
  'oil'         => 'black and clumpy',
  'brakes'      => 'new',
  'tires'       => 'old with worn treads',
  'filth'       => 'bird droppings',
  'wiper fluid' => 'full',
  'headlights'  => 'bright',
];
echo '<pre>';
print_r($my_car);
echo '</pre>Modif:';

// Write your code below:
$my_car['oil']   = 'new and premium';
$my_car['tires'] = 'new with deep treads';
unset($my_car['filth']);
echo '<pre>';
print_r($my_car);
echo '</pre>ok';
