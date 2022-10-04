<?php
    session_start();
    include_once "../Models/user_module.php";
    include_once "../Models/db_module.php";
    include_once "../Models/validate_module.php";
    $link = null;
    ConnectDatabase($link);
    if(isset($_POST['username']) && isset($_POST['password1']) && isset($_POST['password2']) && isset($_POST['email']))
    {
        $username = $_POST['username'];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];
        $email = $_POST['email'];
        if($password1 != $password2)
        {
            header("Location: ../Views/dangky.php?msg=dk_notduplicate");
        }
        else if(!ValidateLenUp($username))
        {
            header("Location: ../Views/dangky.php?msg=dk_validatelenup");
        }
        else if(!ValidateEmail($email))
        {
            header("Location: ../Views/dangky.php?msg=dk_validateemail");
        }
        else if(!ValidateExistUsername($link, $username))
        {
            dangky($link, $username, $password1, $email, 2);
            header("Location: ../Views/dangnhap.php?msg=dk_done");
        }
        else
        {
            header("Location: ../Views/dangky.php?msg=dk_existusername");
        }
    }
    else
    {
        header("Location:../Views/dangky.php?msg=dk_false");
    }
?>