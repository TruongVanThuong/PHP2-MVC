<div class="box_cmt">
  <div class="add_cmt">

    <!-- PHP ========== -->
    <?php
    $echo_selet = add_cmt_c();
    if (isset($echo_comment)) {
      echo $echo_comment;
    }
    ?>
    <!-- END PHP ============ -->

    <?php
    $id = trim($_GET['id']);
    ?>

    <form action="<?php echo URL_ROOT . "/views/product_detail.php?id=" . $id; ?>" method="post">
      <div class="box_qty_cmt">
        <p class="qty_cmt"><?php echo $echo_qty = qty_cmt_c();?> bình luận</p>
      </div>
      <hr>
      <div class="box_cont_cmt">
        <div class="img_acc">
          <img src="<?php echo URL_ROOT . "/public/img/users/" . $_SESSION['image']; ?>" alt="">
        </div>
        <div class="cont_cmt">
          <input type="hidden" name="date_cm" value="<?php echo date("Y-m-d H:i:s") ?>">
          <input type="text" name="content" id="">
          <button type="submit" name="btn_cmt">Gửi</button>
        </div>
      </div>
      <hr>
      <div class="box_info_cmt">

        <!-- PHP ========== -->
        <?php
        $echo_selet = show_cmt_c();
        ?>
        <!-- END PHP ============ -->

      </div>
    </form>
  </div>
</div>