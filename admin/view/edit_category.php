<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require "../controller/categoryController.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
  <meta content="Coderthemes" name="author">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- App favicon -->
  <link rel="shortcut icon" href="..\assets\images\favicon.ico">

  <!-- App css -->
  <link href="..\assets\css\bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="..\assets\css\icons.min.css" rel="stylesheet" type="text/css">
  <link href="..\assets\css\app.min.css" rel="stylesheet" type="text/css">
  <title>Dashboard</title>
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

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
      <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

          <!-- content quan ly laoi -->
          <div>
            <div class="loaihang">
              <br>
              <h2 class="">Quản Lý Hang Hoa</h2>
              <br>

              <div class="box_prof">
                <h4 class="alert alert-success">Edit Hang Hoa</h4>
                <!-- PHP ========== -->
                <?php

                $echo_upd = update_category();
                // $show = new DashboardModel;
                // echo $show->update_product($name);

                ?>
                <!-- END PHP ============ -->
                

              </div>
              <br>
              <br>


            </div>



            <script>
              document.getElementById("btn1").onclick = function() {
                // Lấy danh sách checkbox
                var checkboxes = document.getElementsByName('cat[]');

                // Lặp và thiết lập checked
                for (var i = 0; i < checkboxes.length; i++) {
                  checkboxes[i].checked = true;
                }
              };
              document.getElementById("btn1.1").onclick = function() {
                // Lấy danh sách checkbox
                var checkboxes = document.getElementsByName('cat[]');

                // Lặp và thiết lập checked
                for (var i = 0; i < checkboxes.length; i++) {
                  checkboxes[i].checked = true;
                }
              };

              // Chức năng bỏ chọn hết
              document.getElementById("btn2").onclick = function() {
                // Lấy danh sách checkbox
                var checkboxes = document.getElementsByName('cat[]');

                // Lặp và thiết lập Uncheck
                for (var i = 0; i < checkboxes.length; i++) {
                  checkboxes[i].checked = false;
                }
              };
              document.getElementById("btn2.2").onclick = function() {
                // Lấy danh sách checkbox
                var checkboxes = document.getElementsByName('cat[]');

                // Lặp và thiết lập Uncheck
                for (var i = 0; i < checkboxes.length; i++) {
                  checkboxes[i].checked = false;
                }
              };
            </script>


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
  <!-- END wrapper -->

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