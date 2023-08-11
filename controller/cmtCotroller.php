<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require "../model/cmtModel.php";

?>

<?php

function add_cmt_c()
{
  $comment = new CommentModel();
  if (isset($_POST["btn_cmt"])) {
    $content = $_POST['content'];
    $date_cm = $_POST['date_cm'];

    $echo_comment = $comment->add_cmt($content,$date_cm);
  }
}

function show_cmt_c() 
{
  $comment = new CommentModel();
  $echo_showComment = $comment->show_cmt();
}

function qty_cmt_c() {
  $comment = new CommentModel();
  $echo_qty_cm = $comment->qty_cmt();
}


?>