<title>
  San Pham
</title>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require "../controller/productController.php";
?>

<?php include "../inc/navbarTop.php"; ?>
<div class="box_prod">

  <div class="container-fluid nav_menur_catag">
    <div class="nav_menur-header">
      <button class="btn  btn-primary  header__navbar-toggler hidden-lg hidden-md" type="button" data-toggle="collapse" data-target="#nav_menu">
        <i class="fa  fa-bars  hamburger"></i>
      </button>
    </div>
    <!--Kết thúc menu-->
    <div id="nav_menu" class="nav_menu_box navbar-toggleable-md collapse">
      <p><strong>DANH MỤC SẢN PHẨM</strong></p>
      <br>
      <hr>
      <div class="nav_menu">
        <div>
          <ul style="width: 100%;" class="ul_nav_menu navbar-nav text-uppercase navbar-big sm" data-smartmenus-id="16766550969137532">
  
            <li class="menu-item">
              <a class="func-scroll" href="#" title="Đá Granite">Đá Granite</a>
            </li>
            <hr>

            <li class="menu-item">
              <a class="func-scroll" href="#" title="Đá Marble">Đá Marble</a>
            </li>
            <hr>

            <li class="menu-item">
              <a class="func-scroll" href="#" title="Đá Dán Tường">Đá Dán Tường</a>
            </li>
            <hr>

            <li class="menu-item">
              <a class="func-scroll" href="#" title="Cầu Thang - Thang Máy">Đá Hoa Văn</a>
            </li>
            <hr>
<!-- 
            <li class="menu-item">
              <a class="func-scroll" href="#" title="Đá Lót Nền">Đá Lót Nền</a>
            </li>
            <hr> -->
            
          </ul>
        </div>
      </div>
    </div>
  </div>
  <section class="section-product grid-section" id="san-pham-section">
    <div class="container">
      <div class="title-block text-center wow fadeIn" style="visibility: hidden; animation-name: none;">
        <h2 class="text-uppercase">
          Sản phẩm
        </h2>
      </div>
      <div class="row equalizer equalizer-xs wow fadeIn" style="visibility: hidden; animation-name: none;">
        
      <!-- PHP ========== -->
      <?php
      $echo_selet = selet_product_all();
      ?>
      <!-- END PHP ============ -->
  
      </div>
    </div>
    <?php include "../inc/footer.php"; ?>
  </section>

</div>
