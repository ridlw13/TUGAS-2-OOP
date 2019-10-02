<?php
class Produk {

    public $judul ,
            $penulis ,
            $penerbit ,
            $harga,
            $waktuMain;

    public function __construct($judul = "judul", $penerbit= "penerbit" , 
                                $penulis = "penulis", $harga = 0, $waktuMain = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->waktuMain = $waktuMain;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        
        return $str;
    }

}

class Komik extends Produk {
    public $jmlHalaman;

    public function __construct($judul = "judul", $penerbit= "penerbit" , 
                                $penulis = "penulis", $harga = 0, $jmlHalaman = 0){
                                    parent::__construct(judul = "judul", $penerbit= "penerbit" , 
                                    $penulis = "penulis", $harga = 0);
                                    
                                    $this->jmlHalaman = $jmlHalaman;
                                
                                }
    public function getInfoKomik(){
        $str = "Komik : ". parent::getInfoProduk() ." - {$this->jmlHalaman} Halaman).";
        return $str;
    }
}
class Game extends Produk {
    public function getInfoGame(){
        $str = "Game : ". parent::getInfoProduk() "- {$this->waktuMain} Jam).";
        return $str;
    }
}



class CetakInfoProduk{
    public function cetak( $produk ){
        $str = "{$produk->judul}| {$produk->getlabel()} | (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000,  0);
$produk2 = new Game("Uncharted", "Neli K", "Sony Entertaiment", 35000, 50);
// $produk3 = new Produk("Dragon Ball");

echo $produk1->getInfoKomik();
echo "<br>";
echo $produk2->getInfoGame();