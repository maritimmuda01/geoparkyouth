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
            <li class="dropdown <?php echo $this->uri->segment(3) == '' ? 'active' : ''; ?>">
              <a href="<?php echo base_url(); ?>" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            <li class="dropdown <?php echo $this->uri->segment(2) == 'profile' ? 'active' : ''; ?>">
              <a href="<?php echo base_url(); ?>user/profile/<?= $user['id']?>" class="nav-link"><i class="fas fa-user"></i><span>Profile</span></a>
            </li>
            <li class="dropdown <?php echo $this->uri->segment(1) == 'articles' ? 'active' : ''; ?>">
              <a href="<?php echo base_url(); ?>articles/" class="nav-link"><i class="fas fa-user"></i><span>Articles</span></a>
            </li>
            <li class="menu-header">Post Management</li>
            <li class="dropdown <?php echo $this->uri->segment(2) == 'articles_management' ? 'active' : ''; ?>">
              <a href="<?php echo base_url(); ?>admin/articles_management" class="nav-link" ><i class="fas fa-user"></i> <span>Articles</span></a>
            </li>
            <li class="menu-header">User Management</li>
            <li class="dropdown <?php echo $this->uri->segment(2) == 'user_management' || $this->uri->segment(2) == 'user_edit' ? 'active' : ''; ?>">
              <a href="<?php echo base_url(); ?>admin/user_management" class="nav-link" ><i class="fas fa-user-edit"></i> <span>User</span></a>
            </li>
          </ul>

          <!-- <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getgeopark.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> Documentation
            </a>
          </div> -->
        </aside>
      </div>
