<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include  "../controller/productController.php";
include "../controller/cmtCotroller.php";
?>

<?php include "../inc/navbarTop.php"; ?>

<section class="product_detail">

    <!-- PHP ========== -->
    <?php
    $echo_selet = product_detail_c();
    $echo_buyNow = buyNow();
    $echo_addNow = addNow();
    ?>
    <!-- END PHP ============ -->
    
</section>

<!-- script comment fb -->
<script type="text/javascript">
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>

<?php include "../inc/footer.php"; ?>