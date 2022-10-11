<?php
    require_once "../../config.php";
    function ConnectDatabase(&$link)
    {
        $link = mysqli_connect(HOST, USER, PASSWORD, DB);
        if(mysqli_connect_error())
        {
            echo "không thể kết nối ".mysqli_connect_error();
        }
    }
    function ExecuteQuery($link, $query)
    {
        return mysqli_query($link, $query);
    }
    function ExecuteNonQuery($link, $query)
    {
        $result = mysqli_query($link, $query);
        return $result;
    }
    function ClearMemory($link, $result)
    {
        try
        {
            mysqli_close($link);
            mysqli_free_result($result);
        }
        catch(TypeError $e){echo $e;}
        
    }
?>