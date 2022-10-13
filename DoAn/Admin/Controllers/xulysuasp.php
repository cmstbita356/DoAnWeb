<?php
    include_once "../Models/db_module.php";

    if(isset($_POST['action']))
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $desc = $_POST['desc'];
        $img = $_POST['img'];
        $brand = $_POST['brand'];
        $time = $_POST['time'];
        $link = null;
        ConnectDatabase($link);
        ExecuteNonQuery($link, "update `tbl_product` set `name`='".$name."',`price`=$price,`desc`='".$desc."',`img`='".$img."',`brand`='".$brand."',`time`='".$time."' WHERE id = $id");
        header("Location: ../Views/");
    }
?>