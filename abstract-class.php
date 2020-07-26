<?php
// abstract class :
// - tidak bisa di instansiasi
// - harus ada minimal 1 method abstract --> wajib di implement asi oleh child nya
// - boleh memiliki property dan method yg di implementasi / di deklarasi

abstract class Buah{ // deklarasi sebagai abstract class
    private $warna;
    abstract public function caraMakan(); // deklarasi sebagai abstract method

    public function setWarna($warna){
        $this->warna = $warna;
    }
    
    public function getWarna(){
        return $this->warna;
    }

}

// child class 1
class Apel extends Buah{
    public function caraMakan(){
        return "Dimakan semua kecuali tengahnya";
    }

}

class Jeruk extends Buah{
    public function caraMakan(){
        return "Dikupas dulu baru dimakan";
    }
}


$apel = new Apel();
$apel->setWarna("Merah");
echo $apel->caraMakan();