<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require "../controller/dashboardController.php";
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
                     <h2 class="">Quản Lý Sản Phẩm</h2>
                     <br>

                     <div class="box_prof">
                        <h4 class="alert alert-success">Them San Pham</h4>
                        
                        <!-- PHP ========== -->
                        <?php
                        $echo_add = add_products();
                        if (isset($check_add_products)) {
                           echo $check_add_products;
                        }
                        ?>
                        <!-- END PHP ============ -->
                        
                        <div class="box_form">
                           <form class="alert alert-secondary" enctype="multipart/form-data" method="post" action="./dashboard.php">

                              <div class="row">
                                 <div class="col pl-3 ">
                                    <label class="form-label">Mã sản phẩm: </label>
                                    <br>
                                    <input class="form-control" type="text" name="mahanghoa" placeholder="auto number" disabled=""><br>
                                 </div>
                                 <div class="col pl-3 ">
                                    <label class="form-label">Tên sản phẩm: </label>
                                    <br>
                                    <input class="form-control" type="text" name="name"><br>
                                 </div>
                                 <div class="col pl-3 ">
                                    <label class="form-label">Đơn giá: </label>
                                    <br>
                                    <input class="form-control" type="number" name="price"><br>
                                 </div>
                              </div>

                              <div class="row">
                                 <div class="col pl-3 ">
                                    <label class="form-label">Giảm giá: </label>
                                    <br>
                                    <input class="form-control" type="text" name="discount"><br>
                                 </div>
                                 <div class="col pl-3 ">
                                    <label class="form-label">Hình ảnh: </label>
                                    <br>
                                    <input class="form-control" type="file" name="image"><br>
                                 </div>
                                 <div class="col pl-3 ">
                                    <label class="form-label">Loại hàng: </label>
                                    <br>
                                    <select name="category">
                                       <option value="1">Đá Granite</option>
                                       <option value="2">Đá Marble</option>
                                       <option value="3">Đá Dán Tường</option>
                                       <option value="4">Đá Hoa Văn</option>
                                    </select>
                                 </div>
                              </div>
                              <input type="hidden" name="created" value="<?php echo date('Y-m-d H:i:s'); ?>">


                              <div class="mb-2">
                                 <div class="pl-2">
                                    <label for="comment">Mô tả:</label>
                                    <textarea class="form-control" rows="2" id="comment" name="text"></textarea>
                                 </div>
                              </div>
                              <div class="pl-2">
                                 <button class="btn btn-primary" type="submit" name="submit">Thêm mới</button>
                                 <button class="btn btn-primary" type="reset">Nhập lại</button>
                                 <a class="btn btn-primary" href="#box_prod">Danh Sach</a>
                              </div>

                           </form>
                        </div>

                     </div>
                     <br>
                     <br>

                     <div class="box_prof" id="box_prod">

                        <h4 class="alert alert-success">Danh Muc San Pham</h4>

                        <div class="box_form">

                           <input class="btn btn-primary" type="button" id="btn1" value="Chọn tất cả">
                           <input class="btn btn-primary" type="button" id="btn2" value="Bỏ chọn tất cả">
                           <button class="btn btn-primary" type="submit" name="btn_deletenhieu">Xóa mục đã chọn</button>


                           <form class="form_prof" method="post" action="dashboard.php?btn_list">

                              <table class="table table-hover">
                                 <tbody>

                                    <tr>
                                       <th>STT</th>
                                       <th>MÃ HH</th>
                                       <th>TÊN HH</th>
                                       <th>ĐƠN GIÁ</th>
                                       <th>HINH ANH</th>
                                       <th>NOI DUNG</th>
                                       <th>NGAY TAO</th>
                                       <th>GIAM GIA</th>
                                       <th>THAO TAC</th>
                                    </tr>
                                    <!-- PHP ========== -->
                                    <?php
                                    $echo_selet = selet_products();
                                    $echo_delete = delete_products();
                                    ?>
                                    <!-- END PHP ============ -->

                                 </tbody>
                              </table>

                           </form>

                           <input class="btn btn-primary" type="button" id="btn1.1" value="Chọn tất cả">
                           <input class="btn btn-primary" type="button" id="btn2.2" value="Bỏ chọn tất cả">
                           <button class="btn btn-primary" type="submit" name="btn_deletenhieu">Xóa mục đã chọn</button>
                        </div>
                     </div>
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