<?php
    include "class/sinhvien.php";
    $p = new sinhvien();
    $masv = $_REQUEST["masv"];
    if(isset($masv)){
        $p->themxoasua("DELETE FROM sinhvien where masv='$masv'");
    }
?>