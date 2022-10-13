<?php
    include_once "../Models/product_module.php";
    include_once "../Models/product.php";
    if(isset($_GET["id"]))
    {
        $pm = new Product_Module();
        $pro = $pm->getProduct($_GET['id']);
        if($pro->time == 'Cũ')
        {
            $selectcu = 'selected';
            $selectmoi = '';
        }
        else
        {
            $selectmoi = 'selected';
            $selectcu = '';
        }
        echo
        "
            <form id='suasp' action='../Controllers/xulysuasp.php' method='post'>
                <h1 style='text-align: center'>Thêm sản phẩm</h1>
                <div class='form-group'>
                    <label for='id'>Id sản phẩm:</label>
                    <input type='text'  value='".$pro->getId()."' disabled>
                    <input type='text' name='id' value='".$pro->getId()."' style='display: none'>
                </div>
                <div class='form-group'>
                    <label for='name'>Tên sản phẩm:</label>
                    <input type='text' id='name' name='name' value='$pro->name'>
                </div>
                <div class='form-group'>
                    <label for='price'>Giá sản phẩm:</label>
                    <input type='text' id='price' name='price' value='$pro->price'>
                </div>
                <div class='form-group'>
                    <label for='desc'>Mô tả:</label><br>
                    <textarea id='desc' name='desc' rows='4' cols='55'>
                        $pro->desc
                    </textarea>
                </div>
                <div class='form-group'>
                    <label for='img'>Hình ảnh: </label>
                    <input type='text' id='img' name='img' maxlength='1000' value='$pro->img'>
                </div>
                <div class='form-group'>
                    <label for='brand'>Nhãn hiệu: </label>
                    <input type='text' id='brand' name='brand' value='$pro->brand'>
                </div>
                <div class='form-group'>
                    <label for='time'>Thời gian: </label>
                    <select id='time' name='time' class='form-control form-control-lg select' style='height: 50px; width: 90%; font-size: 20px;'>
                        <option value='Cũ' $selectcu >Cũ</option>
                        <option value='Mới' $selectmoi >Mới</option>
                    </select>
                </div>
                <div class='form-group'>
                    <input id='submit-sua' type='submit' Value='Sửa sản phẩm' name='action'>
                </div>
            </form>
        ";
    }
    
?>