<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require "../model/profile_model.php";
?>

<?php

function select_profile() {
  $Category = new CategoryModel();
  $select_profile = $Category->select_profile();
}


function delete_profile() {
  $Category = new CategoryModel();
  $delete_profile = $Category->delete_profile();
}

?>