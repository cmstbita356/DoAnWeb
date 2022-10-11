<?php
    include_once "../Models/db_module.php";
    if(isset($_GET['id']))
    {
        $link = null;
        ConnectDatabase($link);
        $query = "update `tbl_product` set `state`= 0 where id = ".$_GET['id']."";
        ExecuteNonQuery($link, $query);
        header("Location: ../Views/");
    }
    
?>