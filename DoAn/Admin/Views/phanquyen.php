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
    <?php 
        session_start(); 
        if(isset($_GET['msg']))
        {
            if($_GET['msg'] == 'done')
            {
                $msg = "Phân quyền thành công";
            }
        }
    ?>
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
            <form id="phanquyen" action="../Controllers/xulyphanquyen.php" method="get">
                <h1 style='text-align: center'>Cấp quyền</h1>
                <div class='msg-phanquyen'>
                    <?php 
                        if(isset($msg))
                        {
                            echo $msg;
                        }
                    ?>
                </div>
                <div class="form-group">
                    <label for="nguoicap">Người cấp:</label>
                    <input type="text" id="nguoicap" name="nguoicap" value='<?php echo $_SESSION['username'] ?>' disabled>
                </div>
                <div class="form-group">
                    <label for="id">Id người muốn cấp:</label>
                    <input type="text" id="id" name="id">
                </div>
                <div class="form-group">
                    <label for="id_quyen">Quyền muốn cấp: </label>
                    <select id='id_quyen' name="id_quyen" class="form-control form-control-lg select" style="height: 50px; width: 90%; font-size: 20px;">
                        <option value='1'>Admin</option>
                        <option value="2">User</option>
                    </select>
                </div>
                <div class="form-group">
                    <input id="submit-phanquyen" type="submit" Value="Hoàn thành" name="action">
                </div>
            </form>
        </div>
    </div>
</body>
<style>
    .msg-phanquyen
    {
        color: #367E18;
        background-color: #D8D9CF;
    }
    #phanquyen
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
    #submit-phanquyen
    {
        background-color: #D5A01C ;
        width: 50% ;
        margin-left: 20%;
    }
</style>
</html>