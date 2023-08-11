<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require "../model/category_model.php";
?>

<?php

function add_category() {
  // echo "hello";
  $Category = new CategoryModel();

  if (isset($_POST['submit'])) {
    $category = $_POST['category'];
    $idParent = $_POST['idParent'];

    $check_addCategory = $Category->add_category($idParent,$category);
  }
}

function select_category() {
  $Category = new CategoryModel();
  $select_category = $Category->select_category();
}

function update_category() {
  $Category = new CategoryModel();
  $update_category = $Category->edit_category();
}

function delete_category() {
  $Category = new CategoryModel();
  $delete_category = $Category->delete_category();
}

?>