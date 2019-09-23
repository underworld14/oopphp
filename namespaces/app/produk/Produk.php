<?php 

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
