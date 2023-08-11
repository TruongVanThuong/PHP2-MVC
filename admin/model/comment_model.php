<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include '../../config.php';
include "session.php";
include APP_ROOT . "/libraries/database.php";
include APP_ROOT . "/helper/format.php";
?>

<?php

class CommentModel
{
  private $db;
  private $fm;

  public function __construct()
  {
    $this->db = new Database();
    $this->fm = new Format();
  }

  public function select_cmt()
  {
    $query = "SELECT * FROM `Comment`";
    $result = $this->db->select($query);
    $value = $result->fetch_all(MYSQLI_ASSOC);
    $i = 1;

    foreach ($value as $row) {
      $id_acc = $row['Ma_acc'];
      $query_acc = "SELECT * FROM Account WHERE id = $id_acc ";
      $result_acc = $this->db->select($query_acc);
      $value_acc = $result_acc->fetch_assoc();

      $name_acc = $value_acc['Name'];
?>

      <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $row['Ma_acc']; ?></td>
        <td><?php echo $name_acc; ?></td>
        <td><?php echo $row['Content']; ?></td>
        <td><?php echo $row['Ma_pd']; ?></td>
        <td><?php echo $row['date_cm']; ?></td>
        <td>
          <a style="font-size: 13px; padding: 2px 4px;" class="btn btn-primary" name="btn_edit" href="./edit_comment.php?id=<?php echo $row["id"]; ?>"><i class="fe-edit"></i></a>
          <a style="font-size: 13px; padding: 2px 4px;" class="btn btn-primary btn_delete" name="btn_delete" href="./comment.php?id=<?php echo $row["id"]; ?>"><i class="fe-delete"></i></a>
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

  public function update_cmt()
  {
    if (isset($_GET["id"]) && !empty(trim($_GET['id']))) {
      $id = trim($_GET['id']);
      $result = $this->db->select("SELECT * FROM Comment WHERE id = $id");
      $value = $result->fetch_assoc();

      $Ma_acc = $value["Ma_acc"];
      $Ma_pd = $value["Ma_pd"];
      $Content = $value["Content"];
    }
  ?>
    <div class="box_form">
      <form class="alert alert-secondary" enctype="multipart/form-data" method="post" action="./edit_comment.php">

        <div class="row">
          <input type="hidden" name="id" value="<?php echo $id; ?>">
          <input type="hidden" name="date_cm" value="<?php echo date("Y-m-d H:i:s"); ?>">
          <div class="col pl-3 ">
            <label class="form-label">MÃ KHÁCH HÀNG: </label>
            <br>
            <input class="form-control" type="number" name="Ma_acc" value="<?php echo $Ma_acc; ?>"><br>
          </div>

          <div class="col pl-3">
            <label class="form-label">MÃ SẢN PHẨM: </label>
            <br>
            <input class="form-control" type="number" name="Ma_pd" value="<?php echo $Ma_pd; ?>"><br>
          </div>
        </div>

        <div class="row">
          <div class="col pl-3">
            <label class="form-label">BÌNH LUẬN: </label>
            <br>
            <input class="form-control" type="text" name="Content" value="<?php echo $Content; ?>"><br>
          </div>
        </div>

        <div class="pl-2">
          <button class="btn btn-primary" type="submit" name="update_submit">Update</button>
          <button class="btn btn-primary" type="reset">Nhập lại</button>
        </div>
      </form>
    </div>
<?php
    if(isset($_POST['update_submit'])) {
      $id = $_POST['id'];
      echo $Ma_acc = $_POST['Ma_acc'];
      echo $Ma_pd = $_POST['Ma_pd'];
      echo $Content = $_POST['Content'];
      echo $date_cm = $_POST['date_cm'];
      
      $query = "UPDATE Comment SET `Ma_acc`='$Ma_acc',`Ma_pd`='$Ma_pd',`Content`='$Content',`date_cm`='$date_cm' WHERE id = $id";
      $result = $this->db->update($query);
      // echo "heelllo";
      if ($result === TRUE) {
        echo "<script>alert('update thanh cong');</script>";
        echo "<script>window.location.href='http://localhost/php2mvc/admin/view/comment.php';</script>";
      } else {
        echo "<script>alert('Loi roi ! update khong thanh cong');</script>";
      }
    }
  }

  public function delete_cmt()
  {
    if (isset($_GET["id"]) && !empty(trim($_GET['id']))) {
      $id = trim($_GET['id']);

      $query = "DELETE FROM Comment Where id = $id";
      $result = $this->db->delete($query);
      if ($result === TRUE) {
        // if (mysqli_stmt_execute(mysqli_prepare($this->db, $query))) {
          echo "<script>alert('Xoá thành công !')</script>";
          echo "<script>window.location.href='http://localhost/php2mvc/admin/view/comment.php';</script>";
          exit;
        // } else {
        //   echo "Rất tiếc, đã xảy ra lỗi. Vui lòng thử lại sau !";
        // }
      }
      else{
        // Chuyển hướng nếu url không chứa thông số id
        echo "<script>alert('xoa khong thanh cong');</script>";
        echo "<script>window.location.href='http://localhost/php2mvc/admin/view/comment.php';</script>";
        exit;
     
      }
    }
  }
}

?>