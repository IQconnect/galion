<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$main = new FieldsBuilder('main', ['position' => 'side', 'title' => 'Ustawienia']);

$main
    ->setLocation('post_type', '==', 'all');

$main
    ->addTrueFalse('show_form', ['label'=>'Wyświetl formularz', 'default_value' => 0]);

return $main;