<?php
    include_once "comment.php";
    include_once "db_module.php";

    class comment_module
    {
        public function CreateComment($comment)
        {
            $link = null;
            ConnectDatabase($link);
            ExecuteNonQuery($link, "insert into tbl_comment (user_id, msg, date) values ($comment->username, $comment->msg, $comment->date)");
            $string = 
            "
            <div class='media'>
                <img src='../images/user.png' alt='img' class='p-3 ml-2 rounded-circle' style='width:80px'>
                <div class='media-body p-3' style='font-size: 20px;'>
                    <h3> $comment->username <small> <em>$comment->date</em></small></h3>
                    <p>$comment->msg</p>
                </div>
            </div>
            ";
            return $string;
        }
    }
?>