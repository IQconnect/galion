<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$text_img = new FieldsBuilder('text-img', ['label' => 'Zdjęcia z tekstem']);

$text_img
  ->addRepeater('textimg', ['min' => 1, 'layout' => 'block', 'label' => 'Zdjęcia i tekst'])
      ->addText('title', ['label' => 'Tytuł'])
      ->addText('subtitle', ['label' => 'Nagłówek'])
      ->addTextarea('desc', ['rows' => 4, 'new_lines' => 'br', 'label' => 'Opis'])
      ->addImage('image', ['label' => 'Zdjęcie'])
      ->addLink('link', ['label' => 'Link'])
      ->addRepeater('files', ['layout' => 'block', 'label' => 'Załączniki'])
        ->addText('name', ['label' => 'Tytuł', 'wrapper' => ['width' => 30]])
        ->addFile('file', ['label' => 'Załącznik', 'wrapper' => ['width' => 70]]);

return $text_img;