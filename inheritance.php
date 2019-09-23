<?php 

class Produk {
    public  $judul,
            $penulis,
            $penerbit,
            $harga,
            $halaman,
            $main,
            $tipe;

    public function __construct($tipe = 'tipe', $judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 'harga') {
        $this->tipe = $tipe;
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "{$this->penulis} & {$this->penerbit}" ;
    }

    public function getSum() {
        // Komik : Judul Komik | Penulis & Penerbit | Rp. -------- /-100 Halaman
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} | Rp. {$this->harga} ";
        return $str;
    }
}

class Komik extends Produk {
    public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 'harga', $halaman = 0) {
        $this->tipe = 'Komik';
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->halaman = $halaman;
    }

    public function getInfoProduk() {
        // Komik : Judul Komik | Penulis & Penerbit | Rp. -------- /-100 Halaman
        $str = " {$this->getSum()} - {$this->halaman} Lembar  ";

        return $str;
    }
}

class Game extends Produk {
    public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 'harga', $main = 0) {
        $this->tipe = 'Game';
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->main = $main;
    }

    public function getInfoProduk() {
        // Game : Judul Game | Penulis & Penerbit | Rp. -------- /-100 Halaman
        $str = " {$this->getSum()} ~ {$this->main} Jam  ";

        return $str;
    }
}

// class Produkinfo {
//     public function cetakProduk ( Produk $produk) {
//         $str = " {$produk->judul} | {$produk->getLabel()} Harga Rp. {$produk->harga} ";
//         return $str;
//     }
// }

$produk1 = new Game('Assasins Creed', 'Ezio', 'Ubisoft', 450000, 30);
$produk2 = new Komik('Naruto', 'Masashi Kishimoto', 'Shonen Jump', 45000, 100);


var_dump($produk1);
var_dump($produk2);

echo $produk1->getInfoProduk();
echo '<br>';
echo $produk2->getInfoProduk();







