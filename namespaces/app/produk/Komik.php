<?php 

class Komik extends Produk implements InfoProduk {
    public $halaman = 0;

    public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 'harga', $halaman = 0) {
        parent::__construct($tipe = 'Komik', $judul, $penulis, $penerbit, $harga);
        $this->halaman = $halaman;
    }

    public function getInfoProduk() {
        // Komik : Judul Komik | Penulis & Penerbit | Rp. -------- /-100 Halaman
        $str =  parent::getInfo() .  " - {$this->halaman} Lembar  ";

        return $str;
    }
}