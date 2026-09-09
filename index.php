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


$box1 = new Box();
$box1->width = 10;
$box1->height = 20;
$box1->length = 30;
$box1->open();
var_dump($box1);
var_dump($box1->volume());

$box2 = new Box();
$box2->width = 30;
$box2->height = 40;
$box2->length = 50;
var_dump($box2);
var_dump($box2->volume());
var_dump($box1);
?>