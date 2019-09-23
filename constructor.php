<?php 

class Produk {
    public  $judul,
            $penulis,
            $penerbit,
            $harga;

    public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 'harga') {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->judul, $this->penulis" ;
    }
}

$produk1 = new Produk('Assasins Creed', 'Ezio', 'Ubisoft', 450000);
$produk2 = new Produk('Naruto', 'Masashi Kishimoto', 'Shonen Jump', 45000);
$produk3 = new Produk('Resident Evil');

var_dump($produk1);
var_dump($produk2);
var_dump($produk3);






