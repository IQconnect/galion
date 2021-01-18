<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$stats = new FieldsBuilder('stats', ['label' => 'Statystyki']);

$stats
    ->addText('title', ['label' => 'Tytuł', 'wrapper' => ['width' => 30]])
    ->addText('subtitle', ['label' => 'Podtytuł', 'wrapper' => ['width' => 30]])
    ->addTextarea('desc', ['rows' => 4, 'new_lines' => 'br', 'label' => 'Opis'])
    ->addRepeater('stats', ['label' => 'Statystki', 'layout' => 'block'])
        ->addImage('icon', ['label' => 'Ikona'])
        ->addText('amount', ['label' => 'Ilość'])
        ->addText('title', ['label' => 'Tytuł']);

return $stats;