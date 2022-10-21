<?php
    include_once '../Models/comment_module.php';
    
    if(isset($_GET['id']))
    {
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

        include_once "taobinhluan.php";
       
        $cmm = new Comment_Module();
        $ListComment = $cmm->GetListComments($_GET['id']);
        foreach ($ListComment as $comment)
        {
            echo
            "
                <div class='media'>
                    <img src='../images/user.png' alt='img' class='p-3 ml-2 rounded-circle' style='width:80px'>
                    <div class='media-body p-3' style='font-size: 20px;'>
                        <h3> <strong>$comment->username</strong> <small> <em>$comment->date</em></small></h3>
                        <p>$comment->msg</p>
                    </div>
                </div>
            ";
        }
        $id=$_GET['id'];
        echo 
        "
            <form>
                <img src='../images/user.png' alt='img' class='p-3 ml-2 rounded-circle' style='width:80px; display: inline-block'>
                <input id ='msg_binhluan' type='text' placeholder='Bình luận' name='comment'>
                $str
            </form>
        ";
    }
?>
