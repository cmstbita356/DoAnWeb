<?php
    include_once "../Models/product_module.php";
    include_once '../Models/comment_module.php';
    include_once '../Models/maker_module.php';

    if(isset($_GET['id']))
    {
        $pm = new product_module();
        $mm = new maker_module();
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
                    <p id='nsx_ctsp'>Nhà sản xuất: ".$mm->GetNameById($product->id_maker)."</p>
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
        echo "<div class='border mt-5 mb-5' id='binhluan'>";
            include_once 'xembinhluan.php';
        echo "</div>";
    }
?>