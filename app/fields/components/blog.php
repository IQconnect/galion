<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$blog = new FieldsBuilder('blog', ['label' => 'Blog']);

$blog
    ->addFields(get_field_partial('components.title'));

return $blog;