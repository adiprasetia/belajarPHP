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
class entryData {
    public $nama, 
           $namaOrtu, 
           $noHp, 
           $sosmed;

    //Fungsi constructor supaya lebih efisien dalam mengisi property
    public function __construct($nama, $namaOrtu, $noHp, $sosmed) {
        $this->nama = $nama;
        $this->namaOrtu = $namaOrtu;
        $this->noHp = $noHp;
        $this->sosmed = $sosmed;
               
    }
    
    //Fungsi Mengambil dan menampilkan data
    public function getData() {
        $str = "nama : {$this->nama}, namaOrtu : {$this->namaOrtu}, noHp : {$this->noHp}, sosmed : {$this->sosmed}";
        return $str;
        
    }

}


//Coba inheritance child class
Class pria extends entryData {
    
    public $celana;

    public function __construct($nama, $namaOrtu, $noHp, $sosmed, $celana) {
        parent::__construct($nama, $namaOrtu, $noHp, $sosmed);//memanggil constructor parent jadi ga perlu $his->nama = $nama; dst
        $this->celana = $celana;//untuk memanggil nilai property baru dari class ini
    }

    public function dataLengkap() {
        $str = "Pria = ". parent::getData() ." , jenis celana : {$this->celana}";
        return $str;
    } 


}

Class wanita extends entryData {
    
    public $hijab;
    

    public function __construct($nama, $namaOrtu, $noHp, $sosmed, $hijab) {
        parent::__construct($nama, $namaOrtu, $noHp, $sosmed);
        $this->hijab = $hijab;
    }
    public function dataLengkap() {
        $str = "Wanita = ". parent::getData() .", hijab : {$this->hijab}";
        return $str;
    } 

}

$datapria =new pria ("adi","yudhi","085746630294","instagram", "katun");
$datawanita =new wanita ("adi","yudhi","085746630294","instagram","pashmina");


echo $datapria->dataLengkap();
echo "<br>";
echo $datawanita->dataLengkap();
echo "<br>";
echo $datapria->dataLengkap();




?>

</body>
</html>
