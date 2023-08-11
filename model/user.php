<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


include '../config.php';
include APP_ROOT . "/libraries/session.php";
Session::checkLogin_u();
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

  public function login_user($emailAdmin, $passAdmin)
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

      $query = "SELECT * FROM Account WHERE Gmail = '$emailAdmin' AND Pass = '$passAdmin' AND Func = '1'";

        $result = $this->db->select($query);

        if ($result != false) {
          $value = $result->fetch_assoc();
          Session::set("Name", $value['Name']);
          Session::set("id", $value['id']);
          Session::set("Gmail", $value['Gmail']);
          Session::set("image", $value['Hinh_Anh']);
          header('location:' . URL_ROOT . '/views');
        } else {
          $error = " Gmail va Pass khong dung ";
          return $error;
        }

    }
  }

  public function register_user()
  {
  }

  public function logout_user() 
  {
    

  }

}
?>