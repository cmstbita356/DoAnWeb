<?php
    include_once "../Models/product_module.php";
    include_once "../Models/maker_module.php";

    $page = isset($_GET["page"])? $_GET["page"]:1;
    $page = is_numeric($page)?$page : 1;
    $pagesize = 6;
    $from = ($page-1)*$pagesize;
    $pm = new product_module();
    $ListProduct = $pm->getProductListLimited($from, $pagesize); 
    echo
    "
        <table style='font-size: 20px; margin-top: 10px;'>
            <tr>
                <th style='text-align: center; '>Id</th>
                <th style='text-align: center; '>Name</th>
                <th style='text-align: center; '>Price</th>
                <th style='text-align: center; '>Image</th> 
                <th style='text-align: center; '></th> 
            </tr>
    ";
    foreach($ListProduct as $Product)
    {
        echo
        "
            
                <tr>
                <td style='text-align: center; width: 50px;'>".$Product->getid()."</td>
                <td style='text-align: center; width: 400px;'>$Product->name</td>
                <td style='text-align: center; width: 200px;'>".number_format($Product->price)."</td>
                <td><img src='".$Product->img."' style='width: 200px;'></td>
                <td style='text-align: center; width: 200px;'>
                    <a href='chitietsp.php?id=".$Product->getid()."'>Xem chi tiết</a><br>
                    <a href='suasanpham.php?id=".$Product->getid()."'>Sửa</a><br>
                    <a href='../Controllers/xulyxoasp.php?id=".$Product->getid()."'>Xóa</a>
                </td>
                </tr>
        ";
    }
    echo "</table>";
    $total = ceil($pm->CountAll()/$pagesize);
    echo "
    <div style='display: inline-flex; background-color: #A3A2A0; font-size: 20px; margin-left: 45%; margin-top: 10px;'>
    Page: ";
    for($i = 1; $i <= $total; $i++)
    {
        echo
        "
            <a style='color: black; margin-left: 5px;' href='./?page=".$i."'>$i</a>|
        ";
    }
    echo "</div>"
?>