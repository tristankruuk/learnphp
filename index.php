<?php

class Box {
    private $w;
    private $h;
    private $l;

    // Spetsiaalne funktsiooni nimetus objekti loomiseks
    public function __construct($w, $h, $l) {
        $this->w = $w;
        $this->h = $h;
        $this->l = $l;
        var_dump('Leidsid ühe kasti!');
    }

/*
Täna ei pea kirjutama uuesti välja $this->x, y või z, vaid saab panna funktsiooni parameetritesse

    public function __construct(private $w, private $h, private $l) {
        var_dump('Box was created!');
    }
*/

    // Spetsiaalne funktsiooni nimetus ruumala arvutamiseks
    public function volume() {
        return $this->w * $this->h * $this->l;
    }



    // Lubab kutsuda objekti nagu funktsiooni. Kui objekt on $box1, siis saab olla $box1();
    public function __invoke()  {
        var_dump('Im a function');
    }



    public function __call($name, $args) {
        var_dump($name, $args);
    }

    public function __set($name, $value) {
        var_dump($name, $value);
    }

    public function __get($name) {
        var_dump($name);
        return 'YOLO';
    }



    // Spetsiaalne funktsiooni nimetus objekti muutmiseks tekstiks
    public function __tostring() {
        return "Ma olen kast, mis kasutab oma väärtuseid :) Siin on minu mõõdud: $this->w, $this->h, $this->l";
    }

    //Spetsiaalne funktsiooni nimetus objekti lammutamiseks
    public function __destruct() {
        var_dump('Kast läks katki!');
    }
}

function lol() {
    $box4 = new Box(4, 4, 5);
}

lol(); // Jooksutab funktsiooni. Tekib kast. Kasti ei kasutata. Kast kustutakse.



// __construct
$box1 = new Box(1, 2, 3); // __construct funktsioon toimib
$box2 = new Box(4, 5, 6); // Toimib ka, kuna objekt luuakse
$box3 = clone $box2; // Ei toimi, objekt on juba loodud, see on kloon



// Erinevad viisid kutsuda spetsiaalseid funktsioone
$box1->color = 'Hello';
$box1();
$box1->hello(1, asfadada, adasdas);
var_dump($box1->lolololol);
$box4 = $box1;
$box1 = 1;



var_dump($box1, $box2);
// echo $box1 objektiga viskab ette errori :)

echo $box1; // Kasutada koos __tostring funktsiooniga

?>