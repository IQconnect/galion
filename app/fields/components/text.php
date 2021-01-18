<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$text = new FieldsBuilder('text', ['label' => 'Text']);

$text
    ->addFields(get_field_partial('components.title'))
    ->addWysiwyg('text', ['label' => 'Treść', 'media_upload' => 0])
    ->addLink('link', ['label' => 'Link']);

return $text;