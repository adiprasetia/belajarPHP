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
           $namaOrtu, 
           $noHp, 
           $sosmed,
           $hijab,
           $celana;

    //Fungsi constructor supaya lebih efisien dalam mengisi property
    public function __construct($nama, $namaOrtu, $noHp, $sosmed, $hijab, $celana) {
        $this->nama = $nama;
        $this->namaOrtu = $namaOrtu;
        $this->noHp = $noHp;
        $this->sosmed = $sosmed;
        $this->hijab = $hijab;
        $this->celana = $celana;
    }
    
    //Fungsi Mengambil dan menampilkan data
    public function getData() {
        return "$this->nama, $this->namaOrtu, $this->noHp, $this->sosmed, $this->hijab, $this->celana";
    }

}


//Coba inheritance child class
Class pria extends entrydata {
    
    public function dataLengkap() {
        $str = "Pria, nama : {$this->nama}, namaOrtu : {$this->namaOrtu}, noHp : {$this->noHp}, sosmed : {$this->sosmed}, jenis celana : {$this->celana}";
        return $str;
    } 


}

Class wanita extends entrydata {
    
    public function dataLengkap() {
        $str = "Wanita, nama : {$this->nama}, namaOrtu : {$this->namaOrtu}, noHp : {$this->noHp}, sosmed : {$this->sosmed}, hijab : {$this->hijab}";
        return $str;
    } 

}

$datapria =new pria ("adi","yudhi","085746630294","instagram",null, "katun");
$datawanita =new wanita ("adi","yudhi","085746630294","instagram","pashmina", null);

echo $datapria->dataLengkap();
echo "<br>";
echo $datawanita->dataLengkap();

?>

</body>
</html>
