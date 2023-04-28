<?php
defined('BASEPATH') or exit('No direct script access allowed');
// var_dump($this->session->userdata('role_id'));
// die();
?>
<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="<?php echo base_url(); ?>"><?= $this->site_settings['title'] ?></a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="<?php echo base_url(); ?>"><i class="fa fa-globe" aria-hidden="true"></i></a>
    </div>
    <ul class="sidebar-menu">
      <li class="<?php echo $this->uri->segment(1) == 'Dashboard' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>auth"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
      <li class="<?php echo $this->uri->segment(1) == 'account'  &&  $this->uri->segment(2) == '' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>account"><i class="fa fa-user"></i> <span>Profile</span></a></li>

      <li class="dropdown <?php echo $this->uri->segment(2) == 'myArticles' ||  $this->uri->segment(2) == 'writeArticle' ? 'active' : ''; ?>">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-newspaper"></i> <span>Articles</span></a>
        <ul class="dropdown-menu">
          <li class="<?php echo $this->uri->segment(2) == 'writeArticle' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>account/writeArticle">Write Articles</a></li>
          <li class="<?php echo $this->uri->segment(2) == 'myArticles' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>account/myArticles">My Articles</a></li>
        </ul>
      </li>

      <li class="dropdown <?php echo $this->uri->segment(2) == 'jobs' || $this->uri->segment(2) == 'myJobvacancy' ||  $this->uri->segment(2) == 'writeJobvacancy' ? 'active' : ''; ?>">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-briefcase"></i> <span>Jobs</span></a>
        <ul class="dropdown-menu">
          <li class="<?php echo $this->uri->segment(2) == 'jobs' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>account/jobs">Job Vacancies</a></li>
          <li class="<?php echo $this->uri->segment(2) == 'writeJobvacancy' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>account/writeJobvacancy">Write Job Vacancy</a></li>
          <li class="<?php echo $this->uri->segment(2) == 'myJobvacancy' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>account/myJobvacancy">My Job Vacancy</a></li>
        </ul>
      </li>

      <li class="<?php echo $this->uri->segment(2) == 'findUser' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>account/findUser"><i class="fa fa-users"></i> <span>Find Others</span></a></li>

      <?php if ($this->session->userdata('role_id') != 2) { ?>

        <li class="menu-header">Post Management</li>
        <li class="dropdown <?php echo $this->uri->segment(1) == 'article' ||  $this->uri->segment(1) == 'categories' ? 'active' : ''; ?>">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-globe"></i> <span>Articles</span></a>
          <ul class="dropdown-menu">
            <li class="<?php echo $this->uri->segment(1) == 'article' && $this->uri->segment(2) == '' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>article">Published Articles</a></li>
            <li class="<?php echo $this->uri->segment(1) == 'article' && $this->uri->segment(2) == 'pending' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>article/pending">Pending Articles</a></li>
            <?php if ($this->session->userdata('role_id') == 1) { ?>
              <li class="<?php echo $this->uri->segment(1) == 'categories' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>categories">Categories</a></li>
            <?php } ?>
          </ul>
        </li>
        <li class="dropdown <?php echo $this->uri->segment(1) == 'jobvacancy' ||  $this->uri->segment(1) == 'jobtype' ? 'active' : ''; ?>">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-globe"></i> <span>Job Vacancy</span></a>
          <ul class="dropdown-menu">
            <li class="<?php echo $this->uri->segment(1) == 'jobvacancy' && $this->uri->segment(2) == '' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>jobvacancy">Published Job Vacancy</a></li>
            <li class="<?php echo $this->uri->segment(1) == 'jobvacancy' && $this->uri->segment(2) == 'pending' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>jobvacancy/pending">Pending Job Vacancy</a></li>
            <?php if ($this->session->userdata('role_id') == 1) { ?>
              <li class="<?php echo $this->uri->segment(1) == 'jobtype' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>jobtype">Job Type</a></li>
            <?php } ?>
          </ul>
        </li>

        <li class="menu-header">User Management</li>

        <li class="dropdown <?php echo $this->uri->segment(1) == 'user' ? 'active' : ''; ?>">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa fa-user"></i> <span>User Management</span></a>
          <ul class="dropdown-menu">
            <li class="<?php echo $this->uri->segment(2) == 'active' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>user/active">Active User</a></li>
            <li class="<?php echo $this->uri->segment(2) == 'inactive' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>user/inactive">Inactive User</a></li>
          </ul>
        </li>
        <li class="menu-header">Administrator</li>
        <li class="<?php echo $this->uri->segment(1) == 'country' || $this->uri->segment(1) == 'geoparks' ||  $this->uri->segment(1) == 'region' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>region"><i class="fas fa-globe"></i> <span>Countries & Geoparks</span></a></li>
        <?php if ($this->session->userdata('role_id') == 1) { ?>
          <li class="<?php echo $this->uri->segment(2) == 'index' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>pageparent/index"><i class="far fa-file-alt"></i> <span>Pages Management</span></a></li>
          <li class="<?php echo  $this->uri->segment(2) == 'sitesettings' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>pageparent/sitesettings"><i class="fa fa-cog"></i> <span>Site Settings</span></a></li>
      <?php }
      } ?>
  </aside>
</div>