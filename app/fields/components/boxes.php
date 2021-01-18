<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$boxes = new FieldsBuilder('boxes', ['label' => 'Boxy']);

$boxes
    ->addFields(get_field_partial('components.title'))
    ->addTextarea('desc', ['rows' => 4, 'new_lines' => 'br', 'label' => 'Opis'])
    ->addText('title2', ['label' => 'Tytuł boxów'])
    ->addRepeater('boxes', ['min' => 3, 'layout' => 'block'])
        ->addText('title', ['label' => 'Tytuł'])
        ->addLink('link', ['label' => 'Link']);

return $boxes;