<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/e50213ec74.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/content.css">
</head>
<body>
    <?php session_start(); ?>
    <div class='container'>
        <div class='header'>
            <div class='header-wrap'>
                <div class='header-left'>
                    <img class = 'logo-header' src="../../images/car-logo.png" alt="logo" style="width: 100px">
                    <a class="ml-4" href="./">Sản phẩm</a>
                    <a class="ml-4" href="phanquyen.php">Phân quyền</a>
                </div>
                <div class="header-right">
                    <img class="rounded-circle" style='width:80px' src="../imgs/image-account.jpg" alt="">
                    <label for='ckb_tk' id='lb_tk'><?php echo $_SESSION['username'] ?></label><br>
                    <input type='checkbox' id='ckb_tk'>
                    <div id='tk'>
                        <a href='#'>Cài đặt tài khoản</a><br>
                        <a href='../controllers/xulydangxuat.php'>Đăng xuất</a>
                    </div>
                </div>
            </div>
        </div>
        <div class='content'>    
            <nav aria-label="breadcrumb" style="font-size: 20px; margin-top: 20px">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item "><a href="./" >Sản phẩm</a></li> 
                    <li class="breadcrumb-item active">Khôi phục sản phẩm</li> 
                </ol>
            </nav>        
            <?php include_once "../Controllers/xemkhoiphuc.php"; ?>
        </div>
    </div>
</body>

</html>