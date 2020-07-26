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
    public $jmlHal;
    // Overriding Method __construct, bertambah 1 parameter
    public function __construct($judul = "", $penulis = "", $penerbit = "", $jmlHal = 0){
        // memanggil method parrent
        parent::__construct($judul, $penulis, $penerbit);
        
        $this->jmlHal = $jmlHal;
    }
    public function getProduct(){
        return "Komik : {$this->getLabel()} | {$this->jmlHal} Halaman";
    }

}
// Cild Class 2
class Game extends Produk{
    public function getProduct(){
        return "Game : {$this->getLabel()}";
    }
}

// Walaupun tidak ada constructor di child class, constructor tetap harus di isi karena
// di parent terdapat constructor
$product1 = new Komik("Naruto", "Masasi K", "Sonen Jump", 100);
$product2 = new Game("Naruto", "Masasi K", "Sonen Jump");
echo $product1->getProduct();
echo "<br>";
echo $product2->getProduct();