<?php
    include "../Models/user_module.php";

    if(isset($_GET['action']))
    {
        $link = null;
        ConnectDatabase($link);
        $id = $_GET['id'];
        $id_quyen = $_GET['id_quyen'];
        phanquyen($link, $id, $id_quyen);
        header("Location: ../Views/phanquyen.php?msg=done");
    }
?>