<?php 

class Produk {
    public  $judul,
            $penulis,
            $penerbit,
            $harga,
            $halaman,
            $main,
            $tipe;

    public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 'harga', $halaman = 0, $main = 0, $tipe = 'tipe') {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->halaman = $halaman;
        $this->main = $main;
        $this->tipe = $tipe;
    }

    public function getLabel() {
        return "{$this->penulis} & {$this->penerbit}" ;
    }

    public function getFullinfo() {
        // output :
        // Komik : Judul Komik | Penulis & Penerbit | Rp. -------- /-100 Halaman
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} | Rp. {$this->harga} ";

        if ($this->tipe == 'Komik') {
            $str .= " - {$this->halaman} Halaman ";
        } else if ($this->tipe == 'Game') {
            $str .= " ~ {$this->main} Jam ";
        }
        return $str;
    }
}

class Produkinfo {
    public function cetakProduk ( Produk $produk) {
        $str = " {$produk->judul} | {$produk->getLabel()} Harga Rp. {$produk->harga} ";
        return $str;
    }
}

$produk1 = new Produk('Assasins Creed', 'Ezio', 'Ubisoft', 450000, 0, 40, 'Game');
$produk2 = new Produk('Naruto', 'Masashi Kishimoto', 'Shonen Jump', 45000, 100, 0, 'Komik');

var_dump($produk1);
var_dump($produk2);

echo $produk1->getFullinfo();
echo '<br>';
echo $produk2->getFullinfo();







