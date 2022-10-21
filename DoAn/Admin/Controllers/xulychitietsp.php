<?php
    include_once "../Models/db_module.php";
    include_once "../Models/product_module.php";
    include_once "../Models/maker_module.php";

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
                    <li class='breadcrumb-item '><a href='./' >Sản phẩm</a></li> 
                    <li class='breadcrumb-item '>Chi tiết sản phẩm</li> 
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
                    <a href='suasanpham.php?id=".$product->getid()."'><button id='btn_ctsp'>Sửa</button></a> <br><br>
                    <a href='../Controllers/xulyxoasp.php?id=".$product->getid()."'><button id='btn_ctsp'>Xóa</button></a>
                </div>
                <div class='col-md-12 col-12'>
                    <h1><strong>Mô tả sản phẩm</strong></h1>
                    <p id='mota_ctsp'>$product->desc</p>
                </div>
            </div>
        ";
    }
?>