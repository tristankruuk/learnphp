<?php

// Kui siia toppida void asemel null, siis peab olema null, mitte väärtuse puudumine
// Void = null / väärtuse puudumine
// Null = null
function hello(): void {
    var_dump('Hello');
}

$hi = hello();
var_dump($hi);
hello();
hello();

// $name='x', kus x on default väärtus, et ei tekiks errorit
function helloName($name='Nimetu') {
    var_dump("Hello, $name!");
}

helloName("Tristan");
helloName("Hans");

function helloNameAndAge($name, $age) {
    var_dump("Hello. $name! You are $age years olds.");
}

helloNameAndAge('Tristan', 18);

// Liiga vähe argumente

/*
helloNameAndAge('Tristan');
helloName();
*/

$test = function (){

};

var_dump($test);

// Kaardistab array
// Korrutab iga array muutuja ($n) iseendaga ($n)
$numbers = [1, 2, 3, 4, 5];
$squares = array_map(function ($n) {
    return $n * $n;
}, $numbers);

// Sama asja lühem versioon
$squares = array_map(fn ($n) => $n * $n, $numbers);

var_dump($numbers);
var_dump($squares);

function cube(int $a): int|string {
    if($a < 0) {
        return 'No negative!';
    } else {
        return $a * $a * $a;
    }
    var_dump('BLAAAAAAA xD');
}

// Kui if-ist edasi ei jõuta, siis lõppeb funktsioon niikuinii, seega võib else ära jätta:
/*function cube($a) {
    if($a < 0) {
        return 'No negative!';
    }
    return $a * $a * $a;
    var_dump('BLAAAAAAA xD');
}
*/

// Lihtne var_dump on üks võimalus returni kasutada
var_dump(cube(4));

// Returni üks kasututs on võimalus kasutada seda teises funktsioonis
$answer = cube(5);
$text = "Cube of 5 is $answer!";
echo $text;

?>