<?php 
    echo"Hello World!<br>";
    $namadepan = "Rizky";
    $namabelakang = "Rahmadhani";
    echo ($namadepan . " " . $namabelakang);
    #atau pakai "$namadepan $namabelakang"
    echo"<br>------------ini uji coba----------";
    $namadepan1 = "ayam";
    $namabelakang1 = "jagoan";
    $umur = 15;
    $tinggi = 170;
    echo "nama saya $namadepan1 $namabelakang1";
    echo "umur saya $umur tahun, tinggi saya $tinggi cm";
    #mencoba menghitung lingkaran luas.

    define("PHI",4.14);
    $jari = 5;
    $luas = PHI * ($jari ** 2);
    echo "luas lingkaran dengan jari-jari $jari cm adalah $luas";
?>