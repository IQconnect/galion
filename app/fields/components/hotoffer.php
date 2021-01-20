<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$hotoffer = new FieldsBuilder('hotoffer', ['label' => 'Gorące oferty']);

$hotoffer
  ->addText('title', ['label' => 'Tytuł', 'wrapper' => ['width' => 50]])
  ->addTextarea('desc', ['rows' => 4, 'new_lines' => 'br', 'label' => 'Opis'])
  ->addLink('link', ['label' => 'Link'])
  ->addImage('image', ['label' => 'Zdjęcie'])
  ->addRepeater('offers', ['min' => 3, 'layout' => 'block', 'label' => 'Oferty'])
    ->addText('title', ['label' => 'Tytuł'])
    ->addImage('image', ['label' => 'Zdjęcie'])
    ->addLink('link', ['label' => 'Link']);

return $hotoffer;