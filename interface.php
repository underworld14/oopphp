<?php 
interface InfoProduk {
    public function getInfoProduk(); 
}

class Produk {
    private $tipe,
            $judul,
            $penulis,
            $penerbit,
            $diskon = 0,
            $harga;

    public function __construct($tipe = 'tipe', $judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 'harga') {
        $this->tipe = $tipe;
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function setJudul($judul) {
        if (!is_string($judul)) {
            throw new Exception("Judul Harus menggunakan string", 1);
        } else {
            return $this->judul = $judul;
        }
    }

    public function getPenulis() {
        return $this->penulis;
    }

    public function setPenulis($penulis) {
        return $this->penulis = $penulis;
    }

    public function getPenerbit() {
        return $this->penerbit;
    }

    public function setPenerbit($penerbit) {
        return $this->penerbit = $penerbit;
    }

    public function setDiskon ($diskon) {
        return $this->diskon = $diskon;
    }

    public function getDiskon() {
        return $this->diskon;
    }

    public function setHarga($harga) {
        return $this->harga = $harga;
    }

    public function getHarga() {
        return $this->harga - ( $this->harga * $this->diskon / 100 );
    }

    public function getLabel() {
        return "{$this->penulis} & {$this->penerbit}" ;
    }


    
    public function getInfo() {
        // Komik : Judul Komik | Penulis & Penerbit | Rp. -------- /-100 Halaman
        $str = " Kategori {$this->tipe} : {$this->judul} | {$this->getLabel()} | Rp. {$this->harga} ";
        return $str;
    }
}

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

$produk1 = new Game('Assasins Creed', 'Ezio', 'Ubisoft', 450000, 30);
$produk2 = new Komik('Naruto', 'Masashi Kishimoto', 'Shonen Jump', 45000, 100);

$cetakproduk = new CetakInfoProduk();
$cetakproduk->tambahProduk($produk1);
$cetakproduk->tambahProduk($produk2);

var_dump($cetakproduk);
echo $cetakproduk->cetakDaftar();













