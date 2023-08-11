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


  public function add_cmt($content, $date_cm)
  {
    // account
    $Ma_acc = $_SESSION['id'];

    // product
    $Ma_pd = trim($_GET['id']);

    if (empty($content)) {
      $error = "<script>alert('thong tin binh luan khong duoc de trong !');</script>";
      echo $error;
    } else {
      $query = "INSERT INTO `Comment`(`Content`, `Ma_pd`, `Ma_acc`, `date_cm`) VALUES ('$content','$Ma_pd','$Ma_acc','$date_cm')";
      $result = $this->db->insert($query);
      $oke = "<script>alert('Da binh luan !');</script>";
      echo $oke;
    }
  }

  public function show_cmt()
  {
    // product
    $Ma_pd = trim($_GET['id']);

    // select comment
    $result = $this->db->select("SELECT * FROM Comment");
    $value = $result->fetch_all(MYSQLI_ASSOC);
    $i = 1;

    foreach ($value as $row) {
      $id_acc = $row['Ma_acc'];
      // account -> name
      $query_acc = "SELECT * FROM Account WHERE id = $id_acc ";
      $result_acc = $this->db->select($query_acc);
      $value_acc = $result_acc->fetch_assoc();

      $name_acc = $value_acc['Name'];
      $image_acc = $value_acc['Hinh_Anh'];
      if ($Ma_pd === $row['Ma_pd']) {
?>

        <div class="info_cmt">
          <div class="img_acc">
            <img src="<?php echo URL_ROOT . "/public/img/users/" . $image_acc; ?>" alt="">
          </div>
          <div class="info_acc_cmt">
            <div>
              <p class="info_nameAcc"><?php echo $name_acc; ?></p>
              <p><?php echo $row['Content'] ?></p>
            </div>
            <?php
            if ($_SESSION['Name'] == $name_acc) {
            ?>

              <div class="delete_cmt">
                <a href="#" class="delete_cmt">xoa</a>
              </div>

            <?php
            }
            ?>
          </div>
        </div>
        <div class="date_cmt">
          <p>
            <?php echo $row['date_cm'] ?>
          </p>
        </div>
        <hr>

<?php
      }
    }
  }

  public function qty_cmt()
  {
    // product
    $Ma_pd = trim($_GET['id']);

    // comment
    $result = $this->db->select("SELECT * FROM Comment");
    $value = $result->fetch_all(MYSQLI_ASSOC);
    $i = 0;
    foreach ($value as $row) {
      if ($Ma_pd === $row['Ma_pd']) {
        $i++;
      }
    }
    echo $qty = $i;
  }
}

?>