<?php
class Apel implements Buah{
    private $warna;
    // implement method 1
    public function caraMakan(){
        return "Dimakan semua kecuali tengahnya";
    }

    // implemtn method 2
    public function setWarna($warna){
        $this->warna = $warna;
    }
}