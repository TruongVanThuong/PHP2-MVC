<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require "../model/comment_model.php";
?>

<?php

function select_cmt_c() {
  $comment = new CommentModel();
  $sel_cmt = $comment->select_cmt();
}

function update_cmt_c()
{
  $comment = new CommentModel();
  $upd_cmt = $comment->update_cmt();
}

function delete_cmt_c() 
{
  $comment = new CommentModel();
  $del_cmt = $comment->delete_cmt();
}

?>