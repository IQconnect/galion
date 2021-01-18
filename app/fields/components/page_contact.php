<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$page_contact = new FieldsBuilder('page-contact', ['label' => 'Strona - kontakt']);


return $page_contact;