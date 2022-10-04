<?php
    session_start(); 
    include_once "../Models/cart_module.php";
    if(isset($_GET["action"]))
    {
        $action = $_GET["action"];
        if($action=="them")
        {
            $hang=array("id"=>$_GET["id"], "img"=>$_GET["img"], "ten"=>$_GET["ten"], "gia"=>$_GET["gia"], "soluong"=>$_GET["sl"]);
            ThemHang($hang);
            header("Location: ../Views/giohang.php");
        }
        else if($action == "Xóa")
        {
            XoaHang($_GET["id"]);
            header("Location: ../Views/giohang.php");
        }
        else if($action == "Cập nhật")
        {
            CapNhat($_GET["id"], $_GET['sl']);
            header("Location: ../Views/giohang.php");
        }
    }
    else
    {
        header("Location: ../Views/giohang.php");
    }
?>