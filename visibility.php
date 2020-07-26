<?php 
// Visiblity ada 3 jenis
// Public -> bisa diakses oleh semuanya (setter dan getter)
// Protected -> bisa diakses oleh turunannya (setter dan getter)
// Private -> bisa diakses oleh kelas itu sendiri (setter dan getter)

// Parent Class
class Produk{
    public $judul, $penulis, $penerbit;
    protected $diskon = 0;
    private $harga;
    public function __construct($judul = "", $penulis = "", $penerbit = "", $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // getter harga karena visibiliti nya private jadi harus buat getter di class nya sendiri
    public function getHarga(){
        return $this->harga * ($this->diskon / 100);
    }
    
    public function getLabel(){
        return "{$this->judul} | {$this->penulis} | {$this->penerbit} | (Rp. {$this->harga})";
    }
}

// Child Class 1
class Komik extends Produk{
    public $jmlHal;
    // Overriding Method __construct, bertambah 1 parameter
    public function __construct($judul = "", $penulis = "", $penerbit = "", $harga = 0, $jmlHal = 0){
        // memanggil method parrent
        parent::__construct($judul, $penulis, $penerbit, $harga);
        
        $this->jmlHal = $jmlHal;
    }

    public function getProduct(){
        return "Komik : {$this->getLabel()} | {$this->jmlHal} Halaman";
    }

    // karena visibility propertinya protected jadi bisa setter bisa di buat di child class nya
    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }
}
// Cild Class 2
class Game extends Produk{
    public $jam;
    // Overriding Method
    public function __construct($judul = "", $penulis = "", $penerbit = "", $harga = 0, $jam = 0){
        // memanggil method parrent
        parent::__construct($judul, $penulis, $penerbit, $harga);
        
        $this->jam = $jam;
    }
    public function getProduct(){
        return "Game : {$this->getLabel()}| ~ {$this->jam} Jam";
    }

    public function testKelebihanParam($param){
        return "$param";
    }
}

// Walaupun tidak ada constructor di child class, constructor tetap harus di isi karena
// di parent terdapat constructor
$product1 = new Komik("Naruto", "Masasi K", "Sonen Jump", 100000, 120);
$product2 = new Game("Naruto", "Masasi K", "Sonen Jump",250000, 2, "TES KELEBIHAN PARAM");// tidak error
echo $product1->getProduct();
echo "<br>";
echo $product2->getProduct();
echo "<hr>";

$product1->setDiskon(50); // diakses melalui instance child class nya
echo "Harga sudah di diskon {$product1->getHarga()}"; // di akses melalui getter
echo "<br>";
// Tes Kelebihan Parameter
echo $product2->testKelebihanParam("Parameter 1", "Kelebihan Param"); // tidak error