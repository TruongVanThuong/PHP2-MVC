<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require "../controller/profileController.php";
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
  <title>Manager Profile</title>

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
              <h2 class="">Quản Lý Tài Khoản</h2>
              <br>

              <div class="box_prof">

                <h4 class="alert alert-success">Danh Muc Tài Khoản</h4>

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
                          <th>USER NAME</th>
                          <th>GMAIL</th>
                          <th>PASS</th>
                          <th>HÌNH ẢNH</th>
                          <th>NHÓM ACCOUNT</th>
                          <th>THAO TAC</th>
                        </tr>

                        <!-- PHP ========== -->
                        <?php
                        $echo_select = select_profile();
                        $echo_delete = delete_profile();
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