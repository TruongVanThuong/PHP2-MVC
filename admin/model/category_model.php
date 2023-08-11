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

  // them ma hang hoa
  public function add_category($idParent, $category)
  {
    if (empty($category) || empty($idParent)) {
      $error = "<b style='color: red;'>du lieu khong duoc de trong</b>";
      echo $error;
    } else {
      $query = "INSERT INTO `Catalog`(`id_Parent`, `Name_category`) VALUES ('$idParent','$category')";
      // var_dump($query);
      $result = $this->db->insert($query);
      echo "<script> alert('da them san pham !'); </script> ";
    }
  }

  // show danh sach hang hoa
  public function select_category()
  {
    $result = $this->db->select("SELECT * FROM Catalog");
    $value = $result->fetch_all(MYSQLI_ASSOC);
    $i = 1;
    $a = 1;
    foreach ($value as $row) { ?>
      <tr>
        <td><?php echo $a++; ?></td>
        <td><?php echo $row["id_Parent"]; ?></td>
        <td><?php echo $row["Name_category"]; ?></td>
        <td>
          <a style="font-size: 13px; padding: 2px 4px;" class="btn btn-primary" name="btn_edit" href="./edit_category.php?id=<?php echo $row["id"]; ?>"><i class="fe-edit"></i></a>
          <a style="font-size: 13px; padding: 2px 4px;" class="btn btn-primary btn_delete" name="btn_delete" href="./manager_category.php?id=<?php echo $row["id"]; ?>"><i class="fe-delete"></i></a>
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

  // chinh sua hang hoa
  public function edit_category()
  {
    if (isset($_GET["id"]) && !empty(trim($_GET['id']))) {
      $id = trim($_GET['id']);
      $result = $this->db->select("SELECT * FROM Catalog WHERE id = $id");
      $value = $result->fetch_assoc();

      $idParent = $value["id_Parent"];
      $category = $value["Name_category"];
    }
  ?>
    <!-- // update san pham -->
    <div class="box_form">
      <form class="alert alert-secondary" enctype="multipart/form-data" method="post" action="./edit_category.php">

        <div class="row">
          <input type="hidden" name="id" value="<?php echo $id; ?>">
          <div class="col pl-3 ">
            <label class="form-label">Loại Hàng: </label>
            <br>
            <input class="form-control" type="text" name="category" value="<?php echo $category; ?>"><br>
          </div>

          <div class="col pl-3">
            <label class="form-label">Ma Loại Hàng: </label>
            <br>
            <input class="form-control" type="number" name="idParent" value="<?php echo $idParent; ?>"><br>
          </div>

        </div>

        <div class="pl-2">
          <button class="btn btn-primary" type="submit" name="edit_submit">Update</button>
          <button class="btn btn-primary" type="reset">Nhập lại</button>
        </div>

      </form>
    </div>
    <!-- end update san pham -->
  <?php
    if (isset($_POST['edit_submit'])) {
      $id = $_POST['id'];
      echo $category = $_POST['category'];
      echo $idParent = $_POST['idParent'];
      
      $query = "UPDATE Catalog SET `id_Parent`='$idParent',`Name_category`='$category' WHERE id = $id";
      $result = $this->db->update($query);
      // echo "heelllo";
      if ($result === TRUE) {
        echo "<script>alert('update thanh cong');</script>";
        echo "<script>window.location.href='http://localhost/php2mvc/admin/view/manager_category.php';</script>";
      } else {
        echo "<script>alert('Loi roi ! update khong thanh cong');</script>";
      }
    }
  }

  // xoa hang hoa
  public function delete_category()
  {
    if (isset($_GET["id"]) && !empty(trim($_GET['id']))) {
      $id = trim($_GET['id']);

      $query = "DELETE FROM Catalog Where id = $id";
      $result = $this->db->delete($query);
      if ($result === TRUE) {
        // if (mysqli_stmt_execute(mysqli_prepare($this->db, $query))) {
          echo "<script>alert('Xoá thành công !')</script>";
          echo "<script>window.location.href='http://localhost/php2mvc/admin/view/manager_category.php';</script>";
          exit;
        // } else {
        //   echo "Rất tiếc, đã xảy ra lỗi. Vui lòng thử lại sau !";
        // }
      }
      else{
        // Chuyển hướng nếu url không chứa thông số id
        echo "<script>alert('xoa khong thanh cong');</script>";
        echo "<script>window.location.href='http://localhost/php2mvc/admin/view/manager_category.php';</script>";
        exit;
     
      }
    }
  }
}

?>