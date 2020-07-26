<?php
// Interface :
// - tidak bisa di instansiasi
// - abstract class yg tidak ada implementasinya
// - hanya berisi method publik yg tidk ada implemntasinya --> wajib di implementasi oleh turunan nya
// - tidak boleh memiliki property

interface Buah{ // deklarasi sebagai interface
    public function caraMakan(); // deklarasi sebagai method

    public function setWarna($warna);
}

// child class 1
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

class Jeruk implements Buah{
    private $warna;

    public function caraMakan(){
        return "Dikupas dulu baru dimakan";
    }

    public function setWarna($warna){
        $this->warna = $warna;
    }
}


$apel = new Apel();
$apel->setWarna("Merah");
echo $apel->caraMakan();