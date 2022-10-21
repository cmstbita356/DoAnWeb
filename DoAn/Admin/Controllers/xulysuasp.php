<?php
    include_once "../Models/db_module.php";
    include_once "../Models/maker_module.php";

    if(isset($_POST['action']))
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $desc = $_POST['desc'];
        $img = $_POST['img'];
        $id_maker = $_POST['id_maker'];
        $time = $_POST['time'];
        $link = null;
        $mm = new maker_module();
        if($mm->checkId($id_maker))
        {
            ConnectDatabase($link);
            ExecuteNonQuery($link, "update `tbl_product` set `name`='".$name."',`price`=$price,`desc`='".$desc."',`img`='".$img."',`id_maker`=".$id_maker.",`time`='".$time."' WHERE id = $id");
            header("Location: ../Views/");
        }
        else
        {
            echo "asd";
        }
        
    }
?>