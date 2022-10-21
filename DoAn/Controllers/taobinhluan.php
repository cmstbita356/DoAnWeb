<?php
    include_once "../Models/comment_module.php";

    if(isset($_GET['comment']))
    {
        session_start();
            if(isset($_SESSION['username']))
            {
                $str = 
                "
                    <button id='dang_binhluan' type='button' onclick='Comment()' class='btn-binhluan btn btn-success ml-5' style='font-size: 20px; border-radius: 10px;'>
                        Đăng
                    </button>
                ";
            }
            else
            {
                $str = 
                "
                    <button id='dang_binhluan' type='button' onclick='Comment()' class='btn-binhluan btn btn-success ml-5' style='font-size: 20px; border-radius: 10px;' disabled>
                        Đăng
                        <span class='tooltiptext'>Vui lòng đăng nhập</span>
                    </button>
                ";
            }
        if($_GET["comment"] != "")
        {
            $comment = new Comment($_SESSION['username'], $_GET['comment'], date("d/m/Y"));
            $cmm = new comment_module();
            $cmm->CreateComment($comment, $_GET['id']);
        }
    }
?>