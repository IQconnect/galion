<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$hero = new FieldsBuilder('hero', ['label' => 'Hero']);

$hero
    ->addFile('bg', ['label' => 'Tło', 'wrapper' => ['width' => 50]])
    ->addRadio('type', ['choices' => ['video' => 'filmik', 'image' => 'zdjęcie'], 'default_value' => 'video', 'label' => 'Typ', 'wrapper' => ['width' => 50]])
    ->addText('title', ['label' => 'Tytuł (opcjonalny)'])
    ->addTrueFalse('reservation', ['label'=>'Wyświetl rezerwacje', 'default_value' => 0, 'wrapper' => ['width' => 20]])
    ->addTrueFalse('small', ['label'=>'Małe hero', 'default_value' => 0, 'wrapper' => ['width' => 20]]);

return $hero;