<?php

// class ContohStatic {
//     public static $angka = 1;

//     public static function halo(){
//         return "halo " . self::$angka++ . "kali .";
//     }
// }

// echo ContohStatic::$angka;
// echo "<hr>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();

class Contoh {
    public static $angka = 1;

    public static function halo(){
        return "halo " . self::$angka++ . " kali . <br>";
    }

}


