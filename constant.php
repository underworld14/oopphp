<?php 

// konstanta adalah variabel yang baqo atau tidak bisa diubah nilai-nya
// cara membuat konstanta dengan const.... dan define()

define('NAMA', 'Muhamad Yusril Izza Aulia ');
// define tidak bisa dideklarasi di dalam class tpi harus diluar dan bersifat global


const UMUR = 20;
// const bisa di deklarasakin di dalam dan di luar class


class Mahasiswa {
    public const UNIVERSITAS = "INSITUT PETERNAKAN LELE";
    public  $nama,
            $jurusan,
            $angkatan;

    public function __construct($nama, $jurusan, $angkatan) {
        $this->nama = $nama;
        $this->jurusan = $jurusan;
        $this->angkatan = $angkatan;
    }

    public function showData() {
        return "Nama : {$this->nama}, Jurusan : {$this->jurusan}, Angkatan : {$this->angkatan} Universitas " . self::UNIVERSITAS;
    } 
}

$yusril = new Mahasiswa('Yusril Izza Aulia', 'Teknologi Budidaya Lele', '2019');

var_dump($yusril);

echo $yusril->showData();
