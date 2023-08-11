<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);

  require "../model/user.php";
?>
<?php
  $user = new UserModel(); 
  if (isset($_POST["submit"])) {
    $emailAdmin = $_POST['email'];
    $passAdmin = $_POST['password'];

    $check_login = $user -> login_user($emailAdmin,$passAdmin);
  }
?>