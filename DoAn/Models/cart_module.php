<?php
    function ThemHang($hang)
    {
        if(isset($_SESSION["giohang"]))
        {
            $giohang = $_SESSION["giohang"];
            $giohang[$hang["id"]] = $hang;
            $_SESSION["giohang"] = $giohang;
        }
        else
        {
            $giohang[$hang["id"]] = $hang;
            $_SESSION["giohang"] = $giohang;
        }
    }
    function XoaHang($id)
    {
        if(isset($_SESSION["giohang"]))
        {
            $giohang = $_SESSION["giohang"];
            unset($giohang[$id]);
            $_SESSION["giohang"] = $giohang;
        }
    }
    function CapNhat($id, $soluong)
    {
        if(isset($_SESSION["giohang"]))
        {
            $giohang = $_SESSION["giohang"];
            $giohang[$id]["soluong"] = $soluong;
            $_SESSION["giohang"] = $giohang;
        }
    }
    function tinhtien()
    {
        $sum = 0;
        $giohang = $_SESSION["giohang"];
        foreach($giohang as $v)
        {
            $sum += $v["soluong"]*$v["gia"];
        }
        return $sum;
    }
    function tinhslsp()
    {
        $sum = 0;
        $giohang = $_SESSION["giohang"];
        foreach($giohang as $v)
        {
            $sum += $v["soluong"];
        }
        return $sum;
    }
?>  