<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
    </div>
    <div class="row">
      <div class="col-12 mb-4">
        <div class="hero bg-primary text-white">
          <div class="hero-inner">
            <h2>Hi, <?= $profile->name ?>!</h2>
            <p class="lead">Welcome to Geopark Youth Hub! You are logged in as <?= $profile->role_name ?>.</p>
            <div class="mt-4">
              <a href="<?php base_url() ?>account" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="far fa-user"></i> My Profile</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>User</h4>
            </div>
            <div class="card-body">
              <?= count($User) ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="far fa-newspaper"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>UGGp</h4>
            </div>
            <div class="card-body">
              <?= count($Geopark) ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-warning">
            <i class="far fa-file"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Articles</h4>
            </div>
            <div class="card-body">
              <?= count($Articles) ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-success">
            <i class="fas fa-circle"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Job Vacancies</h4>
            </div>
            <div class="card-body">
              <?= count($Jobvacancies) ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php $this->load->view('dist/_partials/footer'); ?>