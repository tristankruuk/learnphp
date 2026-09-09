<?php

class Box {
    public $width;
    public $height;
    public $length;
    public $isOpen = false;
    public $hasBeenOpen = false;

    // Kuna $this'il on juba dollarimärk, siis isOpenil ei pea uuesti olema
    public function open() {
        $this->isOpen = true;
        $this->hasBeenOpened = true;
    }
    public function close() {
        $this->isOpen = false;
    }
     public function volume() {
        return $this->height * $this->length * $this->width;
    }
}



/*
ILMA POINTERITA
       x ---võtab väärtused---> y
Oma väärtustega          Oma väärtustega


POINTERIGA
       x <---vaatab väärtuseid--- y
Oma väärtustega          Vaatab x'i väärtuseid
*/

$num1 = 1;
$num2 = &$num1; // & on pointer. See ei võta väärtust enda objektile, vaid lisab viite väärtusele.
$num1 = 2;
var_dump($num1, $num2);

$box1 = new Box();
$box1->width = 1;
$box2 = clone $box1; // Clone ei lisa viidet, vaid loob täiesti uue objekti, millel on samad väärtused
$box2->width = 2;
var_dump($box1, $box2)

?>