<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_layout/header');
?>
<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <?= $this->session->flashdata('message'); ?>

            <div class="card card-primary">
              <div class="card-header"><h4>Reset Password</h4></div>

              <div class="card-body">
                <?php echo form_open_multipart('auth/changePassword');?>
                  <div class="form-group">
                    <label for="name">New Password</label>
                    <input type="password" class="form-control" id="password1" name="password1" >
                  </div>
                  <div class="form-group">
                    <label for="name">Confirm New Password</label>
                    <input type="password" class="form-control" id="password2" name="password2" >
                    <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Reset Password
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; Geopark 2021
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

<?php $this->load->view('_layout/js'); ?>