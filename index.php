<?php

/*
PUBLIC, PRIVATE, PROTECTED

    Public on avalik. Kõikidel objektidel on ligippäs väärtustele.
    Private peidab väärtuse ära. MetalBox teab väärtuse olemasolust, kuid ei tea selle väärtust.
    Protected peidab muutuja ära. MetalBox ei saa väärtusele ega muutujale ligi.

*Kuna väärtused on Box objekti sees, siis Box teab KÕIKI neid väärtuseid, kuid teistel objektidel võib olla ligipääs limiteeritud
*/

class Box {
    public $width;
    private $height;
    protected $length;
    public bool $isOpen = false; // Bool ehk lühend booleanist. Kontrollib kas väärtus on true/false
    public bool $hasBeenOpen = false;

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

    // Kontrollib, et pikkuse mõõduks ei sisestataks negatiivset väärtust
    public function setHeight($height) {
        if($height > 0) {
            $this->height = $height;
        }
        echo("ERROR: Height can't be negative");
    }

    public function getHeight() {
        return $this->height;
    }
}

// x extends y
// extends võtab samad väärtused mis y ning loob uue objekti x
class MetalBox extends Box {
    public $weight;

    public function mass(){
        return $this->volume() * $this->weight;
    }
}

$metal1 = new MetalBox();
$metal1->width = 1; // Public
$metal1->height = 1; // Private
$metal1->length = 1; // Protected
var_dump($metal1);

?>