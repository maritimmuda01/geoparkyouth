<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="#">Geopark</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">GYF</a>
          </div>
          <ul class="sidebar-menu">

            <?php if ($user['role_id'] == 1) { ?>
            <li class="dropdown <?php echo $this->uri->segment(1) == 'admin' && $this->uri->segment(2) == '' ? 'active' : ''; ?>">
              <a href="<?php echo base_url(); ?>" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            <?php } ?>

            <li class="dropdown <?php echo $this->uri->segment(2) == 'profile' && $this->uri->segment(3) == $user['role_id'] ? 'active' : ''; ?>">
              <a href="<?php echo base_url(); ?>user/profile/<?= $user['id']?>" class="nav-link"><i class="fas fa-user-alt"></i><span>Profile</span></a>
            </li>

            <li class="dropdown <?php echo $this->uri->segment(2) == 'articles' ? 'active' : ''; ?>">
              <a href="<?php echo base_url(); ?>user/articles/" class="nav-link"><i class="fas fa-newspaper"></i><span>Articles</span></a>
            </li>

            <li class="dropdown <?php echo $this->uri->segment(1) == 'elibrary' ? 'active' : ''; ?>">
              <a href="<?php echo base_url(); ?>e-library/" class="nav-link"><i class="fas fa-book-open"></i><span>E-Library</span></a>
            </li>

            <li class="dropdown <?php echo $this->uri->segment(1) == 'job-portal' ? 'active' : ''; ?>">
              <a href="<?php echo base_url(); ?>job-portal/" class="nav-link"><i class="fas fa-briefcase"></i><span>Job Portal</span></a>
            </li>

            <li class="dropdown <?php echo $this->uri->segment(1) == 'find-user' ? 'active' : ''; ?>">
              <a href="<?php echo base_url(); ?>job-portal/" class="nav-link"><i class="fas fa-search"></i><span>Find Others</span></a>
            </li>

            <?php if ($user['role_id'] == 1) { ?>
            <li class="menu-header">Post Management</li>
            <li class="dropdown <?php echo $this->uri->segment(2) == 'articles_management' ? 'active' : ''; ?>">
              <a href="<?php echo base_url(); ?>admin/articles_management" class="nav-link" ><i class="fas fa-user"></i> <span>Articles</span></a>
            </li>
            <li class="dropdown <?php echo $this->uri->segment(2) == 'categories' ? 'active' : ''; ?>">
              <a href="<?php echo base_url(); ?>admin/categories" class="nav-link" ><i class="fas fa-user"></i> <span>Categories</span></a>
            </li>
            <li class="menu-header">User Management</li>
            <li class="dropdown <?php echo $this->uri->segment(2) == 'user_management' || $this->uri->segment(2) == 'user_edit' ? 'active' : ''; ?>">
              <a href="<?php echo base_url(); ?>admin/user_management" class="nav-link" ><i class="fas fa-user-edit"></i> <span>User</span></a>
            </li>
            <?php } ?>
          </ul>
          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="<?php echo base_url(); ?>auth/logout?>" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-sign-out-alt"></i> Log Out
            </a>
          </div>
        </aside>
      </div>
