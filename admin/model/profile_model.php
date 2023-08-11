<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include '../../config.php';
include "session.php";
include APP_ROOT . "/libraries/database.php";
include APP_ROOT . "/helper/format.php";
?>

<?php

class CategoryModel
{
  private $db;
  private $fm;

  public function __construct()
  {
    $this->db = new Database();
    $this->fm = new Format();
  }


  // show danh sach hang hoa
  public function select_profile()
  {
    $result = $this->db->select("SELECT * FROM `Account`");
    $value = $result->fetch_all(MYSQLI_ASSOC);
    $a = 1;
    foreach ($value as $row) { ?>
      <tr>
        <td><?php echo $a++; ?></td>
        <td><?php echo $row["Name"]; ?></td>
        <td><?php echo $row["Gmail"]; ?></td>
        <td><?php echo $row["Pass"]; ?></td>
        <td><?php echo $row["Hinh_Anh"]; ?></td>
        <td><?php echo $row["Func"]; ?></td>
        <td>
        <a style="font-size: 13px; padding: 2px 4px;" class="btn btn-primary btn_delete" name="btn_delete" href="./manager_profile.php?id=<?php echo $row["id"]; ?>"><i class="fe-delete"></i></a>
        </td>
      </tr>

    <?php
    }
    ?>
    <script>
      const delBtnEl = document.querySelectorAll(".btn_delete");
      delBtnEl.forEach(function(delBtn) {
        delBtn.addEventListener("click", function(event) {
          const message = confirm("Bạn có chắc muốn xoá dữ liệu này không?");
          if (message == false) {
            event.preventDefault();
          }
        });
      });
    </script>
<?php

  }


  // xoa hang hoa
  public function delete_profile()
  {
    if (isset($_GET["id"]) && !empty(trim($_GET['id']))) {
      $id = trim($_GET['id']);

      $query = "DELETE FROM `Account` Where id = $id";
      $result = $this->db->delete($query);
      if ($result === TRUE) {
        // if (mysqli_stmt_execute(mysqli_prepare($this->db, $query))) {
        echo "<script>alert('Xoá thành công !')</script>";
        echo "<script>window.location.href='http://localhost/php2mvc/admin/view/manager_profile.php';</script>";
        exit;
        // } else {
        //   echo "Rất tiếc, đã xảy ra lỗi. Vui lòng thử lại sau !";
        // }
      } else {
        // Chuyển hướng nếu url không chứa thông số id
        echo "<script>alert('xoa khong thanh cong');</script>";
        echo "<script>window.location.href='http://localhost/php2mvc/admin/view/manager_profile.php';</script>";
        exit;
      }
    }
  }
}

?>