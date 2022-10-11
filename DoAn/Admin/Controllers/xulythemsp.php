<?php
    include_once "../Models/db_module.php";

    if(isset($_GET['action']))
    {
        $name = $_GET['name'];
        $price = $_GET['price'];
        $desc = $_GET['desc'];
        $img = $_GET['img'];
        $brand = $_GET['brand'];
        $time = $_GET['time'];
        $link = null;
        ConnectDatabase($link);
        ExecuteNonQuery($link, "insert into tbl_product (`name`, `price`, `desc`, `img`, `brand`, `time`, `state`) values ('".$name."', ".$price.", '".$desc."', '".$img."', '".$brand."', '".$time."', 1)");
        header("Location: ../Views/");
    }
?>