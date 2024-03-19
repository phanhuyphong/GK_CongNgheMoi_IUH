<?php
    include "myclass/docsinhvien.php";
    $p = new docapi();
    if(isset($_REQUEST["btnUpload"])){
        $masv = $_REQUEST["masv"];
        $hodem = $_REQUEST["hodem"];
        $ten = $_REQUEST["ten"];
        $p->docjson("http://localhost:8000/CongNgheMoi/1_Project_PHP_TaoAPI/suasinhvien.php?masv='$masv'&hodem='$hodem'&ten='$ten'");
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
    <form action="../1_Project_PHP_TaoAPI/suasinhvien.php" method="get">
        <table align="center">
            <tr>
                <td>Mã sinh viên</td>
                <td><input type="text" name="masv" id=""></td>
            </tr>
            <tr>
                <td>Họ đệm</td>
                <td><input type="text" name="hodem" id=""></td>
            </tr>
            <tr>
                <td>Tên</td>
                <td><input type="text" name="ten" id=""></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="1"><input type="submit" value="Sửa" name="btnUpload"></td>
            </tr>
        </table>
    </form>
</body>
</html>