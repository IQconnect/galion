<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$prices = new FieldsBuilder('prices', ['label' => 'Cennik']);

$prices
    ->addFields(get_field_partial('components.title'))
    ->addWysiwyg('text', ['label' => 'Tekst', 'media_upload' => 0])
    ->addRepeater('options', ['label' => 'Opcje', 'layout' => 'block'])
        ->addText('prefix', ['label' => 'Prefix', 'wrapper' => ['width' => 50]])
        ->addText('title', ['label' => 'Tytuł', 'wrapper' => ['width' => 50]])
        ->addWysiwyg('text', ['label' => 'Tekst', 'media_upload' => 0])
        ->addLink('link', ['label' => 'Link'])
    ->endRepeater()
    ->addWysiwyg('info', ['label' => 'Dodatkowy tekst', 'media_upload' => 0]);

return $prices;