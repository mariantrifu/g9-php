<?php

$file = fopen("persons.csv", "r");

$persons = [];
$columns = fgetcsv($file);
while ($person = fgetcsv($file)) {
    foreach ($person as $key => $value) {
        $person[$columns[$key]] = $value;
        unset($person[$key]);
    }
    $persons[] = $person;
//    foreach ($data as $key => $value) {
//        $person[$columns[$key]] = $value;
//        $persons[] = $person; // trebuia in afara foreach :-)
//    }
}

//TODO: de facut functie codul de mai sus si de folosit in reports.php

echo '<pre>';
print_r($persons);