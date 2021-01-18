<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$answers = new FieldsBuilder('answers', ['label' => 'Pytania']);

$answers
    ->addFields(get_field_partial('components.title'))
    ->addRepeater('questions', ['label' => 'Pytania', 'layout' => 'block'])
        ->addText('question', ['label' => 'Pytanie'])
        ->addLink('link', ['label' => 'Link']);

return $answers;