<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$video = new FieldsBuilder('video', ['label' => 'Video']);

$video
    ->addImage('image', ['label' => 'Tło'])
    ->addTextarea('desc', ['rows' => 4, 'new_lines' => 'br', 'label' => 'Opis'])
    ->addLink('link', ['label' => 'Link']);

return $video;