<?php
class Jeruk implements Buah{
    private $warna;

    public function caraMakan(){
        return "Dikupas dulu baru dimakan";
    }

    public function setWarna($warna){
        $this->warna = $warna;
    }
}