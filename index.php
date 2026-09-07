<?php
$test = true;
$test = false;
$test = true && true; // Vähemalt 1 false = false
$test = true || false; // Vähemalt 1 true = true
$test = !false; // Pöörab väärtuse vastupidi

// Kas vastab tõele?
$test = 10 > 5;
$test = 10 < 5;
$test = 10 < 10;

$test = 10 == 10; // Võrdne väärtus
$test = 10 === 10; // Võrdne väärtus + tüüp
$test = 10 == '10';
$test = 10 === '10';
$test = 10 != 5; // Ei ole võrdne (nagu ==)
$test = 10 !== 5; // Ei ole võrdne (nagu ===)

$test = 10 >= 10; // Suurem või võrdne
$test = 10 <= 10; // Väiksem või võrdne

$test = true && false || (true && !true); // Tehe, kasutatakse sisselogimise kontrollimisel
var_dump($test);
?>