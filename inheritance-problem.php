<?php
class Produk {

    public $judul ,
            $penulis ,
            $penerbit ,
            $harga,
            $jmlHalaman,
            $waktuMain,
            $tipe;

    public function __construct($judul = "judul", $penerbit= "penerbit" , 
                                $penulis = "penulis", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap(){
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}";
        if ($this->tipe == "Komik") {
            $str .= " - {$this->jmlHalaman} Halaman.";
        } elseif ($this->tipe == "Game"){
            $str .= " - {$this->waktuMain} Jam.";
        }
        return $str;
    }

}
class CetakInfoProduk{
    public function cetak( $produk ){
        $str = "{$produk->judul}| {$produk->getlabel()} | (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0 ,"Komik");
$produk2 = new Produk("Uncharted", "Neli K", "Sony Entertaiment", 35000, 0 , 50, "Game");
// $produk3 = new Produk("Dragon Ball");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();