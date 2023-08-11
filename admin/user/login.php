<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require "../controller/userController.php";
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- link web -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <!-- end link web -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <title>LOGIN</title>
</head>

<body>
  <div class="wrapper">

    <!-- PHP ========== -->
    <?php
      // $login = login_admin_c();
      if (isset($check_login)) {
        echo $check_login;
      }
      // $logout = logout_admin_c();
    ?>
    <!-- END PHP ============ -->

    <div class="logo">
      <img src="../assets/images/AdminLogo.png" alt="">
    </div>
    <div class="text-center mt-4 name">
      Admin
    </div>
    <form class="p-3 mt-3" action="login.php" method="post">
      <div class="form-field d-flex align-items-center">
        <span class="far fa-envelope"></span>
        <input type="text" name="email" id="email" placeholder="Email">
      </div>
      <div class="form-field d-flex align-items-center">
        <span class="fas fa-key"></span>
        <input type="password" name="password" id="password" placeholder="Password">
      </div>
      <button class="btn mt-3" type="submit" name="submit">Login</button>
    </form>
    <div class="text-center fs-6">
      <a href="#">Forget password?</a> or <a href="./register.php">Register</a>
    </div>
  </div>
</body>

</html>