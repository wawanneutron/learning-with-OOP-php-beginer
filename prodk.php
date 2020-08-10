<?php
// class tempat untuk membut instan dari object
// class mendefinisikan object
// satu class dapat digunakan banyak object
class Produk
{
     // properti
     public $judul = 'judul',
          $penulis = 'penulis',
          $penerbit = 'penerbit',
          $harga = 0;

     // method
     public function getLabel()
     {
          return "$this->judul, $this->penulis";
     }
}

// $produk1 = new Produk();
// $produk1->judul = 'Naruto';
// var_dump($produk1);


// $produk2 = new Produk();
// $produk2->judul = 'Pramoedya ananta toer';
// var_dump($produk2);
// var_dump($produk2->judul);

// object
$produk3 = new Produk();
$produk3->judul = 'Bumi Manusia';
$produk3->penulis = 'Pramoedya Ananta Toer';
$produk3->penerbit = 'Dirgantara';
$produk3->harga = 150000;


echo "Buku : $produk3->judul, $produk3->penulis, $produk3->harga ";
echo "<br>";
echo $produk3->getLabel();



echo "<hr>";
// object
$produk4 = new Produk();
$produk4->judul = 'Arah langkah';
$produk4->penulis = 'Fiersa Besari';
$produk4->penerbit = 'Dirgantara';
$produk4->harga = 90000;

echo "Novel Romance : " . $produk3->getLabel();
echo "<br>";
echo "Novel Bucin : " . $produk4->getLabel();
