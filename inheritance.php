<?php
// class tempat untuk membut instan dari object, class mendefinisikan object.

class Produk
{
     // properti
     public $judul, $penulis, $penerbit, $harga, $jmLHalaman, $waktuMain;

     // constructor

     public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $jmLHalaman = 0, $waktuMain = 0)
     {
          $this->judul = $judul;
          $this->penulis = $penulis;
          $this->penerbit = $penerbit;
          $this->harga = $harga;
          $this->jmLHalaman = $jmLHalaman;
          $this->waktuMain = $waktuMain;
     }

     // method
     public function getLabel()
     {
          return "$this->penulis, $this->penerbit";
     }

     public function getInfoProduk()
     {

          $str = " {$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";
          return $str;
     }
}

// child class

class Buku extends Produk
{

     public function getInfoProduk()
     {
          $str = " Buku : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})  - {$this->jmLHalaman} Halaman. ";
          return $str;
     }
}

class Game extends Produk
{

     public function getInfoproduk()
     {
          $str = " Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})  ~ {$this->waktuMain} Jam. ";
          return $str;
     }
}


// Class baru ----> object type
class CetakInfoProduk
{
     public function cetak(Produk $produk)
     {
          $str = "{$produk->getLabel()} (Rp. {$produk->harga})";

          return $str;
     }
}




// object
$produk1 = new Buku('Bumi Manusia', 'Pramoedya Ananta Toer', 'Dirgantara', 150000, 500, null);

$produk2 = new Game('Black', 'Bpk Black', 'sony corporation', 500000, null, 50);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
