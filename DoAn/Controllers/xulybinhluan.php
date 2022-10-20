<?php
    session_start();
    include_once "../Models/comment_module.php";

    if(isset($_GET['comment']))
    {
        $comment = new Comment($_SESSION['username'], $_GET['comment'], date("d/m/Y"));
        $cmm = new comment_module();
        $cmm->CreateComment($comment, $_GET['id']);
        header("Location: ../Views/chitietsp.php?id=".$_GET['id']);
    }
?>