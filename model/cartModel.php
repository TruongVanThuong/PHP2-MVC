<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include '../config.php';
include APP_ROOT . "/libraries/session.php";
include APP_ROOT . "/libraries/database.php";
include APP_ROOT . "/helper/format.php";
?>

<?php

class CartModel
{

  private $db;
  private $fm;

  public function __construct()
  {
    $this->db = new Database();
    $this->fm = new Format();
  }

  public function select_order()
  {
    $query = "SELECT * FROM `Order`";
    $result = $this->db->select($query);
    if ($result == true) {
      $value = $result->fetch_all(MYSQLI_ASSOC);
      $i = 1;
      $price_all = 0;
      $qty_all = 0;
      foreach ($value as $row) {
        $id_pd = $row['id_pd'];
        $query_pd = "SELECT * FROM `Products` WHERE id = $id_pd";
        $result_pd = $this->db->select($query_pd);
        $value_pd = $result_pd->fetch_assoc();

        $price = (int)$value_pd['Price'];
        $qty = (int)$row['Quantity'];
        $amount = $price * $qty;

        $qty_all += $qty;
        $price_all += $amount;
?>

        <div class="shopping-cart">

          <div class="stt_cart">
            <span><?php echo $i++; ?></span>
          </div>

          <div class="img_sp">
            <img src="../public/img/products/<?php echo $row["Image"]; ?>">
          </div>

          <div class="shopping-items" id="shopping_items_<?php echo $row["id"]; ?>">
            <h3><?php echo $value_pd['Name']; ?></h3>
            <input oninput="myFunction_<?php echo $row["id"]; ?>(this)" id="item_quantity_<?php echo $row["id"]; ?>" name="soluong_<?php echo $row["id"]; ?>" type="number" class="item-quantity" value="<?php echo $row["Quantity"]; ?>" min="1">
            <span>Giá: <input disabled="" type="number" class="price_1" id="price_<?php echo $row["id"]; ?>" value="<?php echo $value_pd['Price']; ?>"> Đơn vị: vnđ</span><br>
          </div>

          <div class="amount">
            <h4>Thành tiền : <input class="thanh-tien" oninput="myTotal_<?php echo $row["id"]; ?>(this)" type="text" id="thanhtien_<?php echo $row["id"]; ?>" name="thanhtien_<?php echo $row["id"]; ?>" value="<?php echo $amount; ?>">vnđ</h4>
          </div>

          <div class="btn_gb">
            <a href="./cart.php?id=<?php echo $row["id"]; ?>" class="garban" name="garban">Delete</a>
          </div>

        </div>
        <hr>
        <!-- js tong tien -->
        <script>
          arr.push(document.getElementById("price_<?php echo $row["id"]; ?>").value)

          function myFunction_<?php echo $row["id"]; ?>(obj) {
            var x = obj.value;
            document.getElementById("thanhtien_<?php echo $row["id"]; ?>").value = x * document.getElementById('price_<?php echo $row["id"]; ?>').value;
            console.log(Number(document.getElementById("thanhtien_<?php echo $row["id"]; ?>").value))
          }
        </script>
      <?php

      }
      echo "<p class='price_all'>Tổng tiền : $price_all vnđ</p>";
      // echo $qty_all;
      echo "<input type='hidden' name='qty_all' value='$qty_all'>";
      echo "<input type='hidden' name='price_all' value='$price_all'>";
    }
  }

  public function delete_order()
  {
    if (isset($_GET["id"]) && !empty(trim($_GET['id']))) {
      $id = trim($_GET['id']);

      $query = "DELETE FROM `Order` Where id = $id";
      $result = $this->db->delete($query);
      if ($result === TRUE) {
        echo "<script>alert('Xoá thành công !')</script>";
        echo "<script>window.location.href='http://localhost/php2mvc/views/cart.php';</script>";
        exit;
        // } else {
        //   echo "Rất tiếc, đã xảy ra lỗi. Vui lòng thử lại sau !";
        // }
      } else {
        // Chuyển hướng nếu url không chứa thông số id
        echo "<script>alert('xoa khong thanh cong');</script>";
        echo "<script>window.location.href='http://localhost/php2mvc/views/cart.php';</script>";
        exit;
      }
    }
  }

  public function history_order($Status, $id_acc, $name_acc, $gmail_acc, $qty_all, $price_all, $date)
  {
    if (!isset($Status) || !isset($id_acc) || !isset($name_acc) || !isset($gmail_acc) || !isset($qty_all) || !isset($price_all) || !isset($date)) {
      echo "<script>alert('Lỗi rồi. Vui lòng điền đủ thông tin !')</script>";
    } else {
      $query = "INSERT INTO `Transaction`(`Status`, `User_id`, `User_name`, `User_email`, `Amount`, `Qty`, `Created`) VALUES ('$Status','$id_acc','$name_acc','$gmail_acc','$price_all','$qty_all','$date')";
      $result = $this->db->insert($query);
      $queryOd = "DELETE FROM `Order` ";
      $resultOd = $this->db->delete($queryOd);
      echo "<script>alert('Thanh Toán thành công !')</script>";
      echo "<script>window.location.href='http://localhost/php2mvc/views/cart_detail.php';</script>";
    }
  }

  public function cart_detail()
  {
    $query = "SELECT * FROM `Transaction`";
    $result = $this->db->select($query);
    $value = $result->fetch_all(MYSQLI_ASSOC);
    foreach ($value as $row) {
      ?>
      <tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["User_email"]; ?></td>
        <td><?php echo $row["User_name"]; ?></td>
        <td><?php echo $row["User_id"]; ?></td>
        <td><?php echo $row["Qty"]; ?></td>
        <td><?php echo $row["Amount"]; ?></td>
        <td><?php echo $row["Created"]; ?></td>
        <td><?php echo $row["Status"]; ?></td>
      </tr>
<?php
    }
  }
}

?>