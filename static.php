<?php
// keyword static melekat pada class bukan pada object
class Contoh{
    public static $angka = 1;

    public static function halo(){
        // memanggil keyword properti static di method menggunakan self:: tdk menggunakan $this->
        return "Hallo ". self::$angka++ . " Kali.<br>"; 
    }
}

$c1 = new Contoh();
echo $c1->halo();
echo $c1->halo();
echo "<hr>";

$c2 = new Contoh();
echo $c2->halo();// akan meneruskan menjadi 3 karena tidak melekat pada object
echo $c2->halo();