<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$chart = new FieldsBuilder('chart', ['label' => 'Wykres']);

$chart
    ->addFields(get_field_partial('components.title'))
    ->addRepeater('chart', ['label' => 'Usługi', 'layout' => 'block'])
        ->addText('title', ['label' => 'Tytuł'])
        ->addText('precent', ['label' => 'Procent']);

return $chart;