
<?php

//STATIC KEYWORD
//Membuat property atau method yang bisa diakses tanpa harus membuat instance terlebih dahulu
//Nilai static akan selalu tetap meskipun diakses berulang kali
//Biasanya digunakan untuk membuat fungsi bantuan atau fungsi utility di FRAMEWORK
//Atau digunakan untuk menghitung jumlah object yang dibuat dari sebuah class

class Kendaraan {
    
    public static   $merk = "Toyota", 
                    $tipe = "Avanza";
                    
          
    public static function getData() {
        return "Merk : " . self::$merk . ", Tipe : " . self::$tipe;
    }
    
    public static function setData($merk, $tipe) {
        self::$merk = $merk;
        self::$tipe = $tipe;
    }
   

}

    echo Kendaraan::getData();
    echo "<br>";
    echo Kendaraan::setData("Honda", "Jazz");
    echo "<br>";
    echo Kendaraan::getData();
    echo "<br>";
    echo Kendaraan::$merk;
    echo "<br>";
    
class Angka {
    public static $angka = 1;
    
    public static function tambah() {
        return self::$angka++ . " kali";
    }
}

echo Angka::tambah();//1 kali
echo "<br>";
echo Angka::tambah();  //2 kali, tidak kembali ke 1 kali karena nilai static akan selalu tetap/tidak direset
echo "<br>";

?>

