<title>
  HistoryOrder
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

<section class="cart_detail container" id="cart_detail">
  <div class="box_cart">
    <div class="cart_title" style="margin-bottom:40px;">
      <h2 style="font-weight:700;">LỊCH SỬ ĐƠN HÀNG</h2>
    </div>
    <form action="">
      <table>
        <tbody>
          <tr>
            <th>Mã đơn hàng</th>
            <th>Gmail khách hàng</th>
            <th>Tên khách hàng</th>
            <th>Mã khách hàng</th>
            <th>Tổng số lượng</th>
            <th>Tổng tiền</th>
            <th>Ngày tạo</th>
            <th>Trạng thái</th>
          </tr>

          <!-- PHP ========== -->
          <?php
          $echo_cart_details = cart_detail_c();
          ?>
          <!-- END PHP ============ -->

        </tbody>
      </table>
    </form>
  </div>
</section>



<!-- footer -->
<?php
include "../inc/footer.php";
?>