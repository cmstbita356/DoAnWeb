<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">    
    <link rel="stylesheet" href="../styles/Sidebar.css">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/banner.css">
    <link rel="stylesheet" href="../styles/section.css">
    <link rel="stylesheet" href="../styles/article.css">
    <link rel="stylesheet" href="../styles/footer.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e50213ec74.js" crossorigin="anonymous"></script>
</head>
<?php
    if(isset($_GET['msg']))
    {
        $msg = $_GET["msg"];
        if($msg == "dn_notduplicate")
        {
            $errormsg = "Username hoặc Password không trùng khớp";
        }
        if($msg == "dk_done")
        {
            $announce = "Đăng ký thành công";
        }
        if($msg == "dn_done")
        {
            header("Location: ../Views/index.php");
        }
        
    }
?>
<body>
    <div id="container">
        <div id="header" style="position: relative !important; width: 100%">
                <div class="header-top-wrap">
                    <div class="header-top-left">
                        <p><i class="fa-solid fa-envelope"></i>cmstbita356@gmail.com | <i class="fa-solid fa-clock"></i>7:00AM to 5:00PM</p>
                    </div>
                    <div class="header-top-right">
                        <p>
                            <a href="https://www.facebook.com/nam.thang.7121" target="_blank"><i class="media-header fa-brands fa-facebook"></i></a>
                            <a href="https://www.youtube.com/channel/UCPk5dOJ5jQGp70cFfB6hbXQ" target="_blank"><i class="media-header fa-brands fa-youtube"></i></i></a>
                            <a href="https://discord.gg/AXK2TuV8" target="_blank"><i class="media-header fa-brands fa-discord"></i></i></a>
                            <i class="fa-solid fa-user"></i>
                            <a href="dangnhap.php">Đăng nhập</a> | <a href="dangky.php">Đăng ký</a>
                        </p>
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
                                <li class="active"><a href="#" >Trang chủ</a></li>
                                <li>
                                    <a href="#pagesubmenu" class="dropdown-toggle" data-toggle="collapse" aria-expanded="false">Trang khác</a>
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
                        <div class="cart"><i class="fa-solid fa-cart-shopping"></i></div>          
                        
                    </div>
                </div>
                
        </div> 
        <div id="content-dn">
            <div id="breadcrump" >
                <nav aria-label="breadcrumb" style="font-size: 20px;">
                    <ol class="breadcrumb" style="background-color: orange;">
                        <li class="breadcrumb-item "><a href="../Views/index.php" style="color: black">Trang chủ</a></li> 
                        <li class="breadcrumb-item active" style="color: black">Đăng nhập</li> 
                    </ol>
                </nav>
            </div>
            <form id="form-dn" action="../Controllers/xulydangnhap.php" method="post">
                <h1 style="text-align:center; padding-top: 20px;">Đăng nhập</h1>
                <div id="dn_errormsg">
                    <?php 
                    if(isset($errormsg)) 
                    {
                        echo $errormsg;
                        unset($errormsg);
                    }
                    ?> 
                </div>
                <div id="dkdn_announce">
                    <?php 
                    if(isset($announce)) 
                    {
                        echo $announce;
                        unset($announce);
                    }
                    ?> 
                </div>
                <div class="form-group">
                    <label for="username">Username: </label><br>
                    <input type="text" id="username" name="username" placeholder="Nhập tài khoản vào đây">
                </div>
                <div class="form-group">
                    <label for="password">Password: </label><br>
                    <input type="password" id="password" name="password" placeholder="Nhập mật khẩu vào đây ">
                </div>
                <div class="form-group">
                    <input id="submit-dn" type="submit" Value="Đăng nhập">
                </div>
                <div id="dn-chuyenlink">
                    <p>Bạn chưa có tài khoản ? <a href="dangky.php">Đăng ký</a></p>
                    <p><a href="#">Bạn quên mật khẩu ?</a></p>
                </div>
            </form>
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
    #dn_errormsg
    {
        color: red;
        background-color: yellow;
        width: 100%;
        margin-top: 10px;
        padding-left: 10px;
    }
    #dkdn_announce
    {
        color: black;
        background-color: green;
        width: 100%;
        margin-top: 10px;
        padding-left: 10px;
    }
    #content-dn
    {
        background-image: url(../images/background4.jpg);
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        padding-bottom: 20px;
    }
    #form-dn
    {
        background-color: white;
        margin: 50px auto;
        margin-left: 30%;
        margin-right: 30%;
        box-shadow: 10px 10px #E8B972;
        font-size: 20px;
        border-radius: 20px;
    }
    #form-dn .form-group
    {
        margin-left: 20px;
        margin-top: 30px;
    }
    #form-dn .form-group input
    {
        border: none;
        background-color: lightgrey;
        width: 90%;
        padding: 12px 20px;
    }
    #form-dn .form-group input:focus
    {
        background-color: #E8B972;
    }
    #submit-dn
    {
        background-color: #D5A01C !important;
        width: 50% !important;
        margin-left: 20%;
    }
    #dn-chuyenlink
    {
        font-size: 17px;
        margin-left: 15px;
        margin-top: 50px;
        padding-bottom: 25px;
    }
@media screen and (max-width: 999px) {
    #form-dn
    {
        margin-left: 15%;
        margin-right: 15%;
        font-size: 20px;
    }
}
</style>
</html>