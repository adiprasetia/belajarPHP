
<?php

//contoh constanta - CARA ke 1 - TIDAK BISA DISIMPAN DI DALAM CLASS
define('NAMA', 'Muhammad Fauzan');  //define('NAMA', 'Muhammad Fauzan') adalah cara mendefinisikan constanta
define('NILAI', 90); //define('NILAI', 90) adalah cara mendefinisikan constanta

echo "Nama : " . NAMA . "<br>"; //cara memanggil constanta
echo "Nilai : " . NILAI . "<br>"; //cara memanggil constanta

//contoh constanta - CARA ke 2 - BISA DISIMPAN DI DALAM CLASS
const Umur = '32 tahun'; //const Umur = '32 tahun' adalah cara mendefinisikan constanta
const Kota = "Jakarta"; //const Kota = "Jakarta" adalah cara mendefinisikan constanta 

echo "Umur : " . Umur . "<br>"; //cara memanggil constanta
echo "Kota : " . Kota . "<br>"; //cara memanggil constanta

//These all MAGIC CONSTANT
//echo __LINE__; //menampilkan baris kode
//echo __FILE__; //menampilkan path file
//echo __DIR__; //menampilkan direktori file
//echo __FUNCTION__; //menampilkan nama function
//echo __CLASS__; //menampilkan nama class
//echo __TRAIT__; //menampilkan nama trait
//echo __METHOD__; //menampilkan nama method
//echo __NAMESPACE__; //menampilkan nama namespace





?>

