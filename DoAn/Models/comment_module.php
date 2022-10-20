<?php
    include_once "comment.php";
    include_once "db_module.php";

    class comment_module
    {
        public function CreateComment($comment, $id)
        {
            $link = null;
            ConnectDatabase($link);
            ExecuteNonQuery($link, "insert into tbl_comment (username, msg, date, id_product) values ('$comment->username', '$comment->msg', '".$comment->date."', $id)");
        }
        public function GetListComments($id)
        {
            $link = null;
            ConnectDatabase($link);
            $result = ExecuteQuery($link, "select * from tbl_comment where id_product = $id");
            $data = array();
            while($rows = mysqli_fetch_assoc($result))
            {
                $comment = new Comment($rows["username"], $rows["msg"], $rows["date"]);
                array_push($data, $comment);
            }
            ClearMemory($link, $result);
            return $data;
        }
    }
?>