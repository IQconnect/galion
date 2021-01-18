<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$hero = new FieldsBuilder('hero', ['label' => 'hero']);

$hero
    ->addFile('bg', ['label' => 'Tło'])
    ->addText('header', ['label' => 'Tytuł'])
    ->addTextarea('desc', ['rows' => 4, 'new_lines' => 'br', 'label' => 'Opis']);

return $hero;