<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include '../../config.php';
include "session.php";
Session::checkLogin();
require APP_ROOT . "/libraries/database.php";
include APP_ROOT . "/helper/format.php";
?>

<?php
class UserModel
{
  private $db;
  private $fm;

  public function __construct()
  {
    $this->db = new Database();
    $this->fm = new Format();
  }

  public function login_admin($emailAdmin, $passAdmin)
  {
    // echo 'hello';
    // xu ly format cho thong tin
    $emailAdmin = $this->fm->validation($emailAdmin);
    $passAdmin = $this->fm->validation($passAdmin);

    // " mysqli_real_escape_string " loai bo nhung ki tu gay anh huong den SQL
    // $mysqli = $this->db->connectDB();
    // $emailAdmin = mysqli_real_escape_string($mysqli, $emailAdmin);
    // $passAdmin = mysqli_real_escape_string($mysqli, $passAdmin);

    if (empty($emailAdmin) || empty($passAdmin)) {
      $error = "Email va Pass khong duoc de trong";
      return $error;
    } else {
      $query = "SELECT * FROM Account WHERE Gmail = '$emailAdmin' AND Pass = '$passAdmin' AND Func = '0' ";

      $result = $this->db->select($query);

      if ($result != false) {
        $value = $result->fetch_assoc();
        Session::set("Name", $value['Name']);
        Session::set("id", $value['id']);
        Session::set("Gmail", $value['Gmail']);
        Session::set("image", $value['Hinh_Anh']);

        header('location:' . URL_ROOT_AD . '/view/dashboard.php');
      } else {
        $error = " Gmail va Pass khong dung";
        return $error;
      }
    }
  }

  public function register_admin()
  {
  }

  // public function logout_admin()
  // {
  //   if (isset($_SESSION["Gmail"])) {
  //     session_destroy();
  //     echo "<script>alert('Dang xuat thanh cong');</script>";
  //     echo "<script>window.location.href='http://localhost/php2mvc/admin/user/login.php';</script>";
  //   }
  // }
}
?>