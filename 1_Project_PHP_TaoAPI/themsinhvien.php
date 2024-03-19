<?php
    include "class/sinhvien.php";
    $p = new sinhvien();
    $masv = $_REQUEST["masv"];
    $hodem = $_REQUEST["hodem"];
    $ten = $_REQUEST["ten"];
    if(isset($masv) && isset($hodem) && isset($ten)){
        $p->themxoasua("INSERT INTO sinhvien(masv, hodem, ten) values ('$masv','$hodem', '$ten')");
    }
?>