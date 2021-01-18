<?php

namespace App;
use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 2,
    'wrapper' => ['width' => 30],
];


$boxes = new FieldsBuilder('boxes');

$boxes
    ->setLocation('block', '==', 'acf/boxes');

$boxes
    ->addRepeater('boxes', ['label' => 'Boxy', 'layout' => 'block'])
        ->addText('title')
        ->addWysiwyg('desc');

return $boxes;