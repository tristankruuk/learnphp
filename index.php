<?php
$test = 10 + 2;
$test = 10 - 2;
$test = 10 * 2;
$test = 10 / 2;

$test = $test - 1;

// Samad, aga ei pea välja kirjutama, et x=x-1, vaid kohe võetakse väärtusest maha
$test -= 1;
$test += 1;
$test *= 2;
$test /= 2;

$test = 10 % 3; // Jääk
$test++; // Suurendab ühe võrra
$test--; // Vähendab ühe võrra
$test = (10 + (2 - 3) * 4) / 2;
$test %= 2; // Muutuja jääk
$test **= 3; // Muutuja astendamine
$test = 2 ** 4; // Astendamine
$test = sqrt(16); // Ruutjuur
var_dump($test);
?>