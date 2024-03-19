<?php
    include "myclass/docsinhvien.php";
    $p = new docapi();
    if(isset($_REQUEST["btnXoa"])){
        $masv = $_REQUEST["masv"];
        $p->docjson("http://localhost:8000/CongNgheMoi/1_Project_PHP_TaoAPI/xoasinhvien.php?masv='$masv'");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../1_Project_PHP_TaoAPI/xoasinhvien.php" method="get">
        <table align="center">
            <tr>
                <td>Mã sinh viên cần xóa</td>
                <td><input type="text" name="masv"></td>
            </tr>
            <tr>
                <td colspan="1"></td>
                <td><input type="submit" value="Xóa" name="btnXoa"></td>
            </tr>
        </table>
    </form>
</body>
</html>