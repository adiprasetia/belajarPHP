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
//Coba class dengan Setter dan Getter
class entryData {
    //visibility 'private' hanya bisa diakses di class ini saja supaya lebih aman
    //visibility 'protected' hanya bisa diakses oleh class itu sendiri dan turunannya
    private $nama, 
            $namaOrtu,
            $sosmed,
            $noHp;
          
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
    
    //Buat semua Setter dan Getter untuk semua property private
    //Fungsi Setter untuk mengisi nilai property Nama dengan visibility Public Function supaya bisa diakses di luar class
    //Fungsi Getter untuk mengambil nilai property Sosmed dengan visibility Public Function supaya bisa diakses di luar class
    
    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }

    public function setNamaOrtu($namaOrtu) {
        $this->namaOrtu = $namaOrtu;
    }

    public function getNamaOrtu() {
        return $this->namaOrtu;
    }

    public function setNoHp($noHp) {
        $this->noHp = $noHp;
    }

    public function getNoHp() {
        return $this->noHp;
    }

    public function setSosmed($sosmed) {
        $this->sosmed = $sosmed;
    }

    public function getSosmed() {
        return $this->sosmed;
    }

}


//Coba inheritance child class
Class Pria extends entryData {
    
    private $celana;

    public function __construct($nama, $namaOrtu, $noHp, $sosmed, $celana) {
        parent::__construct($nama, $namaOrtu, $noHp, $sosmed);//memanggil constructor parent jadi ga perlu $his->nama = $nama; dst
        $this->celana = $celana;//untuk memanggil nilai property baru dari class ini
    }

    public function dataLengkap() {
        $str = "Pria = ". parent::getData() ." , jenis celana : {$this->celana}";
        return $str;
    } 

    //Buat Setter dan Getter untuk property celana
    public function getCelana() {
        return $this->celana;
    }   

    public function setCelana($celana) {
        $this->celana = $celana;
    }

}

Class Wanita extends entrydata {
    
    private $hijab;
    

    public function __construct($nama, $namaOrtu, $noHp, $sosmed, $hijab) {
        parent::__construct($nama, $namaOrtu, $noHp, $sosmed);
        $this->hijab = $hijab;
    }
    public function dataLengkap() {
        $str = "Wanita = ". parent::getData() .", hijab : {$this->hijab}";
        return $str;
    } 
    
    //Buat Setter dan Getter untuk property hijab
    public function getHijab() {
        return $this->hijab;
    }   

    public function setHijab($hijab) {
        $this->hijab = $hijab;
    }
}

$dataPria =new Pria ("adi","yudhi","085746630294","instagram", "katun");
$datawanita =new Wanita ("DIna","Budi","085746630294","Whatsapp","pashmina");


echo $dataPria->dataLengkap();
echo "<br>";
echo $datawanita->dataLengkap();
echo "<hr>";

//Mengambil nilai satu property dari class entrydata
echo $dataPria->getNama();//langsung mengambil property nama dari class entrydata
echo "<br>";
echo $dataPria->getCelana();//langsung mengambil property celana dari class entrydata
echo "<br>";
echo $dataPria->getNoHp();//langsung mengambil property noHp dari class entrydata
echo "<br>";
echo $datawanita->getSosmed();//langsung mengambil property sosmed dari class entrydata
echo "<br>";
echo $datawanita->setHijab("Segi empat");//langsung mengambil property hijab dari class entrydata
echo $datawanita->getHijab();//langsung mengambil property hijab dari class entrydata


?>

</body>
</html>
