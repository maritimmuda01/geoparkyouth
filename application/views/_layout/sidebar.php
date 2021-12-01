<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand mt-4 mb-3">
            <a href="<?= base_url() ?>"><img src="<?php echo base_url(); ?>assets/home/images/site_logo/<?= $site_settings['logo'] ?>" alt="Myself" height="50px"></a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?= base_url() ?>"><img src="<?php echo base_url(); ?>assets/home/images/site_logo/<?= $site_settings['logo'] ?>" alt="Myself" height="20px"></a>
          </div>
          <ul class="sidebar-menu">

            <?php if ($user['role_id'] == 1) { ?>
            <li class="dropdown <?php echo $this->uri->segment(1) == 'admin' && $this->uri->segment(2) == '' ? 'active' : ''; ?> <?php echo $this->uri->segment(1) == 'user' && $this->uri->segment(2) == '' ? 'active' : ''; ?>">
              <a href="<?php echo base_url();?>auth" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
            <?php }?>

            <li class="dropdown <?php echo $this->uri->segment(2) == 'profile' && $this->uri->segment(3) == $user['id'] ? 'active' : ''; ?>">
              <a href="<?php echo base_url(); ?>user/profile/<?= $user['id']?>" class="nav-link"><i class="fas fa-user-alt"></i><span>Profile</span></a>
            </li>

            <li class="dropdown <?php echo $this->uri->segment(2) == 'jobs' ? 'active' : ''; ?>">
              <a href="<?php echo base_url(); ?>user/jobs/" class="nav-link"><i class="fas fa-briefcase"></i><span>Jobs</span></a>
            </li>

            <li class="dropdown <?php echo $this->uri->segment(2) == 'find_user' ? 'active' : ''; ?> <?php echo $this->uri->segment(2) == 'profile' && $this->uri->segment(3) != $user['id'] ? 'active' : ''; ?>">
              <a href="<?php echo base_url(); ?>user/find_user/" class="nav-link"><i class="fas fa-search"></i><span>Find Others</span></a>
            </li>

            <?php if ($user['role_id'] == 1) { ?>
            <li class="menu-header">Post Management</li>
            <li class="dropdown <?php echo $this->uri->segment(2) == 'articles_management' ? 'active' : ''; ?>">
              <a href="<?php echo base_url(); ?>admin/articles_management" class="nav-link <?php if ($pending_articles > 0) { echo 'beep beep-sidebar'; } ?>" ><i class="fas fa-newspaper"></i> <span>Articles</span></a>
            </li>
            <li class="dropdown <?php echo $this->uri->segment(2) == 'jobs_management' || $this->uri->segment(2) == 'jobs_edit' ? 'active' : ''; ?>">
              <a href="<?php echo base_url(); ?>admin/jobs_management" class="nav-link <?php if ($pending_jobs > 0) { echo 'beep beep-sidebar'; } ?>" ><i class="fas fa-briefcase"></i> <span>Jobs</span> </a>
            </li>
            <li class="dropdown <?php echo $this->uri->segment(2) == 'categories' ? 'active' : ''; ?>">
              <a href="<?php echo base_url(); ?>admin/categories" class="nav-link" ><i class="fas fa-user"></i> <span>Categories</span></a>
            </li>
            <li class="dropdown <?php echo $this->uri->segment(2) == 'user_management' || $this->uri->segment(2) == 'user_edit' ? 'active' : ''; ?>">
              <a href="<?php echo base_url(); ?>admin/user_management" class="nav-link" ><i class="fas fa-user-edit"></i> <span>User Management</span></a>
            </li>
            <li class="menu-header">Site Management</li>
            <li class="dropdown <?php echo $this->uri->segment(2) == 'pages' ? 'active' : ''; ?>">
              <a href="<?php echo base_url(); ?>admin/pages" class="nav-link" ><i class="fas fa-file"></i> <span>Pages</span></a>
            </li>
            <li class="dropdown <?php echo $this->uri->segment(2) == 'site_settings' ? 'active' : ''; ?>">
              <a href="<?php echo base_url(); ?>admin/site_settings" class="nav-link" ><i class="fas fa-cog"></i> <span>Site Settings</span></a>
            </li>
            <?php } ?>
          </ul>
          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="<?php echo base_url(); ?>auth/logout?>" class="btn btn-danger btn-lg btn-block btn-icon-split">
              <i class="fas fa-sign-out-alt"></i> Log Out
            </a>
          </div>
        </aside>
      </div>
