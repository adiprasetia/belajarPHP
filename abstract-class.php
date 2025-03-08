
<?php
//Abstract class adalah class yang tidak bisa di instansiasi, hanya bisa diwariskan ke class lain
//Abstract class bisa memiliki property dan method
//Keputusan untuk membuat jadi abstract class karena class tersebut tidak akan di inisiasi langsung/tidak akan di buat objectnya
abstract class entryData {
    public $nama, 
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
    
    //Buat semua Setter dan Getter untuk semua property public
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
    
    public $celana;

    public function __construct($nama, $namaOrtu, $noHp, $sosmed, $celana) {
        parent::__construct($nama, $namaOrtu, $noHp, $sosmed);//memanggil constructor parent jadi ga perlu $his->nama = $nama; dst
        $this->celana = $celana;//untuk memanggil nilai property baru dari class ini
    }

    public function dataLengkap() {
        $str = "Pria = {$this->getData()} , jenis celana : {$this->celana}";
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

Class Wanita extends entryData {
    
    public $hijab;
    

    public function __construct($nama, $namaOrtu, $noHp, $sosmed, $hijab) {
        parent::__construct($nama, $namaOrtu, $noHp, $sosmed);
        $this->hijab = $hijab;
    }
    public function dataLengkap() {
        $str = "Wanita =  {$this->getData()} , hijab : {$this->hijab}";
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

class CetakInfo {
    public $listData = array();//membuat array listData

    public function tambahData(entryData $entryData) {//(Object type) fungsi tambahData dengan parameter object baru dengan nama $entryData dari class entryData
        $this->listData[] = $entryData;//Menambahkan data ke listData secara array
    }

    public function cetak() {
        $str = "Data Lengkap : <br>";
        foreach ($this->listData as $ld) {//Mengambil data dari listData secara array
            $str .= "- {$ld->dataLengkap()} <br>";//Menampilkan dataLengkap dari subclass entryData

            }

        return $str;
    }
}


$dataPria = new Pria("adi", "yudhi", "085746630294", "instagram", "katun");
$dataWanita = new Wanita("Dina", "Budi", "085746630294", "Whatsapp", "pashmina");

$cetakInfo = new CetakInfo();
$cetakInfo->tambahData($dataPria);
$cetakInfo->tambahData($dataWanita);

echo $cetakInfo->cetak();







?>

