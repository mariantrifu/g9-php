<?php

require_once 'Apple.php';

$apple = new Apple('apple1', 'red', 'round', 1990);
var_dump($apple);

echo '<br>';
echo $apple->fall();
echo '<br>';
echo $apple->location();