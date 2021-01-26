<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$page = new FieldsBuilder('page');

$page
    ->setLocation('post_template', '==', 'views/template-custom.blade.php');

$page
    ->addFields(get_field_partial('partials.builder'))
    ->addTab('Hero', ['placement' => 'left'])
        ->addGroup('hero')
            ->addTrueFalse('show_hero', ['label'=>'Wyświetl Hero', 'default_value' => 0])
            ->addFields(get_field_partial('components.hero'))
        ->endGroup('hero')
    ->addTab('Sidebox', ['placement' => 'left'])
        ->addGroup('sidebox')
            ->addTrueFalse('show_sidebox', ['label'=>'Wyświetl Sidebox', 'default_value' => 0])
        ->endGroup('sidebox');

return $page;