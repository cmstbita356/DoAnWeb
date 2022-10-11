<?php
    include_once "db_module.php";

    function dangxuat()
    {
        if(isset($_SESSION['username']))
        {
            unset($_SESSION['username']);
            unset($_SESSION['quyen']);
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