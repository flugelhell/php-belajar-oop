<?php
// ada 2 jenis pendefinisian constanta
// 1.  define() --> tidak bisa di inisiasi di dalam kelas
// 2. const

define('NAMA', 'Yayat Suyatna');
const UMUR = '27';

// panggil constanta
echo NAMA;
echo "<br>";
echo UMUR;
echo "<hr>";

class Coba{
    const JENIS_KELAMIN = "Laki-laki";
}

$obj = new Coba;
echo $obj::JENIS_KELAMIN;// dipanggil seperti static method