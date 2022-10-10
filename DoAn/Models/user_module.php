<?php
    include_once "db_module.php";

    function dangky($link, $username, $password, $email, $idquyen)
    {
        return ExecuteNonQuery($link, "insert into tbl_user (username, password, email, id_quyen) values ('".mysqli_real_escape_string($link, $username)."', '".md5($password)."', '".$email."', $idquyen)");
    }
    function dangnhap($link, $username, $password)
    {
        $result = ExecuteQuery($link, "select count(*), id_quyen from tbl_user where username='".mysqli_real_escape_string($link, $username)."' and password ='".md5($password)."'");
        $rows = mysqli_fetch_row($result);
        if($rows[0] > 0)
        {
            $result = ExecuteQuery($link, "select ten from tbl_quyen where id = $rows[1]");
            $rows = mysqli_fetch_row($result);
            $_SESSION['username'] = $username;
            $_SESSION['quyen'] = $rows[0];
            mysqli_free_result($result);
            return true;
        }
        else
        {
            mysqli_free_result($result);
            return false;
        }
    }
    function dangxuat()
    {
        if(isset($_SESSION['username']))
        {
            unset($_SESSION['username']);
            unset($_SESSION['quyen']);
            if(isset($_SESSION['giohang']))
            {
                unset($_SESSION['giohang']);
            }
            return true;
        }
        else
        {
            return false;
        }
    }
    function phanquyen($link, $iduser, $idquyen)
    {
        return ExecuteNonQuery($link, "update tbl_user set id_quyen = $idquyen where id = $iduser");
    }
?>