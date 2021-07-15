<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_layout/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
        <section class="section">
          <div class="section-body">
            <div id="output-status"></div>
            <div class="row">
              <div class="col-md-4">
                <div class="card">
                  <div class="card-header">
                    <a href="<?php echo base_url(); ?>user/profile" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>  
                    <h4>Settings</h4>
                  </div>
                  <div class="card-body">
                        <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link " href="<?php echo base_url(); ?>user/settings" role="tab" aria-controls="profile" aria-selected="true">Profile Settings</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" id="credits-tab4" data-toggle="tab" href="<?php echo base_url(); ?>user/changepassword" role="tab" aria-controls="account" aria-selected="false">Change Password</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="credits-tab4" data-toggle="tab" href="#credits4" role="tab" aria-controls="credits" aria-selected="false">Credits</a>
                          </li>
                        </ul>
                  </div>
                </div>
              </div>
                <div class="col-12 col-sm-12 col-md-8">
                  <div class="tab-content no-padding" id="myTab2Content">
                    <div class="tab-pane fade show active" id="profile4" role="tabpanel" aria-labelledby="profile-tab4">
                      <form id="change-password" method="POST" action="<?php echo base_url(); ?>user/password_update">
                        <div class="card">
                          <div class="card-header">
                            <h4>Change Password</h4>
                          </div>
                          <div class="card-body">
                            <div class="form-group">
                              <label for="name">Current Password</label>
                              <input type="password" class="form-control" id="current_password" name="current_password" >
                              <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                              <label for="name">New Password</label>
                              <input type="password" class="form-control" id="new_password1" name="new_password1" >
                            </div>
                            <div class="form-group">
                              <label for="name">Confirm New Password</label>
                              <input type="password" class="form-control" id="new_password2" name="new_password2" >
                              <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
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
            </div>
          </div>
        </section>
      </div>
<?php $this->load->view('_layout/footer'); ?>
