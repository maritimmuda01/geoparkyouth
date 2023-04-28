<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications
                <div class="float-right" id="markAsRead">
                  <a href="#markAsRead">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons" id="show_notif">
              </div>
            </div>
          </li>

          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <img alt="image" src="<?= base_url() . "images/profile/" . is_logged_in()->profile_picture ?>" class="rounded-circle mr-2" style="height: 30px">
              <div class="d-sm-none d-lg-inline-block"><?= is_logged_in()->name ?></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="<?php echo base_url(); ?>" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Homepage
              </a>
              <a href="<?php echo base_url(); ?>account" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <div class="dropdown-divider"></div>
              <a href="<?= base_url() ?>auth/logout" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>