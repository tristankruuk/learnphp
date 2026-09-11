<?php

class Box {
    public static $count = 0;

    public function __construct(private $w, private $h, private $l) {
        self::$count++;
    }

    public function volume() {
        return $this->w *  $this->h * $this->l;
    }

    // self::class kirjutab välja klassi nime, kus kood on
    // static::class  kirjutab välja klassi nime, kus ta välja kutsutakse
    public static function me() {
        var_dump(self::class);
        var_dump(static::class);
        var_dump($this->w); // Muutuja ei tööta staatilises funktsioonis
    }
}



class MetalBox extends Box {

}



// Staatiline väärtus on nagu klassi muutuja.
// Seda ei määrata igale objektile, vaid tervele klassile, kus võib olla palju objekte

// $box1::$count = 1;
// $box2::$count = 2;

Box::$count = 1;
Box::$count = 2;
Box::me();
MetalBox::me(); // Kuna see osa koodist on päritud Box-ist, siis self vaatab et ta klass on Box

var_dump(Box::$count, Box::$count);
// var_dump($box1::$count, $box2::$count);

?>