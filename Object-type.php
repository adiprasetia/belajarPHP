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
    public $judul = "ini judul",
           $penulis = "ini penulis",
           $penerbit = "ini penerbit",
           $harga = 0;


    public function __construct($judul, $penulis, $penerbit, $harga) {//constructor MAGIC method, memasukkan property di dalamnya, tapi property bersifat private, karena itu dibawah ini harus dimasukkan property dari public ke dalam constructor
        //Method constructor OTOMATIS dipanggil ketika object dibuat
        $this->judul = $judul; //cara memanggil property public pake $this dan dimasukkan dalam property constructor
        $this->penulis = $penulis; //cara memanggil property public pake $this dan dimasukkan dalam property constructor
        $this->penerbit = $penerbit; //cara memanggil property public pake $this dan dimasukkan dalam property constructor
        $this->harga = $harga; //cara memanggil property public pake $this dan dimasukkan dalam property constructor
    }

    public function getLabel() {   //method
        return "$this->penulis, $this->penerbit, $this->harga";} //mengembalikan nilai jika fungsi dipanggil
}

$produk4 = new Cproduk("tamiya","adi","intan berlian",45000);
$produk5 = new Cproduk("Mainan","adi","lautan emas",45000);


//Class - Property - Method - Object Type========================================================
 //class adalah template untuk membuat object
class CetakInfoProduk {                 
    public function cetak(CProduk $produk){   //method inheretance -> object type yang mencetak Object yang hanya dari CLASS Produk
        $str = "{$produk->judul} | {$produk->getLabel()}";
        return $str;} //mengembalikan nilai jika fungsi dipanggil
    }

$produk6 = new CetakInfoProduk();
echo $produk6->cetak($produk4);//print object Produk 4 dari Clasas CProduk



?>

</body>
</html>
