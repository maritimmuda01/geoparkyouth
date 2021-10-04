<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="#">GGYF</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">GGYF</a>
          </div>
          <ul class="sidebar-menu">

            <?php if ($user['role_id'] == 1) { ?>
            <li class="dropdown <?php echo $this->uri->segment(1) == 'admin' && $this->uri->segment(2) == '' ? 'active' : ''; ?> <?php echo $this->uri->segment(1) == 'user' && $this->uri->segment(2) == '' ? 'active' : ''; ?>">
              <a href="<?php echo base_url();?>auth" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            <?php }?>

            <li class="dropdown <?php echo $this->uri->segment(2) == 'profile' && $this->uri->segment(3) == $user['id'] ? 'active' : ''; ?>">
              <a href="<?php echo base_url(); ?>user/profile/<?= $user['id']?>" class="nav-link"><i class="fas fa-user-alt"></i><span>Profile</span></a>
            </li>

            <li class="dropdown <?php echo $this->uri->segment(2) == 'articles' ? 'active' : ''; ?>">
              <a href="<?php echo base_url(); ?>user/articles/" class="nav-link"><i class="fas fa-newspaper"></i><span>Articles</span></a>
            </li>

            <li class="dropdown <?php echo $this->uri->segment(2) == 'jobs' ? 'active' : ''; ?>">
              <a href="<?php echo base_url(); ?>user/jobs/" class="nav-link"><i class="fas fa-briefcase"></i><span>Jobs</span></a>
            </li>

            <li class="dropdown <?php echo $this->uri->segment(2) == 'find_user' ? 'active' : ''; ?> <?php echo $this->uri->segment(2) == 'profile' && $this->uri->segment(3) != $user['id'] ? 'active' : ''; ?>">
              <a href="<?php echo base_url(); ?>user/find_user/" class="nav-link"><i class="fas fa-search"></i><span>Find Others</span></a>
            </li>

            <?php if ($user['role_id'] == 1) { ?>
            <li class="menu-header">Administrator</li>
            <li class="dropdown <?php echo $this->uri->segment(2) == 'articles_management' ? 'active' : ''; ?>">
              <a href="<?php echo base_url(); ?>admin/articles_management" class="nav-link" ><i class="fas fa-newspaper"></i> <span>Articles</span> <?php if ($pending_articles > 0) { echo '<span class="badge badge-warning">'.$pending_articles.'</span>'; } ?></a>
            </li>
            <li class="dropdown <?php echo $this->uri->segment(2) == 'jobs_management' || $this->uri->segment(2) == 'jobs_edit' ? 'active' : ''; ?>">
              <a href="<?php echo base_url(); ?>admin/jobs_management" class="nav-link" ><i class="fas fa-briefcase"></i> <span>Jobs</span> <?php if ($pending_jobs > 0) { echo '<span class="badge badge-warning">'.$pending_jobs.'</span>'; } ?></a>
            </li>
            <!-- <li class="dropdown <?php echo $this->uri->segment(2) == 'categories' ? 'active' : ''; ?>">
              <a href="<?php echo base_url(); ?>admin/categories" class="nav-link" ><i class="fas fa-user"></i> <span>Categories</span></a>
            </li> -->
            <li class="dropdown <?php echo $this->uri->segment(2) == 'user_management' || $this->uri->segment(2) == 'user_edit' ? 'active' : ''; ?>">
              <a href="<?php echo base_url(); ?>admin/user_management" class="nav-link" ><i class="fas fa-user-edit"></i> <span>User Management</span></a>
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
