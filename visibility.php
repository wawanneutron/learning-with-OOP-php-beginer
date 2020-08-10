<?php
// class tempat untuk membut instan dari object, class mendefinisikan object.

class Produk
{
     // properti
     public $judul,
          $penulis,
          $penerbit;


     protected $diskon = 0;

     private $harga;

     // constructor

     public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga)
     {
          $this->judul = $judul;
          $this->penulis = $penulis;
          $this->penerbit = $penerbit;
          $this->harga = $harga;
     }


     public function getHarga()
     {
          return $this->harga - ($this->harga * $this->diskon / 100);
     }

     // method
     public function getLabel()
     {
          return "$this->penulis, $this->penerbit";
     }

     public function getInfoProduk()
     {

          $str = " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";
          return $str;
     }
}


// child class

class Buku extends Produk
{
     public $jmLHalaman;

     public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $jmLHalaman = 0)
     {
          parent::__construct($judul, $penulis, $penerbit, $harga);

          $this->jmLHalaman = $jmLHalaman;
     }


     public function setDiskon($diskon)
     {
          $this->diskon = $diskon;
     }

     public function getInfoProduk()

     {
          $str = " Buku : " . parent::getInfoProduk() . "  - {$this->jmLHalaman} Halaman. ";

          return $str;
     }
}


class Game extends Produk
{

     public $waktuMain;

     public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $waktuMain = 0)
     {
          parent::__construct($judul, $penulis, $penerbit, $harga);

          $this->waktuMain = $waktuMain;
     }


     public function getInfoproduk()
     {
          $str = " Game : " . parent::getInfoProduk() . "  ~ {$this->waktuMain} Jam. ";

          return $str;
     }
}



// object
$produk1 = new Buku('Bumi Manusia', 'Pramoedya Ananta Toer', 'Dirgantara', 150000, 500);

$produk2 = new Game('Black', 'Bpk Black', 'sony corporation', 500000, 50);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk1->setDiskon(10);
echo $produk1->getHarga();
