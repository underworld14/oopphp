<?php 

class Produk {
    public  $tipe,
            $judul,
            $penulis,
            $penerbit;
    protected $diskon = 0;
    private $harga;

    public function __construct($tipe = 'tipe', $judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 'harga') {
        $this->tipe = $tipe;
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getDiskon ($diskon) {
        return $this->diskon = $diskon;
    }

    public function getHarga() {
        return $this->harga - ( $this->harga * $this->diskon / 100 );
    }

    public function getLabel() {
        return "{$this->penulis} & {$this->penerbit}" ;
    }

    public function getInfoProduk() {
        // Komik : Judul Komik | Penulis & Penerbit | Rp. -------- /-100 Halaman
        $str = " Kategori {$this->tipe} : {$this->judul} | {$this->getLabel()} | Rp. {$this->harga} ";
        return $str;
    }
}

class Komik extends Produk {
    public $halaman = 0;

    public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 'harga', $halaman = 0) {
        parent::__construct($tipe = 'Komik', $judul, $penulis, $penerbit, $harga);
        $this->halaman = $halaman;
    }

    public function getInfoProduk() {
        // Komik : Judul Komik | Penulis & Penerbit | Rp. -------- /-100 Halaman
        $str =  parent::getInfoProduk() .  " - {$this->halaman} Lembar  ";

        return $str;
    }
}

class Game extends Produk {
    public $main = 0;

    public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 'harga', $main = 0) {
        parent::__construct($tipe = 'Game', $judul, $penulis, $penerbit, $harga);
        $this->main = $main;
    }

    public function getInfoProduk() {
        // Game : Judul Game | Penulis & Penerbit | Rp. -------- /-100 Halaman
        $str = parent::getInfoProduk() . " ~ {$this->main} Jam  ";

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
$produk3 = new Produk('Musik', 'Maher Zain', 'Maherzain', 'Muslim Zone', 450000);



var_dump($produk1);
var_dump($produk2);
var_dump($produk3);

echo $produk1->getInfoProduk();
echo '<br>';
echo $produk2->getInfoProduk();
echo '<br>';
echo $produk3->getInfoProduk();
echo "<hr>";

$produk1->getDiskon(50);
echo $produk1->getHarga();
echo "<br>";








