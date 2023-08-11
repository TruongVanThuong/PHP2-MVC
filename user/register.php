<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- link web -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <!-- end link web -->
  <!-- <link rel="stylesheet" href="../assets/css/style.css"> -->
  <title>Document</title>
</head>

<body>
  <div class="wrapper">
    <div class="logo">
      <img src="../assets/images/AdminLogo.png" alt="">
    </div>
    <div class="text-center mt-4 name">
      Admin
    </div>
    <form class="p-3 mt-3">

      <div class="form-field d-flex align-items-center">
        <span class="far fa-user"></span>
        <input type="text" name="userName" id="userName" placeholder="Username">
      </div>

      <div class="form-field d-flex align-items-center">
        <span class="far fa-envelope"></span>
        <input type="email" name="Email" id="Email" placeholder="Email">
      </div>

      <div class="form-field d-flex align-items-center">
        <span class="far fa-avata"></span>
        <input type="file" name="image" id="image" placeholder="Hinh Anh">
      </div>

      <div class="form-field d-flex align-items-center">
        <span class="fas fa-key"></span>
        <input type="password" name="password" id="pwd" placeholder="Password">
      </div>

      <div class="form-field d-flex align-items-center">
        <span class="fas fa-key"></span>
        <input type="password" name="Repeat_password" id="Rpwd" placeholder="Repeat Password">
      </div>

      <button class="btn mt-3">Register</button>
    </form>
    <div class="text-center fs-6">
      <a href="./login.php">Login</a>
    </div>
  </div>
</body>

</html>