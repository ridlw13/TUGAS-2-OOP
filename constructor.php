<?php
class Produk {

    public $judul ,
            $penulis ,
            $penerbit ,
            $harga ;

    public function __construct($judul = "judul", $penerbit= "penerbit" , $penulis = "penulis", $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        
    }
    public function sayHello(){
        return "Hello World";
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

$produk3 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 3000);
$produk4 = new Produk("Uncharted", "Neli K", "Sony Entertaiment", 35000);
$produk5 = new Produk("Dragon Ball");

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
echo "<br>";
echo $produk3->sayHello();
var_dump($produk5);
?>