<?php 

// Jualan Produk
// komik dan Game

class Produk {
    public  $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;

    public function getLabel() {
        return "$this->judul, $this->penulis" ;
    }
}

$produk1 = new Produk();
$produk1->judul = "Naruto";
$produk1->penulis = "Masashi Kishimoto";
$produk1->penerbit = "Shonen Jump";
$produk1->harga = 35000;

$produk2 = new Produk();
$produk2->judul = "Assasins Creed";
$produk2->penulis = "Ezio Auditore";
$produk2->penerbit = "Ubisoft";
$produk->harga = 350000;





