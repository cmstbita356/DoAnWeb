<?php
    include_once "../Models/db_module.php";
    include_once "../Models/product_module.php";
    include_once '../Models/comment_module.php';

    if(isset($_GET['id']))
    {
        $pm = new product_module();
        $product = $pm->getProduct($_GET['id']);
        $price = number_format($product->price);
        echo
        "
            <nav aria-label='breadcrumb' style='font-size: 20px; margin-top: 20px'>
                <ol class='breadcrumb'>
                    <li class='breadcrumb-item '><a href='./' >Trang chủ</a></li> 
                    <li class='breadcrumb-item active'>Sản phẩm</li> 
                    <li class='breadcrumb-item active'>$product->name</li> 
                </ol>
            </nav>
            <div class='row'>
                <div class='col-md-6 col-12'>
                    <img id='img_ctsp' src='$product->img' alt=''>
                </div>
                <div class='col-md-6 col-12'>
                    <h1><strong>Chi tiết sản phẩm</strong></h1>
                    <p id='name_ctsp'>$product->name</p>
                    <p id='price_ctsp'>$price VNĐ</p>
                    <p id='nsx_ctsp'>Nhà sản xuất: $product->brand</p>
                    <p id='state_ctsp'>Trạng thái xe: $product->time</p>
                    <a href='../Controllers/xulygiohang.php?action=them&id=".$product->getId()."&img=$product->img&ten=$product->name&gia=$product->price&sl=1'><button id='btn_ctsp'>Vào giỏ hàng</button></a>
                </div>
                <div class='col-md-12 col-12'>
                    <h1><strong>Mô tả sản phẩm</strong></h1>
                    <p id='mota_ctsp'>$product->desc</p>
                </div>
            </div>
        ";

        echo "<p style='font-size: 40px;'>Bình luận</p>";
        $cmm = new Comment_Module();
        $ListComment = $cmm->GetListComments($_GET['id']);
        echo "<div class='border mt-5 mb-5' id='binhluan'>";
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
            <form action='../Controllers/xulybinhluan.php'>
                <input name='id' type='hidden' value='$id'>
                <img src='../images/user.png' alt='img' class='p-3 ml-2 rounded-circle' style='width:80px; display: inline-block'>
                <input id ='msg_binhluan' type='text' placeholder='Bình luận' name='comment'>
                <button id='dang_binhluan' type='submit' class='btn btn-success ml-5' style='font-size: 20px; border-radius: 10px;'>Đăng</button>
            </form>
            </div>
        ";
    }
?>