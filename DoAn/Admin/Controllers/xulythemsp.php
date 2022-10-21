<?php
    include_once "../Models/db_module.php";
    include_once "../Models/maker_module.php";

    if(isset($_GET['action']))
    {
        $name = $_GET['name'];
        $price = $_GET['price'];
        $desc = $_GET['desc'];
        $img = $_GET['img'];
        $id_maker = $_GET['id_maker'];
        $time = $_GET['time'];
        $mm = new maker_module();
        if($mm->CheckId($id_maker))
        {
            $link = null;
            ConnectDatabase($link);
            ExecuteNonQuery($link, "insert into tbl_product (`name`, `price`, `desc`, `img`, `id_maker`, `time`, `state`) values ('".$name."', ".$price.", '".$desc."', '".$img."', ".$id_maker.", '".$time."', 1)");
            header("Location: ../Views/");
        }
        else
        {
            header("Location: ../Views/themsanpham.php?error=them");
        }
        
    }
?>