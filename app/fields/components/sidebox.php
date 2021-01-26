<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$sidebox = new FieldsBuilder('sidebox', ['label' => 'Panel boczny']);

$sidebox
    ->addText('title', ['label' => 'Tytuł', 'wrapper' => ['width' => 50]])
    ->addTrueFalse('email', ['label'=>'Rezerwacja email', 'default_value' => 0, 'wrapper' => ['width' => 20]])
    ->addTrueFalse('phone', ['label'=>'Zadzwoń', 'default_value' => 0, 'wrapper' => ['width' => 20]])
    ->addWysiwyg('content', ['label' => 'Opis']);

return $sidebox;