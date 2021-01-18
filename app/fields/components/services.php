<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$services = new FieldsBuilder('services', ['label' => 'Usługi']);

$services
    ->addFields(get_field_partial('components.title'))
    ->addTextarea('desc', ['rows' => 4, 'new_lines' => 'br', 'label' => 'Opis'])
    ->addLink('link', ['label' => 'Link do usług'])
    ->addRepeater('services', ['label' => 'Usługi', 'layout' => 'block'])
        ->addTextarea('title', ['rows' => 2, 'new_lines' => 'br', 'label' => 'Tytuł usługi'])
        ->addImage('image', ['label' => 'Tło usługi'])
        ->addLink('link', ['label' => 'Link do usługi']);

return $services;