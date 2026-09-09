<?php

/*
TRAIT

    Kui inheritance võimaldab baasile lisada veel muutujaid, siis traite saab suvaliselt objektidele külge loopida
*/

class Cat {
    use MakesSound;
}

class Dog {
    use HasSmell, MakesSound;
}

trait HasSmell {
    public $smell;
    public function sniff() {
        return 'Smells like ' . $this->smell; 
    }
}

trait MakesSound {
    public $sound;
    public function sniff() {
        return $this->sound; 
    }
}

?>