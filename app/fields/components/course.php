<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$course = new FieldsBuilder('course', ['label' => 'Kurs na biznes']);

$course
  ->addText('title', ['label' => 'Tytuł', 'wrapper' => ['width' => 50]])
  ->addRepeater('offers', ['layout' => 'block', 'label' => 'Oferty'])
    ->addText('title', ['label' => 'Tytuł', 'wrapper' => ['width' => 50]])
    ->addTextarea('desc', ['rows' => 4, 'new_lines' => 'br', 'label' => 'Opis'])
    ->addImage('image', ['label' => 'Zdjęcie'])
    ->addGallery('gallery', ['min' => 3, 'max' => 3, 'label' => 'Galeria']);

return $course;