<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require "../model/productModel.php";

?>

<?php

function selet_product_all()
{
  $prod = new productModel();
  $set_product_all = $prod->select_product_all();
}

function selet_product_s()
{
  $prod = new productModel();
  $set_product_s = $prod->select_product_s();
}

function product_detail_c()
{
  $prod = new productModel();
  $product_detail_show = $prod->product_detail();
}

function buyNow()
{
  $prod = new productModel();
  if (isset($_POST["buyNow"])) {
    // $name = $_POST['name'];
    $price = (int)$_POST['price'];
    $image = $_POST['image'];
    // $discount = $_POST['discount'];
    $id_pd = $_POST['id_pd'];
    $qty = (int)$_POST['qty'];

    $Amount = $price * $qty;


    $check_buyNow = $prod->product_buyCart($id_pd,$image,$qty,$Amount) ;
  }
}

function addNow()
{
  $prod = new productModel();
  if (isset($_POST["addCart"])) {
    // $name = $_POST['name'];
    $price = (int)$_POST['price'];
    $image = $_POST['image'];
    // $discount = $_POST['discount'];
    $id_pd = $_POST['id_pd'];
    $qty = (int)$_POST['qty'];

    $Amount = $price * $qty;


    $check_addNow = $prod->product_addCart($id_pd,$image,$qty,$Amount) ;
  }
}

?>