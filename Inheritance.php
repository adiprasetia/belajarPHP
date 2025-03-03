<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style> </style>
<body>
<?php
//================================================================================
//Constructor Method -> OTOMATIS Dipanggil ketika object dibuat, akan lebih memudahkan dalam mengisi property class
class Cproduk {
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktuMain;


    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain) {//constructor MAGIC method, memasukkan property di dalamnya, tapi property bersifat private, karena itu dibawah ini harus dimasukkan property dari public ke dalam constructor
        //Method constructor OTOMATIS dipanggil ketika object dibuat
        $this->judul = $judul; 
        $this->penulis = $penulis; 
        $this->penerbit = $penerbit; 
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }

    public function getLabel() {   //method
        return "$this->penulis, $this->penerbit, $this->harga";} //mengembalikan nilai jika fungsi dipanggil
}
//class child dari class Cproduk (video 7)
class komik extends Cproduk {
    
    public function getInfoKomik() {
        $str = "komik = {$this->judul} | {$this->getLabel()} - {$this->jmlHalaman} Halaman";
        return $str;
    }


}

//class child dari class Cproduk (video 7)
class game extends Cproduk {
    
    public function getInfoKomik() {
        $str = "game = {$this->judul} | {$this->getLabel()} - {$this->waktuMain} Jam";
        return $str;
    }


}

$produk4 = new komik("naruto","Masashi Kisimoto","shonen jump",30000,100,0);
$produk5 = new game("Uncharted","neil druckmann","sony computer",45000,0,50);
//komik = naruto | Masashi Kisimoto, Shonen Jump (Rp. 30000) - 100 Halaman
//game = uncharted | Neil Druckmann, Sony Computer (Rp. 250000) - 50 jam
echo $produk4->getInfoKomik();
echo "<br>";    
echo $produk5->getInfoKomik();  
echo "<hr>";


//Class - Property - Method - Object Type (Video 6)========================================================
 //class adalah template untuk membuat object
class CetakInfoProduk {                 
    public function cetak(CProduk $produk){   //method inheretance -> object type yang mencetak Object yang hanya dari CLASS Produk
        $str = "{$produk->judul} | {$produk->getLabel()}";
        return $str;} //mengembalikan nilai jika fungsi dipanggil
    }

$produk6 = new CetakInfoProduk();
echo $produk6->cetak($produk4);//print object Produk 4 dari Clasas CProduk
echo "<br>";
echo "<hr>";


//Inheritance - Parent-Child Class (video 7)===============================================================
//Contoh penggunaan inheritance
class mobil {
    public $nama, $merk, $warna, $topspeed, $jmlPenumpang;

    public function tambahKecepatan() {
        return "Kecepatan Bertambah.. Gasss!!!";
    }
}

class mobilSport extends mobil {
    public $turbo = false;
    
    public function jalankanTurbo() {
        $this->turbo = true;
        return "Turbo Dijalankan";
    }
}

$raizeTurbo = new mobilSport();
echo $raizeTurbo->tambahKecepatan();
echo "<br>";
echo $raizeTurbo->jalankanTurbo();



?>

</body>
</html>
