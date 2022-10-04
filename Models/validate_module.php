<?php
    include_once "db_module.php";
    function ValidateLenUp($up)
    {
        return (strlen($up) >= 5 && strlen($up) <= 30);
    }
    function ValidateEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL)!=false ? true : false;
    }
    function ValidateExistUsername($link, $username)
    {
        $result = ExecuteQuery($link, "select count(*) from tbl_user where username = '".$username."'");
        $rows = mysqli_fetch_row($result);
        mysqli_free_result($result);
        return $rows[0] > 0;
    }
?>