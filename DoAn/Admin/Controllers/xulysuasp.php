<?php
    include_once "../Models/db_module.php";

    if(isset($_GET['action']))
    {
        $id = $_GET['id'];
        $name = $_GET['name'];
        $price = $_GET['price'];
        $desc = $_GET['desc'];
        $img = $_GET['img'];
        $brand = $_GET['brand'];
        $time = $_GET['time'];
        $link = null;
        ConnectDatabase($link);
        ExecuteNonQuery($link, " UPDATE `tbl_product` SET,`name`='$name',`price`=$price,`desc`='$desc',`img`='$img',`brand`='$brand',`time`='$time' WHERE id = $id");
        header("Location: ../Views/");
    }
?>