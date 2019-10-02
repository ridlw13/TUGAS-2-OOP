<?php

// define('Nama', 'Muhammad Ridlwan');
// echo Nama;

// echo "<br>";

// const Umur = 32;
// echo Umur;

// class Coba {
//     const Nama = 'Muhammad Ridlwan';
// }
// echo Coba::Nama;

// echo __FILE__;


class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;
?>