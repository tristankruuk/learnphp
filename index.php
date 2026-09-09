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
}
?>