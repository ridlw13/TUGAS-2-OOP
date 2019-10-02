<?php
class Produk {

    private      $judul ,
                $penulis ,
                $penerbit,
                $harga,
                $diskon = 0;
    
    public function __construct($judul = "judul", $penerbit= "penerbit" , 
                                $penulis = "penulis", $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setJudul( $judul ){
        $this->judul = $judul;
    }

    public function getJudul(){
        return $this->judul;
    }

    public function setPenulis( $penulis ){
        $this->penulis = $penulis;
    }

    public function getPenulis(){
        return $this->penulis;
    }

    public function setPenerbit( $penerbit ){
        $this->penerbit = $penerbit;
    }

    public function getPenerbit(){
        return $this->penerbit;
    }

    public function setHarga($harga) {
        $this->harga = $harga;
    }

    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }
    public function getDiskon(){
        return $this->diskon;
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

    public function __construct($judul = "judul", $penerbit= "penerbit" ,$penulis = "penulis", $harga = 0, $jmlHalaman = 0){
            parent::__construct($judul, $penerbit, $penulis, $harga);
            $this->jmlHalaman = $jmlHalaman ;

}
    public function getInfoKomik(){
        $str = "Komik : ". parent::getInfoProduk() ." - {$this->jmlHalaman} Halaman).";
        return $str;
    }
}
class Game extends Produk {
    public $waktuMain;

    public function __construct($judul = "judul", $penerbit= "penerbit" ,$penulis = "penulis", $harga = 0, $waktuMain = 0){
            parent::__construct($judul, $penerbit, $penulis, $harga);
            $this->waktuMain = $waktuMain;

    }

    public function getInfoGame(){
        $str = "Game : ". parent::getInfoProduk() ." - {$this->waktuMain} Jam).";
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

echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();

echo "<hr>";
$produk2->setJudul("Apaa aja lah");
echo $produk2->getJudul();