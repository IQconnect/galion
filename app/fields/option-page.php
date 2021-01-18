<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$option_page = new FieldsBuilder('option_page');

$option_page
    ->setLocation('options_page', '==', 'acf-options-ustawienia-szablonu');

$option_page
    ->addTab('Kontakt', ['placement' => 'left'])
        ->addText('firm', ['label' => 'Nazwa firmy'])
        ->addText('name', ['label' => 'Właściciel firmy'])
        // ->addTextarea('address', ['label' => 'Adres firmy', 'rows' => '2', 'new_lines' => 'br'])
        ->addText('phone', ['label' => 'Telefon firmowy'])
        ->addText('email', ['label' => 'Email firmowy'])
        ->addText('facebook', ['label' => 'Facebook'])
        ->addText('linkedin', ['label' => 'LinkedIn'])
        ->addText('cprefix', ['label' => 'Prefix kontaktu', 'wrapper' => ['width' => 50]])
        ->addTextarea('ctitle', ['rows' => 2, 'new_lines' => 'br', 'label' => 'Tytuł kontaktu', 'wrapper' => ['width' => 50]])
        ->addTextarea('cdesc', ['rows' => 4, 'new_lines' => 'br', 'label' => 'Opis kontaktu'])
        ->addTextarea('check', ['rows' => 4, 'new_lines' => 'br', 'label' => 'Polityka prywatności (formularz)'])
        ->addLink('cbutton', ['label' => 'Przyciski z kontaktem'])
    ->addTab('Header', ['placement' => 'left'])
        ->addImage('logo')
    ->addTab('Stopka', ['placement' => 'left'])
        ->addImage('logo2')
        ->addText('copyright')
        ->addRepeater('footernav', ['label' => 'nawigacja'])
            ->addLink('link')
        ->endRepeater()
    ->addTab('Cennik', ['placement' => 'left'])
        ->addText('prices_title', ['label' => 'Tytuł cennika'])
        ->addText('ptitle1', ['label' => 'Tytuł pakietu 1', 'wrapper' => ['width' => 50]])
        ->addTextarea('pdesc1', ['rows' => 3, 'new_lines' => 'br', 'label' => 'Opis Pakietu 1', 'wrapper' => ['width' => 50]])
        ->addText('ptitle2', ['label' => 'Tytuł pakietu 2', 'wrapper' => ['width' => 50]])
        ->addTextarea('pdesc2', ['rows' => 3, 'new_lines' => 'br', 'label' => 'Opis Pakietu 2', 'wrapper' => ['width' => 50]])
        ->addText('ptitle3', ['label' => 'Tytuł pakietu 3', 'wrapper' => ['width' => 50]])
        ->addTextarea('pdesc3', ['rows' => 3, 'new_lines' => 'br', 'label' => 'Opis Pakietu 3', 'wrapper' => ['width' => 50]])
        ->addRepeater('prices_body', ['label' => 'Tabelka z parametrami'])
            ->addText('title', ['label' => 'Tytuł'])
            ->addText('option1', ['label' => 'Pakiet 1'])
            ->addText('option2', ['label' => 'Pakiet 2'])
            ->addText('option3', ['label' => 'Pakiet 3'])
        ->endRepeater();

return $option_page;