<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/Sidebar.css">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/banner.css">
    <link rel="stylesheet" href="../styles/section.css">
    <link rel="stylesheet" href="../styles/article.css">
    <link rel="stylesheet" href="../styles/footer.css">
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/e50213ec74.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php session_start(); ?>
    <div id="container">
        <div id="header" style="position: relative ;width: 100%">
                <div class="header-top-wrap">
                    <div class="header-top-left">
                        <p>
                            <i class="fa-solid fa-envelope"></i>cmstbita356@gmail.com | 
                            <i class="fa-solid fa-clock"></i>7:00AM to 5:00PM</p>
                    </div>
                    <div class="header-top-right">
                        <div>
                            <a href="https://www.facebook.com/nam.thang.7121" target="_blank">
                                <i class="media-header fa-brands fa-facebook"></i>
                            </a>
                            <a href="https://www.youtube.com/channel/UCPk5dOJ5jQGp70cFfB6hbXQ" target="_blank">
                                <i class="media-header fa-brands fa-youtube"></i>
                            </a>
                            <a href="https://discord.gg/AXK2TuV8" target="_blank">
                                <i class="media-header fa-brands fa-discord"></i>
                            </a>
                            <i class="fa-solid fa-user"></i>
                            <?php
                                if (isset($_SESSION['username']))
                                {
                                    echo
                                    "
                                        <label for='ckb_tk' id='lb_tk'>".$_SESSION['username']."</label><br>
                                        <input type='checkbox' id='ckb_tk'>
                                        <div id='tk'>
                                            <a href='#'>Cài đặt tài khoản</a><br>
                                            <a href='../controllers/xulydangxuat.php'>Đăng xuất</a>
                                        </div>
                                        
                                        
                                    ";
                                }
                                else
                                {
                                    echo "<a href='dangnhap.php'>Đăng nhập</a> | <a href='dangky.php'>Đăng ký</a>";
                                }
                            ?>
                            
                            </div>
                        
                        
                    </div>
                </div> 
                <div class="header-main-wrap" >
                    <div class="header-main-action">
                        <input type="checkbox" id="check">
                        <label for="check" id="lb">
                            <i class="fa-solid fa-bars" id="hamburger"></i>
                            <span id="cancel">&times;</span>
                        </label>  
                        <div id="sidebar">
                            <div class="sidebar-header">
                                <img src="../images/car-logo.png" alt="car-logo">
                            </div>
                            <ul>
                                <li class="active"><a href="./" >Trang chủ</a></li>
                                <li>
                                    <a href="#pagesubmenu" class="dropdown-toggle" data-toggle="collapse" aria-expanded="false">
                                        Trang khác
                                    </a>
                                    <ul class="collapse" id="pagesubmenu">
                                        <li class="pl-4"><a href="#">Về chúng tôi</a></li>
                                        <li class="pl-4"><a href="#">Trang đăng nhập</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#blogsubmenu" class="dropdown-toggle" data-toggle="collapse" aria-expanded="false">Blog</a>
                                    <ul class="collapse" id="blogsubmenu">
                                        <li class="ml-4"><a href="#">Blog của chúng tôi</a></li>
                                        <li class="ml-4"><a href="#">Chi tiết blog</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" target="_blank">Liên hệ</a></li>
                                <li><a href="#" target="_blank">Feedback</a></li>
                            </ul>
                        </div>
                        <div class="searchBar">
                            <form action="timkiem.php" id="searchBox">
                                <input type="text" id="searchText" placeholder="Nhập từ khoá" name="keyword">
                                <button type="submit" id="searchBtn"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </form>
                        </div>
                        <div class="cart-wrap">
                            <div class="cart"><i class="fa-solid fa-cart-shopping"></i></div>          
                            <div class="cart-show">
                                <?php
                                    if(isset($_SESSION['giohang']))
                                    {
                                        $giohang = $_SESSION["giohang"];
                                        foreach($giohang as $k=>$v)
                                        {
                                            echo
                                            "
                                                <div>
                                                    <div style='float:left'>
                                                        <img id='img-cart-bar' src='".$v['img']."'>
                                                    </div>
                                                    <div style='float:left'>
                                                        ".$v['ten']." <br>
                                                        ".number_format($v['gia'])." VND <br>
                                                    </div>
                                                    <br style='clear:both'>
                                                </div>
                                            ";
                                        }
                                        echo 
                                        "   
                                            <a href='giohang.php' style='color: #EE3B0B'>
                                                <button style='width:100%; background-color: #3D3838'>
                                                    Xem chi tiết
                                                </button>
                                            </a>
                                        ";
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div> 
    
        <div class="section">
            <nav aria-label="breadcrumb" style="font-size: 20px; margin-top: 20px">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item "><a href="./" >Trang chủ</a></li> 
                    <li class="breadcrumb-item active">Giỏ hàng</li> 
                </ol>
            </nav>
            <div class="row">
                <div class="col-md-8 col-8">
                <?php
                    include_once "../Models/cart_module.php";
                    if(isset($_SESSION['giohang']))
                    {
                        $giohang = $_SESSION["giohang"];
                        foreach($giohang as $v)
                        {
                            echo
                            "
                                <div class='product-cart border shadow'>
                                    <div class='img-cart-product' style='float:left'>
                                        <img src='".$v['img']."' style='width: 300px;'>
                                    </div>
                                    <div class='info-cart-product' style='float:left'>
                                        Id sản phẩm: ".$v['id']." <br>
                                        Tên sản phẩm: ".$v['ten']." <br>
                                        Giá sản phẩm: ".number_format($v['gia'])." VND <br>
                                        Số lượng mua: ".$v['soluong']."
                                    </div>
                                    <br style='clear:both'>
                                    <div class='button-cart'>
                                        <form id='form-xoa' method='get' action='../Controllers/xulygiohang.php?id=1'>
                                            <input value='".$v['id']."' name='id' style='display:none'>
                                            <input id='xoa-cart' type='submit' value='Xóa' name='action'><br>
                                        </form>
                                        <form method='get' action='../Controllers/xulygiohang.php'>
                                            <input value='".$v['id']."' name='id' style='display:none'>
                                            <input id='sl-cart' type='text' placeholder='Nhập số lượng' name='sl'>
                                            <input id='capnhat-cart' type='submit' value='Cập nhật' name='action'>
                                        </form>
                                    </div>
                                    <br style='clear:both'>
                                </div>
                                <br style='clear:both'>

                                
                            ";
                        }
                    }
                ?>
                </div>
                <div class="col-md-4 col-4" style='background-color: #ECB99F'>
                    <p style='font-size: 40px; text-align: center'>Thông tin giỏ hàng</p>
                    <p style='font-size: 20px;'>Số lượng sản phẩm: <?php echo tinhslsp(); ?></p>
                    <p style='font-size: 20px; color: red;'> Tổng số tiền: <?php echo number_format(tinhtien())." VND"; ?></p>

                    <p style='font-size: 40px; text-align: center'>Thanh toán</p>
                    <form action="" style="font-size: 20px;">
                        <label for="diachi">Địa chỉ: </label>
                        <input style='width: 70%' type="text" id="diachi" name="diachi"><br>
                        <input style='margin-top: 20px;' type="submit" value="Thanh toán">
                    </form>
                </div>
            </div>
        </div>
        <div class="footer">
                <div class="row" id="footer-logoall">
                    <div class="col-md-4 col-12" id="footer-car-logo">
                        <img src="../images/car-logo.png" alt="logo" style="width: 200px;">
                    </div>
                    <div class="col-md-8 col-12" id="footer-otherlogo">
                        <img class="footer-logo" src="../images/car-logo-2.png" alt="" >
                        <img class="footer-logo" src="../images/car-logo-3.png" alt="">
                        <img class="footer-logo" src="../images/car-logo-4.png" alt="">
                        <img class="footer-logo" src="../images/car-logo-5.png" alt="">
                    </div>
                </div>
                <div class="footer-main">
                    <div class="row">
                        <div class="footer-wrap-1 col-md-4 col-12" style="background-color: black">
                            <div class="media" id="phone-contact">
                                <i class="fa-solid fa-phone" id="footer-icon"></i>
                                <div class="media-body p-3">
                                    <p>Điện thoại:</p>
                                    <p>0767653961</p>
                                </div>
                            </div>
                            <div class="media" id="email-contact">
                                <i class="fa-solid fa-envelope" id="footer-icon"></i>
                                <div class="media-body p-3">
                                    <p>Email:</p>
                                    <p>cmstbita356@gmail.com</p>
                                </div>
                            </div>
                            <div class="media" id="address-contact">
                                <i class="fa-solid fa-location-dot" id="footer-icon"></i>
                                <div class="media-body p-3">
                                    <p>Địa chỉ:</p>
                                    <p>17/18/15/22/30/1 Liên Khu 5-6</p>
                                </div>
                            </div>
                        </div>
                        <div class="footer-wrap-2 col-md-4 col-12" style="background-color: darkgray">
                            <div id="footer-main2">
                                <p>Thông tin chung</p>
                                <a href="#"><p>Về chúng tôi</p></a>
                                <a href="#"><p>Tuyển dụng</p></a>
                                <a href="#"><p>Liên hệ</p></a>
                                <a href="#"><p>Trợ giúp</p></a>
                            </div>
                        </div>
                        <div class="footer-wrap-3 col-md-4 col-12" style="background-color: darkgray">
                            <div id="footer-main3">
                                <p>Cần mua xe</p>
                                <a href="#"><p>Tin bán xe mới</p></a>
                                <a href="#"><p>Tin bán xe cũ</p></a>
                                <a href="#"><p>Vay mua xe</p></a>
                                <a href="#"><p>Phụ kiện</p></a>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
    </div>
    
</body>
<style>
    .product-cart
    {
        background-color: #D6D4D3;
    }
    .info-cart-product
    {
        font-size: 20px;
        line-height: 40px;          
    }
    .button-cart input
    {
        margin: 20px;
        font-size: 20px;
    }
    #xoa-cart
    {
        padding-left: 20px;
        padding-right: 20px;
        background-color: #EC7A41;
    }
    #capnhat-cart
    {
        padding-left: 20px;
        padding-right: 20px;
        background-color: #EC7A41;
    }
    #sl-cart
    {
        width: 150px;
    }
    #sl-cart:focus
    {
        background-color: #E8B972;
    }
</style>
</html>