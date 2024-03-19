<?php
    include "class/sinhvien.php";
    $p = new sinhvien();
    $masv = $_REQUEST["masv"];
    $hodem = $_REQUEST["hodem"];
    $ten = $_REQUEST["ten"];
    if(isset($masv) && isset($hodem) && isset($ten)){
        $p->themxoasua("UPDATE sinhvien SET hodem='$hodem', ten='$ten' where masv='$masv'");;
    }
?>