<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include '../config.php';
include APP_ROOT . "/libraries/session.php";
include APP_ROOT . "/libraries/database.php";
include APP_ROOT . "/helper/format.php";
?>

<?php

class productModel
{
  private $db;
  private $fm;

  public function __construct()
  {
    $this->db = new Database();
    $this->fm = new Format();
  }

  public function select_product_all()
  {
    $result = $this->db->select("SELECT * FROM Products");
    $value = $result->fetch_all(MYSQLI_ASSOC);
    $i = 1;
    foreach ($value as $row) {
?>

      <div class="col-md-4 col-sm-6 col-xs-6 ver-block watch">
        <a class="fancybox" rel="gallery1" title="Căn hộ sky45" src="../public/img/products/<?php echo $row["Image"]; ?>">
          <div class="overlay">
            <img class="img-responsive" src="../public/img/products/<?php echo $row["Image"]; ?>" alt="">
            <div class="button_text hidden-md hidden-xs hidden-sm">
              <h4 class="text-uppercase">Xem hình ảnh</h4>
            </div>
          </div>
        </a>
        <h6 class="text-uppercase"><a class="fancybox" rel="gallery1" title="Căn hộ sky45" href=""></a><a href=""><?php echo $row["Name"]; ?></a></h6>
        <p><?php echo $row["Text"]; ?>.</p>
        <p><strong>Gia tien:</strong> <?php echo $row["Price"]; ?></p>
        <a href="<?php echo URL_ROOT . "/views/product_detail.php"; ?>?id=<?php echo $row["id"]; ?>"><i class="fa fa-angle-right"></i> xem thêm</a>
      </div>

      <?php
    }
  }


  public function select_product_s()
  {
    $result = $this->db->select("SELECT * FROM Products");
    $value = $result->fetch_all(MYSQLI_ASSOC);
    $i = 1;
    foreach ($value as $row) {
      if ($i++ <= 6) {
      ?>

        <div class="col-md-4 col-sm-6 col-xs-6 ver-block watch">
          <a class="fancybox" rel="gallery1" title="Căn hộ sky45" src="../public/img/products/<?php echo $row["Image"]; ?>">
            <div class="overlay">
              <img class="img-responsive" src="../public/img/products/<?php echo $row["Image"]; ?>" alt="">
              <div class="button_text hidden-md hidden-xs hidden-sm">
                <h4 class="text-uppercase">Xem hình ảnh</h4>
              </div>
            </div>
          </a>
          <h6 class="text-uppercase"><a class="fancybox" rel="gallery1" title="Căn hộ sky45" href=""></a><a href=""><?php echo $row["Name"]; ?></a></h6>
          <p><?php echo $row["Text"]; ?>.</p>
          <p><strong>Gia tien:</strong> <?php echo $row["Price"]; ?></p>
          <a href="<?php echo URL_ROOT . "/views/product_detail.php"; ?>?id=<?php echo $row["id"]; ?>"><i class="fa fa-angle-right"></i> xem thêm</a>
        </div>

    <?php
      }
    }
  }

  public function product_detail()
  {
    if (isset($_GET["id"]) && !empty(trim($_GET['id']))) {
      $id = trim($_GET['id']);
      $result = $this->db->select("SELECT * FROM Products WHERE id = $id");
      $value = $result->fetch_assoc();

      $mahanghoa = $value["Category_id"];
      $name = $value["Name"];
      $price = $value["Price"];
      $image = $value["Image"];
      $text = $value["Text"];
      $created = $value["Created"];
      $discount = $value["Discount"];
    }
    ?>

    <div class="page-header" style=" margin-bottom:20px;">
      <div class="container" style="display: flex; align-items: center;">
        <h2><a href="./products.php" style="text-transform: uppercase; font-weight: 600;">Tất cả sản phẩm</a></h2>
        <span style="margin: auto 10px; font-size: 17px; font-weight: bold;">></span>
        <h3 class="page-header__title  display-1" style="text-transform: uppercase; font-weight: 500;"><?php echo $name; ?></h3>
      </div>
    </div>

    <div id="primary" class="content-area  container">
      <div class="row">
        <div class="col-md-6 col-lg-6 portfolio--right">
          <div class="portfolio__gallery  portfolio__gallery--col-1" data-featherlight-gallery="" data-featherlight-filter="a">

            <a class="portfolio__gallery-link fancybox_gallery_1" rel="gallery1" href="<?php echo "../public/img/products/" . $image; ?>">
              <img class="img-responsive  portfolio__gallery-image" src="<?php echo "../public/img/products/" . $image; ?>">
            </a>

          </div>
        </div>

        <div class="col-lg-6 col-md-6">
          <div class="hentry">
            <h2 class="portfolio__title"><?php echo $name; ?></h2>
            <p><strong style="font-size: 23px !important;">Giá:<spam style="font-size: 23px !important; color: #ce265d !important;"> <?php echo $price; ?> vnđ</spam></strong></p>
            <div class="portfolio--left">

              <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title portfolio__meta-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Mô tả</a>
                    </h4>
                  </div>
                  <div id="collapse1" class="panel-collapse collapse in">
                    <div class="panel-body">

                      <span style="color: rgb(51, 51, 51); font-family: 'Myriad Pro', sans-serif; font-size: 14px; letter-spacing: 0.56px; line-height: 22.4px;"><?php echo $text; ?></span><br data-mce-bogus="1">

                    </div>
                  </div>
                </div>

                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title portfolio__meta-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Bình luận</a>
                    </h4>
                  </div>
                  <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body">
                      <?php
                      include "../inc/comment.php";
                      ?>
                    </div>
                  </div>
                </div>



                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title portfolio__meta-title no_bottom">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Tags</a>
                    </h4>
                  </div>
                  <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p><strong>Diện tích:</strong> 12m2</p>
                      <p><strong>Độ dày:</strong> 3cm</p>

                    </div>
                  </div>
                </div>


              </div>


            </div>
            <div class="panel_button">
              <form action="" method="post">
                <input type="hidden" name="name" value="<?php echo $name; ?>">
                <input type="hidden" name="price" value="<?php echo $price; ?>">
                <input type="hidden" name="image" value="<?php echo $image; ?>">
                <input type="hidden" name="discount" value="<?php echo $discount; ?>">
                <input type="hidden" name="id_pd" value="<?php echo $id; ?>">
                <div style="display: flex; margin: 23px 0px;">
                  <p style="margin: auto 0; padding-right: 17px;"><strong style="font-size: 20px !important;">Số lượng: </strong></p>
                  <div class="buttons_added">
                    <input class="minus is-form" type="button" value="-">
                    <input aria-label="quantity" class="input-qty" max="10" min="1" name="qty" type="number">
                    <input class="plus is-form" type="button" value="+">
                  </div>
                </div>

                <button type="submit" name="buyNow">Mua Ngay</button>
                <button type="submit" name="addCart">Them Vao Gio Hang</button>
              </form>
              <!-- JS cho input minus and plus -->
              <script>
                $('.plus').click(function() {
                  if ($(this).prev().val() < 10) {
                    $(this).prev().val(+$(this).prev().val() + 1);
                  }
                });

                $('.minus').click(function() {
                  if ($(this).next().val() > 1) {
                    if ($(this).next().val() > 1) {
                      $(this).next().val(+$(this).next().val() - 1);
                    }
                  }
                });
              </script>

            </div>
          </div>
        </div>
      </div>
    </div>
<?php
  }

  public function product_buyCart($id_pd, $image, $qty, $Amount)
  {
    if (empty($qty)) {
      echo "<script>alert('Lỗi rồi. Vui lòng điền thông tin số lượng !')</script>";
    } else {
      $query = "INSERT INTO `Order`(`id_pd`, `Image`, `Quantity`, `Amount`) VALUES ('$id_pd','$image','$qty','$Amount')";
      $result = $this->db->insert($query);
      echo "<script>window.location.href='http://localhost/php2mvc/views/cart.php';</script>";
    }
  }

  public function product_addCart($id_pd, $image, $qty, $Amount)
  {
    $id = trim($_GET['id']);
    if (empty($qty)) {
      echo "<script>alert('Lỗi rồi. Vui lòng điền thông tin số lượng !')</script>";
    } else {
      $query = "INSERT INTO `Order`(`id_pd`, `Image`, `Quantity`, `Amount`) VALUES ('$id_pd','$image','$qty','$Amount')";
      $result = $this->db->insert($query);
      echo "<script>alert('Đã thêm vào giỏ hàng !')</script>";
      echo "<script>window.location.href='http://localhost/php2mvc/views/product_detail.php?id=$id';</script>";
    }
  }
}

?>