<?php
    session_start();
    include_once "../Models/user_module.php";
    include_once "../Models/db_module.php";
    include_once "../Models/validate_module.php";
    
    $link = null;
    ConnectDatabase($link);
    if(isset($_POST["username"]) && isset($_POST["password"]))
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        if(dangnhap($link, $username, $password))
        {
            if($_SESSION['quyen'] == "user")
            {
                header("Location: ../Views/dangnhap.php?msg=dn_done");
            }
            else
            {
                header("Location: ../Admin/Views/");
            }
        }
        else
        {
            header("Location: ../Views/dangnhap.php?msg=dn_notduplicate");
        }
    }
    else
    {
        header("Location: ../Views/dangnhap.php?msg=dn_false");
    }
?>