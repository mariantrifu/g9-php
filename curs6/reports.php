<?php

require_once 'export_to_csv.php';

$persons = [
    [
        'first_name' => 'Marian',
        'last_name'  => 'Jones',
        'phone'      => '087273484',
        'email'      => 'marijones@gmail.com',
    ],
    [
        'first_name' => 'Alex',
        'last_name'  => 'Mares',
        'phone'      => '087273484',
        'email'      => 'marimares@gmail.com',
    ],
    [
        'first_name' => 'Andrei',
        'last_name'  => 'Vasile',
        'phone'      => '087273484',
        'email'      => 'andreivasile@gmail.com',
    ],
];

exportToCSV($persons, 'persons.csv', 'w+');