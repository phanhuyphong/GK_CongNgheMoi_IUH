<?php
    include "myclass/docsinhvien.php";
    $p = new docapi();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $p->docjson_xemsinhvien("http://localhost:8000/CongNgheMoi/1_Project_PHP_TaoAPI/xemsinhvien.php");
    ?>
</body>
</html>