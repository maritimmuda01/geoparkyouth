<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Change Password</h1>
          </div>

          <div class="section-body">

            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <form id="change-password" method="POST" action="<?php echo base_url(); ?>user/password_update">
                  <div class="card">
                    <div class="card-body">
                      <div class="form-group">
                        <label for="inputAddress2">Current Password</label>
                        <input type="password" class="form-control" name="currentPassword">
                      </div>
                      <div class="form-group">
                        <label for="inputAddress2">New Password</label>
                        <input type="password" class="form-control" name="newPassword1">
                      </div>
                      <div class="form-group">
                        <label for="inputAddress2">Confirm Password</label>
                        <input type="password" class="form-control" name="newPassword2">
                      </div>
                    </div>
                    <div class="card-footer">
                      <button class="btn btn-primary">Save</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
      </div>
<?php $this->load->view('dist/_partials/footer'); ?>