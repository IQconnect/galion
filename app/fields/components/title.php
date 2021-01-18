<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$title = new FieldsBuilder('title', ['label' => 'Tytuł']);

$title
    ->addText('prefix', ['label' => 'Prefix sekcji', 'wrapper' => ['width' => 50]])
    ->addTextarea('title', ['rows' => 2, 'new_lines' => 'br', 'label' => 'Tytuł sekcji', 'wrapper' => ['width' => 50]]);

return $title;