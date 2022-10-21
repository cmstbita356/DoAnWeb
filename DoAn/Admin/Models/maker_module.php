<?php
    include_once "maker.php";
    include_once "db_module.php";
    class maker_module
    {
        function getMaxID()
        {
            $link = null;
            ConnectDatabase($link);
            $result = ExecuteQuery($link, "select MAX(ID) from tbl_maker where state = 1");
            $row = mysqli_fetch_row($result);
            ClearMemory($link, $result);
            return $row[0];
        }
        function GetNameById($id)
        {
            $link = null;
            ConnectDatabase($link);
            $result = ExecuteQuery($link, "select name from tbl_maker where id = $id and state = 1");
            $row = mysqli_fetch_row($result);
            ClearMemory($link, $result);
            return $row[0];
        }
        function GetAll()
        {
            $link = null;
            ConnectDatabase($link);
            $result = ExecuteQuery($link, "select * from tbl_maker where state = 1");
            $data = array();
            while($rows = mysqli_fetch_assoc($result))
            {
                $maker = new maker($rows["id"], $rows["name"]);
                array_push($data, $maker);
            }
            ClearMemory($link, $result);
            return $data;
        }
        function checkId($id)
        {
            $link = null;
            ConnectDatabase($link);
            $result = ExecuteQuery($link, "select count(*) from tbl_maker where id = $id and state = 1");
            $row = mysqli_fetch_row($result);
            return ($row[0] > 0)? true : false;
        }
    }
?>