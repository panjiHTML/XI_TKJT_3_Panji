<?php
class produk {
    public $judul; 
    public $penulis; 
    public $penerbit;
    public $harga;
    //constructor
    public function __construct($judul = "JAKARTA", $penulis = "MOZART", $penerbit = "VAN HOVEN", $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis; 
        $this->penerbit = $penerbit;
        $this->harga = $harga; 
    }

    //method
    public function getData(){
        return " $this->penulis, $this->penerebit";
    }
}



$produk1 = new produk("CYBER MEDIA","USTAD MUIN", "AJI", 35000);

$produk2 = new produk("SMK 57", "FAJAR", "REVALDI", 50000);

$produk3 = new produk("SMK 55", "NAT", "HARTA", 40000);

$produk4 = new produk("SMK 70", "RAKA", "NAME", 50000);

$produk5 = new produk("PENABUR", "GIT", "ROR", 200000);

echo "SEKOLAH : " . $produk1->getData();
echo "<br/>";
echo "SEKOLAH: " . $produk2->getData();
echo "<br/>";
echo "SEKOLAH: " . $produk3->getData();
echo "<br/>";
echo "SEKOLAH: " . $produk4->getData();
echo "<br/>";
echo "SEKOLAH: " . $produk5->getData();
echo "<br/>";