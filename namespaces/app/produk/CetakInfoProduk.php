<?php 

class CetakInfoProduk {
    public $daftarproduk = [];

    public function tambahProduk (Produk $produk) {
        $this->daftarproduk[] = $produk;
    }
    
    public function cetakDaftar() {
        $str = "DAFTAR PRODUK LENGKAP :: <br>";

        foreach ( $this->daftarproduk as $produk ) {
            $str .= " {$produk->getInfoProduk()} <br> ";
        }

        return $str;
    }
}
