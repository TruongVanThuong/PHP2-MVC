<div class="navbar-custom">
  <ul class="list-unstyled topnav-menu float-right mb-0">

    <li class="dropdown d-none d-lg-block">
      <a class="nav-link dropdown-toggle mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
        <img src="../assets/images/flags/VN.svg.png" alt="user-image" class="mr-1" height="12"> <span class="align-middle">VietNam <i class="mdi mdi-chevron-down"></i> </span>
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item notify-item">
          <img src="..\assets\images\flags\us.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">EngLish</span>
        </a>

        <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item notify-item">
          <img src="..\assets\images\flags\italy.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Italian</span>
        </a>

        <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item notify-item">
          <img src="..\assets\images\flags\spain.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Spanish</span>
        </a>

        <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item notify-item">
          <img src="..\assets\images\flags\russia.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Russian</span>
        </a>

      </div>
    </li>


    <li class="dropdown notification-list">
      <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
        <i class="fe-bell noti-icon"></i>
        <span class="badge badge-danger rounded-circle noti-icon-badge">2</span>
      </a>
      <div class="dropdown-menu dropdown-menu-right dropdown-lg">

        <!-- item-->
        <div class="dropdown-item noti-title">
          <h5 class="m-0">
            <span class="float-right">
              <a href="" class="text-dark">
                <small>Clear All</small>
              </a>
            </span>Notification
          </h5>
        </div>

        <div class="slimscroll noti-scroll">

          <!-- item-->
          <a href="javascript:void(0);" class="dropdown-item notify-item">
            <div class="notify-icon">
              <img src="..\assets\images\users\avatar-2.jpg" class="img-fluid rounded-circle" alt="">
            </div>
            <p class="notify-details">Cristina Pride</p>
            <p class="text-muted mb-0 user-msg">
              <small>Hi, How are you? What about our next meeting</small>
            </p>
          </a>

          <!-- item-->
          <a href="javascript:void(0);" class="dropdown-item notify-item active">
            <div class="notify-icon bg-warning"><i class="mdi mdi-comment-account-outline"></i> </div>
            <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">1 min ago</small></p>
          </a>

          <!-- item-->
          <a href="javascript:void(0);" class="dropdown-item notify-item">
            <div class="notify-icon bg-info"><i class="mdi mdi-account-plus"></i></div>
            <p class="notify-details">New user registered.<small class="text-muted">5 hours ago</small></p>
          </a>

          <!-- item-->
          <a href="javascript:void(0);" class="dropdown-item notify-item">
            <div class="notify-icon">
              <img src="..\assets\images\users\avatar-4.jpg" class="img-fluid rounded-circle" alt="">
            </div>
            <p class="notify-details">Karen Robinson</p>
            <p class="text-muted mb-0 user-msg">
              <small>Wow ! this admin looks good and awesome design</small>
            </p>
          </a>




          <!-- item-->
          <a href="javascript:void(0);" class="dropdown-item notify-item">
            <div class="notify-icon bg-danger"><i class="mdi mdi-comment-account-outline"></i></div>
            <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">4 days ago</small></p>
          </a>

          <!-- item-->
          <a href="javascript:void(0);" class="dropdown-item notify-item">
            <div class="notify-icon bg-primary">
              <i class="mdi mdi-heart"></i>
            </div>
            <p class="notify-details">Carlos Crouch liked
              <b>Admin</b>
              <small class="text-muted">13 days ago</small>
            </p>
          </a>
        </div>

        <!-- All-->
        <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
          View all
          <i class="fi-arrow-right"></i>
        </a>

      </div>
    </li>

    <li class="dropdown notification-list">
      <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
        <img src="../assets/images/users/<?php echo $_SESSION['image']; ?>" alt="user-image" class="rounded-circle">
        <span class="pro-user-name ml-1">
          <?php echo $_SESSION['Name']; ?> <i class="mdi mdi-chevron-down"></i>
        </span>
      </a>
      <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
        <!-- item-->
        <div class="dropdown-item noti-title">
          <h6 class="m-0">
            Welcome !
          </h6>
        </div>

        <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item notify-item">
          <i class="dripicons-user"></i>
          <span>My Account</span>
        </a>

        <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item notify-item">
          <i class="dripicons-gear"></i>
          <span>Settings</span>
        </a>

        <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item notify-item">
          <i class="dripicons-help"></i>
          <span>Support</span>
        </a>

        <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item notify-item">
          <i class="dripicons-lock"></i>
          <span>Lock Screen</span>
        </a>

        <div class="dropdown-divider"></div>

        <!-- item-->
        <a href="<?php echo URL_ROOT_AD; ?>/user/logout.php" class="dropdown-item notify-item">
          <i class="dripicons-power"></i>
          <span>Logout</span>
        </a>

      </div>
    </li>

    <li class="dropdown notification-list">
      <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
        <i class="fe-settings noti-icon"></i>
      </a>
    </li>

  </ul>

  <ul class="list-unstyled menu-left mb-0">

    <li class="float-left">
      <button class="button-menu-mobile open-left disable-btn">
        <i class="fe-menu"></i>
      </button>
    </li>
    <li class="app-search d-none d-sm-block">
      <form>
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search...">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit">
              <i class="fe-search"></i>
            </button>
          </div>
        </div>
      </form>
    </li>
  </ul>
</div>