<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require "../controller/categoryController.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- App favicon -->
  <link rel="shortcut icon" href="..\assets\images\favicon.ico">

  <!-- App css -->
  <link href="..\assets\css\bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="..\assets\css\icons.min.css" rel="stylesheet" type="text/css">
  <link href="..\assets\css\app.min.css" rel="stylesheet" type="text/css">
  <title>Manager Category</title>

  <style>
    /* Start Page Content here */
    .alert-success {
      background-color: #00acc2 !important;
      color: #fff !important;
      margin: 0;
      border: 0;
    }

    .box_prof {
      border: 1px solid gray;
      border-radius: 5px;
    }

    .box_form {
      padding: 23px;
    }

    .form_prof {
      margin: 12px 0;
      border: 1px solid gray;
      border-radius: 3px;
    }

    .form_prof .table tr:nth-child(2n+2) {
      background-color: #e7e7e7;
    }

    .form_prof .table td,
    form .table th {
      border: 1px solid #bdbdbd;
    }
  </style>

</head>

<body>

  <!-- Begin page -->
  <div id="wrapper">

    <!-- Topbar Start -->
    <?php
    include "../inc/topbar_admin.php";
    ?>
    <!-- end Topbar -->


    <!-- ========== Left Sidebar Start ========== -->
    <?php
    include "../inc/leftside_admin.php";
    ?>
    <!-- Left Sidebar End -->


    <div class="content-page">
      <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

          <!-- content quan ly laoi -->
          <div>
            <div class="loaihang">
              <br>
              <h2 class="">Quản Lý Loại Hàng</h2>
              <br>

              <!-- Thêm Loại Hàng -->
              <div class="box_prof">
                <h4 class="alert alert-success">Thêm Loại Hàng</h4>

                <!-- PHP ========== -->
                <?php
                $echo_add = add_category();
                if (isset($check_addCategory)) {
                  echo $check_addCategory;
                }
                ?>
                <!-- END PHP ============ -->

                <div class="box_form">
                  <form class="alert alert-secondary" enctype="multipart/form-data" method="post" action="./manager_category.php">

                    <div class="row">

                      <div class="col pl-3 ">
                        <label class="form-label">Loại Hàng: </label>
                        <br>
                        <input class="form-control" type="text" name="category"><br>
                      </div>

                      <div class="col pl-3">
                        <label class="form-label">Ma Loại Hàng: </label>
                        <br>
                        <input class="form-control" type="number" name="idParent"><br>
                      </div>

                    </div>

                    <div class="pl-2">
                      <button class="btn btn-primary" type="submit" name="submit">Thêm mới</button>
                      <a class="btn btn-primary" href="#listCat">Danh sách</a>
                    </div>

                  </form>
                </div>

              </div>
              <br>
              <br>

              <!-- Danh Mục Tài Khoản -->
              <div class="box_prof" id="listCat">
                <h4 class="alert alert-success">Danh Mục Tài Khoản</h4>
                <div class="box_form">

                  <select>
                    <option value="false">false</option>
                    <option value="true">true</option>
                  </select>

                  <form class="form_prof" method="post" action="dashboard.php">
                    <table class="table table-hover">
                      <tbody>

                        <tr>
                          <th>STT</th>
                          <th>MÃ DANH MỤC</th>
                          <th>TÊN DANH MỤC</th>
                          <th>THAO TÁC</th>
                        </tr>

                        <!-- PHP ========== -->
                        <?php
                        $echo_select = select_category();
                        $echo_delete = delete_category();
                        ?>
                        <!-- END PHP ============ -->


                      </tbody>
                    </table>
                  </form>
                </div>

              </div>
              <br>


            </div>


          </div>
        </div> <!-- container-fluid -->

      </div> <!-- content -->



      <!-- Footer Start -->
      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              2018 - 2019 &copy; Simulor theme by <a href="">Coderthemes</a>
            </div>
            <div class="col-md-6">
              <div class="text-md-right footer-links d-none d-sm-block">
                <a href="#">About Us</a>
                <a href="#">Help</a>
                <a href="#">Contact Us</a>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

  </div>



  <!-- Right Sidebar -->
  <?php
  include "../inc/rightside_admin.php";
  ?>
  <!-- /Right-bar -->


  <!-- Right bar overlay-->
  <!-- <div class="rightbar-overlay"></div> -->

  <!-- Vendor js -->
  <script src="..\assets\js\vendor.min.js"></script>

  <!-- Chart JS -->
  <script src="..\assets\libs\chart-js\Chart.bundle.min.js"></script>

  <!-- Sparkline charts -->
  <script src="..\assets\libs\jquery-sparkline\jquery.sparkline.min.js"></script>

  <!-- Dashboard js -->
  <script src="..\assets\js\pages\dashboard.init.js"></script>

  <!-- App js -->
  <script src="..\assets\js\app.min.js"></script>

</body>

</html>