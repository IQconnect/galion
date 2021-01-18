<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$slider = new FieldsBuilder('slider', ['label' => 'Opinie']);

$slider
    ->addFields(get_field_partial('components.title'))
    ->addRepeater('slider', ['label' => 'Opinie', 'min' => 0, 'layout' => 'block'])
        ->addWysiwyg('opinion', ['label' => 'Opinia', 'media_upload' => 0])
        ->addText('author', ['label' => 'Autor'])
        ->addText('desc', ['label' => 'Stanowisko']);

return $slider;