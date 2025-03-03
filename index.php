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
//Class - Property - Method========================================================
 //class adalah template untuk membuat object
class Produk {                 
    public $judul = "ini judul nya", //property
           $penulis = "ini penulis nya", //property
           $penerbit = "ini penerbit nya", //property
           $harga = 0; //property

    public function getLabel(){   //method
        return "$this->judul, $this->penerbit";} //mengembalikan nilai jika fungsi dipanggil
    }

$produk1 = new Produk(); //object produk1 dari class Produk
$produk1->judul = "opal"; //property object ditimpa dengan nilai baru
$produk2 = new Produk();
$produk2->judul = "Azka";
echo $produk1->judul;
echo "<br>";
echo $produk2->judul;

$produk3 = new Produk();
$produk3->judul = "Si Gugup";
$produk3->penulis = "Wawan";
$produk3->penerbit = "Erlangga";
$produk3->harga = 30000;
echo "<br>";
echo "Komik : $produk3->judul, $produk3->penulis, $produk3->penerbit, $produk3->harga";
echo "<br>";
echo $produk3->getLabel(); //menampilkan nilai dari method getLabel dan dari object 3 yang telah ditimpa nilai property baru

echo "<hr>";

echo "nama ".$produk2->getLabel();
echo "<br>";
echo "komik ".$produk3->getLabel();

echo "<hr>";

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
        return "$this->judul, $this->penulis, $this->penerbit, $this->harga";} //mengembalikan nilai jika fungsi dipanggil
}

$produk4 = new Cproduk("tamiya","adi","intan berlian",45000);
$produk5 = new Cproduk("Mainan","adi","lautan emas",45000);
echo "<br>";
echo "Mainan : ".$produk4->getLabel();
echo "<br>";
echo "Produk : ".$produk5->getLabel();
?>

</body>
</html>
