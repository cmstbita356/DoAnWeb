<?php
    include_once "../Models/db_module.php";
    include_once "../Models/product_module.php";

    if(isset($_GET['keyword']))
    {
        $link = null;
        ConnectDatabase($link);
        $key = $_GET['keyword'];
        $page = isset($_GET["page"])? $_GET["page"]:1;
        $page = is_numeric($page)?$page : 1;
        $pagesize = 6;
        $from = ($page-1)*$pagesize;
        $pm = new product_module();
        $ListProduct = $pm->getProductListLimitedByName($key, $from, $pagesize);
        echo 
        "   
            <div style='text-align: center'>
                <h1>Kết quả tìm kiếm của '".$key."'</h1>
            </div>
        ";
        echo "<div class='row mt-5'>";
        foreach($ListProduct as $Product)
        {
            echo
            "
            <div class='col-md-4 col-12' >
                <div class='card' style='width: 100%;'>
                    <a href='chitietsp.php?id=".$Product->getId()."'>
                        <img class='card-img-top' src='".$Product->img."' alt='hình' style='width: 100%; height: 400px'>
                    </a>
                    <div class='card-body' style='text-align: center'>
                    <h2 class='card-title'>$Product->name</h2>
                    <p class='card-text'>Giá: ".number_format($Product->price)."</p>
                    <a href='chitietsp.php?id=".$Product->getId()."' class='btn btn-danger' style='Font-size: 30px'>Xem chi tiết</a>
                    </div>
                </div>
            </div>
            ";
        }
        echo "</div>";
        $total = ceil($pm->Count_TK($key)/$pagesize);
        echo "
        <div style='display: inline-flex; background-color: #A3A2A0; font-size: 20px; margin-left: 45%; margin-top: 10px;'>
        Page: ";
        for($i = 1; $i <= $total; $i++)
        {
            echo
            "
                <a style='color: black; margin-left: 5px;' href='./?page=".$i."&keyword=$key'>$i</a>|
            ";
        }
        echo "</div>";
    }
    
    
?>