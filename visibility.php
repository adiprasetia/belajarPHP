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
//Coba class
class entrydata {
    public $nama, 
           $namaOrtu;
          


    private $sosmed;//visibility 'private' hanya bisa diakses di class ini saja           

    protected $noHp;//visibility 'protected' hanya bisa diakses oleh class itu sendiri dan turunannya, kalau 'private' hanya bisa diakses oleh class itu sendiri

    //Fungsi constructor supaya lebih efisien dalam mengisi property
    public function __construct($nama, $namaOrtu, $noHp, $sosmed) {
        $this->nama = $nama;
        $this->namaOrtu = $namaOrtu;
        $this->noHp = $noHp;
        $this->sosmed = $sosmed;
               
    }
    
    //Fungsi Mengambil dan menampilkan data
    public function getData() {
        $str = "Nama : {$this->nama}, Nama Ortu : {$this->namaOrtu}, noHp : {$this->noHp}, Sosmed : {$this->sosmed}";
        return $str;
        
    }

    public function getSosmed() {//membuat fungsi baru untuk mengambil property sosmed karena 'visibility private'
        return $this->sosmed;
    }
}


//Coba inheritance child class
Class pria extends entrydata {
    
    public $celana;

    public function __construct($nama, $namaOrtu, $noHp, $sosmed, $celana) {
        parent::__construct($nama, $namaOrtu, $noHp, $sosmed);//memanggil constructor parent jadi ga perlu $his->nama = $nama; dst
        $this->celana = $celana;//untuk memanggil nilai property baru dari class ini
    }

    public function dataLengkap() {
        $str = "Pria = ". parent::getData() ." , jenis celana : {$this->celana}";
        return $str;
    } 

    public function getNoHp() {//membuat fungsi baru untuk mengambil property noHp karena 'visibility protected'
        return $this->noHp;
    }


}

Class wanita extends entrydata {
    
    public $hijab;
    

    public function __construct($nama, $namaOrtu, $noHp, $sosmed, $hijab) {
        parent::__construct($nama, $namaOrtu, $noHp, $sosmed);
        $this->hijab = $hijab;
    }
    public function dataLengkap() {
        $str = "Wanita = ". parent::getData() .", hijab : {$this->hijab}";
        return $str;
    } 

    public function getNoHp() {//membuat fungsi baru untuk mengambil property noHp karena 'visibility protected'
        return $this->noHp;
    }
}

$datapria =new pria ("adi","yudhi","085746630294","instagram", "katun");
$datawanita =new wanita ("DIna","Budi","085746630294","Whatsapp","pashmina");


echo $datapria->dataLengkap();
echo "<br>";
echo $datawanita->dataLengkap();
echo "<hr>";

//Mengambil nilai satu property dari class entrydata
echo $datapria->nama;//langsung mengambil property nama dari class entrydata
echo "<br>";
echo $datapria->celana;//langsung mengambil property celana dari class entrydata
echo "<br>";
echo $datapria->getNoHp();//langsung mengambil property noHp dari class entrydata
echo "<br>";
echo $datawanita->getSosmed();//langsung mengambil property sosmed dari class entrydata



?>

</body>
</html>
