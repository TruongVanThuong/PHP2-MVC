<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require "../model/cartModel.php";

?>

<?php

function sel_oder_c() 
{
  $cart = new CartModel();
  $sel_oder = $cart->select_order();
}

function del_order_c() 
{
  $cart = new CartModel();
  $del_order = $cart->delete_order();
}

function history_order_c() 
{
  $cart = new CartModel();
  if(isset($_POST['thanhtoan'])) 
  {
    $Status = "cho xac nhan !";
    $id_acc = ($_POST['id']);
    $name_acc = ($_POST['Name']);
    $gmail_acc = ($_POST['Gmail']);
    $qty_all = ($_POST['qty_all']);
    $price_all = ($_POST['price_all']);
    $date = ($_POST['date']);

    $check_history_order = $cart->history_order($Status,$id_acc,$name_acc,$gmail_acc,$qty_all,$price_all,$date);
  }
} 

function cart_detail_c()
{
  $cart = new CartModel();
  $check_cart_detail = $cart->cart_detail();
}

?>