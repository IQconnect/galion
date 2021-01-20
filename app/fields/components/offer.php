<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$offer = new FieldsBuilder('offer', ['label' => 'Oferty']);

$offer
  ->addText('title', ['label' => 'Tytuł', 'wrapper' => ['width' => 50]])
  ->addText('subtitle', ['label' => 'Podtytuł', 'wrapper' => ['width' => 50]])
  ->addTextarea('desc', ['rows' => 4, 'new_lines' => 'br', 'label' => 'Opis'])
  ->addImage('bg', ['label' => 'Tło'])
  ->addRepeater('offers', ['min' => 3, 'layout' => 'block', 'label' => 'Oferty'])
      ->addText('title', ['label' => 'Tytuł'])
      ->addImage('image', ['label' => 'Zdjęcie'])
      ->addLink('link', ['label' => 'Link']);

return $offer;