<?php
    class sinhvien{
        function connect(& $conn){
            $conn = mysqli_connect("localhost","usercnmoi","123456","dbcnmoi");
            if(!$conn){
                echo "Khong co du lieu";
                exit();
            }
            else{
                mysqli_select_db($conn, "dbcnmoi");
                $conn->set_charset("utf-8");
                return $conn;
            }
        }
        function xemsv($sql){
            $link = $this->connect($conn);
            $ketqua = mysqli_query($link, $sql);
            $i = mysqli_num_rows($ketqua);
            if($i > 0){
                $dulieu = array();
                while($row = mysqli_fetch_array($ketqua)){
                    $id = $row["id"];
                    $masv = $row["masv"];
                    $hodem = $row["hodem"];
                    $ten = $row["ten"];
                    $dulieu[]= array("id"=>$id, "masv"=>$masv, "hodem"=>$hodem, "ten"=>$ten);
                }
                header("Content-Type: application/json; charset='utf-8'");
                echo json_encode($dulieu);
            }
        }
        function themxoasua($sql){
            $link = $this->connect($conn);
            if(mysqli_query($link, $sql)){
                return 1;
            }
            return 0;
        }
    }
?>