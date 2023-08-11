<title>
  Giỏ Hàng
</title>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include  "../controller/cartController.php";
?>


<!--  top nav bar  -->
<?php
include "../inc/navbarTop.php";
?>

<section class="cart container" id="cart">
  <div>
    <br>
    <div class="title_cart" style="justify-content: space-between !important;">
      <h3>GIỎ HÀNG CỦA BẠN</h3>
      <a href="#">Lịch sử đơn hàng</a>
    </div>
    <hr>

    <form method="post" action="">

      <!-- PHP ========== -->
      <?php
      $echo_sel_order = sel_oder_c();
      $echo_del_order = del_order_c();
      $echo_history_order = history_order_c();
      ?>
      <!-- END PHP ============ -->

      <input type="hidden" name="date" value="<?php echo date('Y-m-d H:i:s'); ?>">
      <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">
      <input type="hidden" name="Name" value="<?php echo $_SESSION['Name']; ?>">
      <input type="hidden" name="Gmail" value="<?php echo $_SESSION['Gmail']; ?>">

      <button type="submit" class="link-cart-infor" name="thanhtoan">Thanh Toán</button>

    </form>

  </div>
</section>


<!-- footer -->
<?php
include "../inc/footer.php";
?>