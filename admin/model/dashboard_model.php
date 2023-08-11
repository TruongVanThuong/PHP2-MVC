<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include '../../config.php';
include "session.php";
include APP_ROOT . "/libraries/database.php";
include APP_ROOT . "/helper/format.php";
?>


<?php

class DashboardModel
{

  private $db;
  private $fm;

  public function __construct()
  {
    $this->db = new Database();
    $this->fm = new Format();
  }

  // them san pham
  public function add_products($name, $price, $discount, $image, $category, $text, $created)
  {

    if (empty($name)|| empty($price) || empty($image) || empty($discount) || empty($category) || empty($text)) {
      $error = "<b style='color: red;'>du lieu khong duoc de trong</b>";
      echo $error;
    } else {
      $query = "INSERT INTO `Products` (`Category_id`, `Name`, `Price`, `Image`, `Text`, `Created`, `Discount`) VALUES ('$category','$name','$price','$image','$text','$created','$discount')";
      // var_dump($query);
      $result = $this->db->insert($query);
      echo "<script> alert('da them san pham !'); </script> ";
    }
  }

  // danh sach san pham
  public function select_products()
  {
    $result = $this->db->select("SELECT * FROM Products");
    $value = $result->fetch_all(MYSQLI_ASSOC);
    $i = 1;
    $a = 1;
    foreach ($value as $row) { ?>
      <tr>
        <td><input id="checkbox" type="checkbox" name="cat[]" value=" <?php echo $i++; ?> "> <?php echo $a++; ?> </td>
        <td><?php echo $row["Category_id"]; ?></td>
        <td><?php echo $row["Name"]; ?></td>
        <td><?php echo $row["Price"]; ?></td>
        <td><img style="width: 50px; height: 35px;" src="../../public/img/products/<?php echo $row["Image"]; ?>" alt=""></td>
        <td><?php echo $row["Text"]; ?></td>
        <td><?php echo $row["Created"]; ?></td>
        <td><?php echo $row["Discount"]; ?></td>
        <td>
          <a style="font-size: 13px; padding: 2px 4px;" class="btn btn-primary" name="btn_edit" href="./edit_dashboard.php?id=<?php echo $row["id"]; ?>"><i class="fe-edit"></i></a>
          <a style="font-size: 13px; padding: 2px 4px;" class="btn btn-primary btn_delete" name="btn_delete" href="./dashboard.php?id=<?php echo $row["id"]; ?>"><i class="fe-delete"></i></a>
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
    // echo "<pre>";
    // var_dump($value);
    // echo "</pre>";

    // $rows = $value;

    // echo $mahanghoa = $value["Category_id"];
    // echo $name = $value["Name"];
    // echo $price = $value["Price"];
    // echo $image = $value["Image"];
    // echo $text = $value["Text"];
    // echo $created = $value["Created"];
    // echo $discount = $value["Discount"];
  }

  // edit san pham
  public function update_product()
  {
    if (isset($_GET["id"]) && !empty(trim($_GET['id']))) {
      $id = trim($_GET['id']);
      $result = $this->db->select("SELECT * FROM Products WHERE id = $id");
      $value = $result->fetch_assoc();

      $mahanghoa = $value["Category_id"];
      $name = $value["Name"];
      $price = $value["Price"];
      $image = $value["Image"];
      $text = $value["Text"];
      $created = $value["Created"];
      $discount = $value["Discount"];
    }
    ?>
    <!-- // update san pham -->
    <div class="box_form">
      <form class="alert alert-secondary" enctype="multipart/form-data" method="post" action="./edit_dashboard.php">

        <div class="row">
          <div class="col pl-3 ">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label class="form-label">Mã sản phẩm: </label>
            <br>
            <input class="form-control" type="number" name="mahanghoa" min="1" value="<?php echo $id; ?>"><br>
          </div>
          <div class="col pl-3 ">
            <label class="form-label">Tên sản phẩm: </label>
            <br>
            <input class="form-control" type="text" name="name" value="<?php echo $name; ?>"><br>
          </div>
          <div class="col pl-3 ">
            <label class="form-label">Đơn giá: </label>
            <br>
            <input class="form-control" type="number" name="price" value="<?php echo $price; ?>" placeholder="<?php echo $price; ?>"><br>
          </div>
        </div>

        <div class="row">
          <div class="col pl-3 ">
            <label class="form-label">Giảm giá: </label>
            <br>
            <input class="form-control" type="text" name="discount" value="<?php echo $discount; ?>"><br>
          </div>
          <div class="col pl-3 ">
            <label class="form-label">Hình ảnh: </label>
            <br>
            <input class="form-control" type="file" name="image" value="<?php echo $image; ?>"><br>
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
            <textarea class="form-control" rows="2" id="comment" name="text" value="<?php echo $text; ?>"><?php echo $text; ?></textarea>
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
      echo $name = $_POST['name'];
      echo $price = $_POST['price'];
      // xu ly hinh that ken thu muc server ------------
      $image = $_FILES["image"]["name"];
      $link = "../../public/img/products/";
      echo move_uploaded_file($_FILES["image"]["name"], $link . $image);
      echo $text = $_POST['text'];
      echo $created = $_POST['created'];
      echo $discount = $_POST['discount'];
      $query = "UPDATE Products SET `Category_id` = '$category', `Name` = '$name', `Price` = '$price', `Image` = '$image', `Text` = '$text', `Created` = '$created', `Discount` = '$discount' WHERE id = $id";
      $result = $this->db->update($query);
      if ($result === TRUE) {
        echo "<script>alert('update thanh cong');</script>";
        echo "<script>window.location.href='http://localhost/php2mvc/admin/view/dashboard.php';</script>";
      } else {
        echo "<script>alert('Loi roi ! update khong thanh cong');</script>";
      }
    }
  }
  // end edit san pham

  // xoa san pham
  public function delete_product()
  {
    if (isset($_GET["id"]) && !empty(trim($_GET['id']))) {
      $id = trim($_GET['id']);

      $query = "DELETE FROM Products Where id = $id";
      $result = $this->db->delete($query);
      if ($result === TRUE) {
        // if (mysqli_stmt_execute(mysqli_prepare($this->db, $query))) {
          echo "<script>alert('Xoá thành công !')</script>";
          echo "<script>window.location.href='http://localhost/php2mvc/admin/view/dashboard.php';</script>";
          exit;
        // } else {
        //   echo "Rất tiếc, đã xảy ra lỗi. Vui lòng thử lại sau !";
        // }
      }
      else{
        // Chuyển hướng nếu url không chứa thông số id
        echo "<script>alert('xoa khong thanh cong');</script>";
        echo "<script>window.location.href='http://localhost/php2mvc/admin/view/dashboard.php';</script>";
        exit;
     
      }
    }
  }
}
?>