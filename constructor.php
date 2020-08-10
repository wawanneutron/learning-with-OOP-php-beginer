<?php
// class tempat untuk membut instan dari object
// class mendefinisikan object
// satu class dapat digunakan banyak object
class Produk
{
     // properti
     public    $judul = 'judul',
          $penulis = 'penulis',
          $penerbit = 'penerbit',
          $harga = 0;

     // constructor

     public function __construct($judul, $penulis, $penerbit, $harga)
     {
          $this->judul = $judul;
          $this->penulis = $penulis;
          $this->penerbit = $penerbit;
          $this->harga = $harga;
     }

     // method
     public function getLabel()
     {
          return "$this->judul, $this->penulis, $this->harga";
     }
}



// object
$produk1 = new Produk('Bumi Manusia', 'Pramoedya Ananta Toer', 'Dirgantara', '150000');

$produk2 = new Produk('Arah langkah', 'Fiersa Besari', 'Dirgatara', '90000');


echo "Novel Romance : " . $produk1->getLabel();
echo "<br>";
echo "Novel Bucin : " . $produk2->getLabel();
echo "<hr>";
