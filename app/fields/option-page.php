<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$option_page = new FieldsBuilder('option_page');

$option_page
    ->setLocation('options_page', '==', 'acf-options-ustawienia-szablonu');

$option_page
    ->addTab('Header', ['placement' => 'left'])
        ->addImage('logo')
    ->addTab('Kontakt', ['placement' => 'left'])
        ->addText('name', ['label' => 'Nazwa'])
        ->addText('desc', ['label' => 'Opis'])
        ->addTextarea('address', ['label' => 'Adres firmy', 'rows' => '2', 'new_lines' => 'br'])
        ->addText('phone', ['label' => 'Telefon'])
        ->addText('phone2', ['label' => 'Telefon 2'])
        ->addText('email', ['label' => 'Email'])
        ->addText('facebook', ['label' => 'Facebook'])
        ->addText('instagram', ['label' => 'Instagram'])
    ->addTab('Newsletter', ['placement' => 'left'])
        ->addText('newsletter_title', ['label' => 'Tytuł'])
        ->addTextarea('newsletter_desc', ['label' => 'Opis', 'rows' => '2', 'new_lines' => 'br'])
        ->addImage('newsletter_bg', ['label' => 'Tło'])
    ->addTab('Stopka', ['placement' => 'left'])
        ->addImage('logo2')
        ->addText('copyright')
        ->addRepeater('footernav', ['label' => 'nawigacja'])
            ->addLink('link')
        ->endRepeater();

return $option_page;