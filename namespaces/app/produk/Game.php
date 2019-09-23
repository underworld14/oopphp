<?php 

class Game extends Produk implements InfoProduk {
    public $main = 0;

    public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 'harga', $main = 0) {
        parent::__construct($tipe = 'Game', $judul, $penulis, $penerbit, $harga);
        $this->main = $main;
    }

    public function getInfoProduk() {
        // Game : Judul Game | Penulis & Penerbit | Rp. -------- /-100 Halaman
        $str = parent::getInfo() . " ~ {$this->main} Jam  ";

        return $str;
    }
}