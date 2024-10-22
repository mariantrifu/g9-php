<?php

declare(strict_types=0);

function showMessage()
{
    echo 'message';
}

function returnMessage()
{
    return 'message returned';
}

showMessage();

echo '<br/>';

$message2 = returnMessage();
var_dump($message2);

function showName($name = 'Madalin')
{
    echo 'My name is: ' . $name;
}

echo '<br/>';
showName('Marian');
echo '<br/>';
showName('Alex');
echo '<br/>';
showName();

function addNumbers(int $a=2, int $b, int $c = 5): int
{
    return $a + $b;
}

echo '<br/>';
echo addNumbers(1, 1);
echo addNumbers(1, '5');

echo addNumbers(2);
echo addNumbers(b: 2);