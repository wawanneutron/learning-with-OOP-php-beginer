<?php
// class tempat untuk membut instan dari object, class mendefinisikan object.

class Produk
{
     // properti
     public $judul, $penulis, $penerbit, $harga, $jmLHalaman, $waktuMain, $tipe;

     // constructor

     public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $jmLHalaman = 0, $waktuMain = 0, $tipe)
     {
          $this->judul = $judul;
          $this->penulis = $penulis;
          $this->penerbit = $penerbit;
          $this->harga = $harga;
          $this->jmLHalaman = $jmLHalaman;
          $this->waktuMain = $waktuMain;
          $this->tipe = $tipe;
     }

     // method
     public function getLabel()
     {
          return "$this->judul, $this->penulis, $this->penerbit";
     }

     public function getInfoLengkap()
     {
          // Game : Black,  Bpk Black,  Sony corporation, (Rp.500000) ~ 50 jam.
          $str = "{$this->tipe} : {$this->getLabel()} (Rp. {$this->harga}) ";

          if ($this->tipe == "Buku") {
               $str .= " - {$this->jmLHalaman} Halaman. ";
          } elseif ($this->tipe == "Game") {
               $str .= " ~ {$this->waktuMain} Jam. ";
          }
          return $str;
     }
}

// object
$produk1 = new Produk('Bumi Manusia', 'Pramoedya Ananta Toer', 'Dirgantara', 150000, 500, null, 'Buku');

$produk2 = new Produk('Black', 'Bpk Black', 'sony corporation', 500000, null, 50, 'Game');


echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
