<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('dist/_partials/header');

?>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <a href="<?= base_url() ?>">
                <img src="<?= base_url() ?>images/site_settings/<?= $this->site_settings['logo'] ?>" alt="logo" width="200">
              </a>
            </div>
            <?= $this->session->flashdata('message'); ?>

            <div class="card card-primary">
              <div class="card-header">
                <h5 class="mt-4"><a href="<?= base_url() ?>" class="mr-3"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>Login</h5>
              </div>

              <div class="card-body">
                <?php echo validation_errors(); ?>
                <form method="POST" action="<?= base_url('auth'); ?>" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="text" class="form-control form-control-user" name="email" tabindex="1" required autofocus value="<?= set_value('email') ?>">
                    <div class=" invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">Password</label>
                      <!--<div class="float-right">-->
                      <!--  <a href="<?php echo base_url(); ?>auth/forgotPassword" class="text-small">-->
                      <!--    Forgot Password?-->
                      <!--  </a>-->
                      <!--</div>-->
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      Please fill in your password
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
                <!-- <div class="text-center mt-4 mb-3">
                  <div class="text-job text-muted">Login With Social</div>
                </div>
                <div class="row sm-gutters">
                  <div class="col-6">
                    <a class="btn btn-block btn-social btn-facebook">
                      <span class="fab fa-facebook"></span> Facebook
                    </a>
                  </div>
                  <div class="col-6">
                    <a class="btn btn-block btn-social btn-twitter">
                      <span class="fab fa-twitter"></span> Twitter
                    </a>                                
                  </div>
                </div> -->
              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Don't have an account? <a href="<?php echo base_url(); ?>auth/registration">Create One</a>
            </div>
            <div class="simple-footer">
              <?= $this->site_settings['title']  ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <?php $this->load->view('dist/_partials/js'); ?>