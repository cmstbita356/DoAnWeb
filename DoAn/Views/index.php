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
    <?php session_start(); 
    ?>
        <div id="container">
            <div id="header">
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
                                        foreach($giohang as $v)
                                        {
                                            echo
                                            "
                                                <div style='background-color: #D6D4D3'>
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
            <div id="banner">
                <div class="col-md-12 col-12">
                    <div class="banner-content">
                        <img src="../images/car-logo.png" alt="car-logo">
                        <p style="font-size: 50px;"><strong>Tìm cho bạn một chiếc xe hoàn hảo</strong></p>
                        <strong><p>For life – Vì cuộc sống của bạn</p></strong>
                    </div>
                </div>
                <div class="adsearch-wrap">
                    <div class="adsearch mr-5 ml-5">
                        <form action="" method="get">
                            <div class="row">
                                <div class="col-md-4 col-12">
                                    <select name="time" class="form-control form-control-lg select" style="font-size: 17px; height: 50px;  margin-top: 5px">
                                        <option value="0">Không</option>
                                        <option value="Cũ">Xe cũ</option>
                                        <option value="Mới">Xe mới</option>
                                    </select>
                                </div>
                                <div class="col-md-4 col-12">
                                    <select name="brand" class="form-control form-control-lg select" style="font-size: 17px; height: 50px; margin-top: 5px" >
                                        <option value="0">Không</option>
                                        <option value="Honda">Honda</option>
                                        <option value="3">Mercedez</option>
                                    </select>
                                </div>
                                <div class="col-md-4 col-12">
                                    <select name="price" class="form-control form-control-lg select" style="font-size: 17px; height: 50px; margin-top: 5px">
                                        <option value="0">Không</option>
                                        <option value="500000000">500.000.000</option>
                                        <option value="1000000000">1.000.000.000</option>
                                    </select>
                                </div>
                                <div class="col-md-12 col-12" id="col-select" style="align-items: center;">
                                    <input type="submit" name="action" id="select-button-banner" value="Tìm kiếm nâng cao" style="background-color: #D5A116; color: white">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="section" style="color: black;">
                <nav aria-label="breadcrumb" style="font-size: 20px; margin-top: 20px">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item "><a href="./" >Trang chủ</a></li> 
                        <li class="breadcrumb-item active">Sản phẩm</li> 
                    </ol>
                </nav>
                <p style="text-align: center; font-size: 50px; margin-top: 10px"><strong>Sản phẩm</strong></p>
                <?php
                    if(isset($_GET['action']))
                    {
                        if($_GET['action'] == 'Tìm kiếm nâng cao')
                        {
                            include_once "../Controllers/xulytimkiemnc.php";
                        }
                    }
                    else{
                        include_once "../Controllers/xulyphantrang.php";
                    }
                ?>
                <p class="mt-5" style="font-size: 40px"><strong>Hỏi đáp</strong></p>
                <div class="border mt-5 mb-5" id="binhluan">
                    <div class="media">
                        <img src="../images/media-1.jpg" alt="img" class="p-3 ml-2 rounded-circle" style="width:80px">
                        <div class="media-body p-3" style="font-size: 20px;">
                            <h3>Hoài Nam <small> <em>Posted on today</em></small></h3>
                            <p>Hello</p>
                            <div class="media mt-3">
                                <img src="../images/media-1.jpg" alt="asd" class="rounded-circle p-3" style="width:80px">
                                <div class="media-body p-3">
                                    <h3>Nam Hoài<small><em> Posted on today</em></small></h3>
                                    <p>Bạn đẹp trai quá</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="../images/media-1.jpg" alt="img" class="p-3 ml-2 rounded-circle" style="width:80px; display: inline-block">
                    <input type="text" placeholder="Bình luận">
                    <button type="button" class="btn btn-success ml-5" style="font-size: 20px; border-radius: 10px;">Đăng</button>
                </div>
            </div>
            
            <div class="article" style="color: black; margin-top: 10px;">
                <div>
                    <span style="font-size: 32px; float: left"><strong>Tin tức</strong></span>
                    <nav class="navbar navbar-expand-sm bg-light" aria-label="navbar">
                        <ul class="navbar-nav" style="font-size: 30px; float: left;">
                            <li class="nav-item active">
                                <a class="nav-link mr-5 ml-5" href="#">Nổi bật</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mr-5 ml-5" href="#">Tư vấn</a>
                             </li>
                            <li class="nav-item">
                                <a class="nav-link mr-5 ml-5" href="#">Đánh giá xe</a>
                            </li>          
                        </ul>
                    </nav>
                    <br style="clear:both;">
                </div>
                <div class="row">
                    <div class="col-md-6 col-12 shadow" >
                        <a href="#">
                            <img src="../images/news1.jpg" alt="hình" style="width: 100%; height: 800px">
                            <h1>Nút bấm truyền thống dễ thao tác hơn màn hình cảm ứng trên ô tô</h1>
                        </a>
                        
                    </div>
                    
                    <div class="col-md-6 col-12 shadow">
                        <div>
                            <a href="#">
                                <img src="../images/news2.jpg" alt="hình" style="width: 100%; height: 400px">
                                <h1>Những lưu ý khi thay lốp dự phòng cho ô tô</h1>
                            </a>
                            
                            <a href="#">
                                <img src="../images/news3.jpg" alt="hình" style="width: 100%; height: 400px">
                                <h1>Khám phá Mercedes-AMG GT3 Edition 55: chiếc xe đua phiên bản giới hạn</h1>
                            </a>
                            
                        </div>
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
</html>