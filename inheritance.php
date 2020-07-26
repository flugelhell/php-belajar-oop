<?php 
// Parent Class
class Produk{
    public $judul, $penulis, $penerbit;

    public function __construct($judul = "", $penulis = "", $penerbit = ""){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
    }

    public function getLabel(){
        return "{$this->judul} | {$this->penulis} | {$this->penerbit}";
    }
}

// Child Class 1
class Komik extends Produk{
    public function getProduct(){
        return "Komik : {$this->getLabel()}";
    }

}
// Cild Class 2
class Game extends Produk{
    public function getProduct(){
        return "Game : {$this->getLabel()}";
    }
}
// Walaupun tidak ada constructor di child class tapi tetap harus di isi karena
// di parent terdapat constructor
$product1 = new Komik("Naruto", "Masasi K", "Sonen Jump");
$product2 = new Game("Naruto", "Masasi K", "Sonen Jump");
echo $product1->getProduct();
echo "<br>";
echo $product2->getProduct();