<?php
class produk {
    public $judul; 
    public $penulis; 
    public $penerbit;
    public $harga;
    public $jamsek;
    public $jambel;
    public $tipe;
    //constructor
    public function __construct($judul = "JAKARTA", $penulis = "MOZART", $penerbit = "VAN HOVEN", $harga = 0, $jamsek = 0, $jambel = 0, $tipe="tipe"){
        $this->judul = $judul;
        $this->penulis = $penulis; 
        $this->penerbit = $penerbit;
        $this->harga = $harga; 
        $this->jamsek = $jamsek;
        $this->jambel = $jambel;
        $this->tipe = $tipe;
    }

    //method
    public function getData(){
        return "$this->penulis $this->penerbit";
    }

    //method untuk mencetak info lengkap
    public function getInfoLengkap(){
        $data = "{$this->type} ; {this->$judul} {$this->getData()} (RP. {$this->harga}) ";
        if ($this->tipe == "sekolah") 
        {
            $data .= " - {$this->jamsek} perhari";         
        }elseif($this->tipe == "mapel"){
            $data .= " - {$this->jambel} perjam";     
        }
        return $data;
    }

}

//objectType
class InfoProduk{
    //method untuk mencetak InfoProduk
    public function getInfoProduk( produk $produk ){
        $cpy = "{$produk->judul}   {$produk->getData()}    (RP.{$produk->harga})";
        return $cpy;
    }
}

$produk1 = new produk("CYBER MEDIA","USTAD MUIN", "AJI", 35000, 8);
$produk2 = new produk("SMK 57", "FAJAR", "REVALDI", 50000, 2);

