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
        return "Penulis : {$this->penulis} Penerbit : {$this->penerbit}" ;
    }
}

class Produkinfo {
    public function cetakProduk ( Produk $produk) {
        $str = " {$produk->judul} | {$produk->getLabel()} Harga Rp. {$produk->harga} ";
        return $str;
    }
}

$produk1 = new Produk('Assasins Creed', 'Ezio', 'Ubisoft', 450000);
$produk2 = new Produk('Naruto', 'Masashi Kishimoto', 'Shonen Jump', 45000);

$cetakproduk1 = new Produkinfo();
echo $cetakproduk1->cetakProduk($produk2);









