<?php

require_once 'Apps/init.php';

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000,  0);
$produk2 = new Game("Uncharted", "Neli K", "Sony Entertaiment", 35000, 50);
// $produk3 = new Produk("Dragon Ball");

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk ($produk1);
$cetakProduk->tambahProduk ($produk2);
echo $cetakProduk->cetak();
?>