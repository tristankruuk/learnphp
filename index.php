<?php
$test = 10; // Integer
$test = 3.1; // Float
$test = "Hello World"; // String
$test = "õpilane";
$test = "👨"; // 4
$test = "👨🏿"; // 8
$test = true; // Boolean
$test = null; // Väärtuse puudmine (NULL)
$lol; // Annab warningu (Undefined)
var_dump($test);
var_dump($lol);
$test = [1, 2, "three", true]; // Array ehk nimekiri
var_dump($test);
$test = new stdClass(); // Objektiga saab lisada omadusi
$test->name = "John";
var_dump($test);

$num1 = 1000000000;
$num2 = "1000000000";
var_dump($num1 == $num2); // Kas väärtused on võrdsed?
var_dump($num1 === $num2); // Kas väärtused + tüübid on võrdsed?
?>