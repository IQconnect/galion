<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$default = new FieldsBuilder('default');

$default
    ->setLocation('post_template', '==', 'default');

$default
    ->addTab('Hero', ['placement' => 'left'])
        ->addGroup('hero')
            ->addTrueFalse('show_hero', ['label'=>'Wyświetl Hero', 'default_value' => 0])
            ->addFields(get_field_partial('components.hero'))
        ->endGroup('hero');

return $default;