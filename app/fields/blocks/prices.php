<?php

namespace App;
use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 2,
    'wrapper' => ['width' => 30],
];


$prices = new FieldsBuilder('prices');

$prices
    ->setLocation('block', '==', 'acf/prices');

return $prices;