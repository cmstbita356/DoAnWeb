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
</head>
<body>
    <?php session_start(); ?>
    <div class='container'>
        <div class='header'>
            <div class='header-wrap'>
                <div class='header-left'>
                    <img class = 'logo-header' src="../../images/car-logo.png" alt="logo" style="width: 100px">
                    <a class="ml-4" href="">Sản phẩm</a>
                    <a class="ml-4" href="">Cấp quyền</a>
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
                    <li class="breadcrumb-item active">Thêm sản phẩm</li> 
                </ol>
            </nav>
            <form id="suasp" action="../Controllers/xulysuasp.php" method="get">
                <h1 style='text-align: center'>Thêm sản phẩm</h1>
                <div class="form-group">
                    <label for="name">Tên sản phẩm:</label>
                    <input type="text" id="name" name="name" value="<?php echo $_GET["name"]; ?>">
                </div>
                <div class="form-group">
                    <label for="price">Giá sản phẩm:</label>
                    <input type="text" id="price" name="price" value="<?php echo $_GET["price"]; ?>">
                </div>
                <div class="form-group">
                    <label for="desc">Mô tả:</label>
                    <input type="text" id="desc" name="desc" value="<?php echo $_GET["desc"]; ?>">
                </div>
                <div class="form-group">
                    <label for="img">Hình ảnh: </label>
                    <input type="text" id="img" name="img" maxlength="1000" value="<?php echo $_GET["img"]; ?>">
                </div>
                <div class="form-group">
                    <label for="brand">Nhãn hiệu: </label>
                    <input type="text" id="brand" name="brand" value="<?php echo $_GET["brand"]; ?>">
                </div>
                <div class="form-group">
                    <label for="time">Thời gian: </label>
                    <select id='time' name="time" class="form-control form-control-lg select" style="height: 50px; width: 90%; font-size: 20px;">
                        <option value="Cũ" <?php if($_GET["time"] == "Cũ"){echo "selected";} ?> >Cũ</option>
                        <option value="Mới" <?php if($_GET["time"] == "Mới"){echo "selected";} ?>>Mới</option>
                    </select>
                </div>
                <div class="form-group">
                    <input id="submit-sua" type="submit" Value="Sửa sản phẩm" name="action">
                </div>
            </form>
        </div>
    </div>
</body>
<style>
    #suasp
    {
        margin: 50px auto;
        margin-left: 20%;
        margin-right: 30%;
        font-size: 20px;
        border-radius: 20px;
    }
    .form-group input
    {
        border: none;
        background-color: lightgrey;
        width: 90%;
        padding: 12px 20px;
    }
    .form-group
    {
        margin-left: 20px;
        margin-top: 30px;
    }
    .form-group input:focus
    {
        background-color: #E8B972;
    }
    #submit-sua
    {
        background-color: #D5A01C ;
        width: 50% ;
        margin-left: 20%;
    }
</style>
</html>