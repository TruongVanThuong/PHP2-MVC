<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require "../model/dashboard_model.php";
?>
<?php
function add_products()
{

  $dashboard = new DashboardModel();
  if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    // xu ly hinh that ken thu muc server ------------
    $image = $_FILES["image"]["name"];
    $link = "../../public/img/products/";
    move_uploaded_file($_FILES["image"]["name"], $link . $image);
    $category = $_POST['category'];
    $text = $_POST['text'];
    $created = $_POST['created'];

    $check_add_products = $dashboard->add_products($name, $price, $discount, $image, $category, $text, $created);
  }

}

function selet_products()
{
  $dashboard = new DashboardModel();
  $set_products = $dashboard->select_products();
}

function update_products()
{
  $dashboard = new DashboardModel();
  $update_products = $dashboard->update_product();
  
}

function delete_products()
{
  $dashboard = new DashboardModel();
  $delete_products = $dashboard->delete_product();
  
}

?>