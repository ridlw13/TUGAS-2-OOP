<?php
class Produk {

    public $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;
    
    public function sayHello(){
        return "Hello World";
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}
// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Uncharthed";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neli K";
$produk4->penerbit = "Sony Entertaiment";
$produk4->harga = 20000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
echo "<br>";
echo $produk3->sayHello();

?>