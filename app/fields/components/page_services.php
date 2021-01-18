<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$page_services = new FieldsBuilder('page-services', ['label' => 'Strona - Usługi']);

$page_services
    ->addFields(get_field_partial('components.title'))
    ->addTextarea('desc', ['rows' => 4, 'new_lines' => 'br', 'label' => 'Opis'])
    ->addRepeater('services', ['label' => 'Usługi', 'layout' => 'block'])
        ->addTextarea('title', ['rows' => 2, 'new_lines' => 'br', 'label' => 'Tytuł usługi'])
        ->addTextarea('desc', ['rows' => 2, 'new_lines' => 'br', 'label' => 'Opis'])
        ->addImage('image', ['label' => 'Tło usługi'])
        ->addLink('link', ['label' => 'Link do usługi'])
    ->endRepeater()
    ->addText('title2', ['label' => 'Dodatkowe usługi', 'wrapper' => ['width' => 50]])
    ->addRepeater('services2', ['label' => 'Usługi', 'layout' => 'block'])
        ->addTextarea('title', ['rows' => 2, 'new_lines' => 'br', 'label' => 'Tytuł usługi'])
        ->addTextarea('desc', ['rows' => 2, 'new_lines' => 'br', 'label' => 'Opis'])
        ->addImage('image', ['label' => 'Tło usługi'])
        ->addLink('link', ['label' => 'Link do usługi']);

return $page_services;