<?php 
require_once 'app/init.php';

// $produk1 = new Game('Assasins Creed', 'Ezio', 'Ubisoft', 450000, 30);
// $produk2 = new Komik('Naruto', 'Masashi Kishimoto', 'Shonen Jump', 45000, 100);

// $cetakproduk = new CetakInfoProduk();
// $cetakproduk->tambahProduk($produk1);
// $cetakproduk->tambahProduk($produk2);

// var_dump($cetakproduk);
// echo $cetakproduk->cetakDaftar();

use app\produk\User as ProdukUser;
use app\service\User as ServiceUser;

new ProdukUser();
echo '<br>';
new ServiceUser();

