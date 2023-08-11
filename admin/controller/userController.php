<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);

  require "../model/user.php";
?>
<?php

// function login_admin_c() {
  $user = new UserModel(); 
  if (isset($_POST["submit"])) {
    $emailAdmin = $_POST['email'];
    $passAdmin = $_POST['password'];
    
    $check_login = $user -> login_admin($emailAdmin,$passAdmin);
  }


// function logout_admin_c()
// {
//   $user = new UserModel(); 
//   $check_logout = $user->logout_admin();
// }

?>