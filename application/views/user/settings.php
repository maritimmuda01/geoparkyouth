<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_layout/header');
?>
<!-- Main Content -->
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div> 
<div class="main-content">
  <section class="section">
    <div class="section-header">
    </div>
    <div class="section-body">
      <div id="output-status"></div>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Settings</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12 col-sm-12 col-md-4">
                  <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="profile-tab4" data-toggle="tab" href="#profile4" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="change_password-tab4" data-toggle="tab" href="#change_password4" role="tab" aria-controls="change_password" aria-selected="false">Change Password</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="credit-tab4" data-toggle="tab" href="#credit4" role="tab" aria-controls="credit" aria-selected="true">Credit</a>
                    </li>
                  </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-8">
                  <div class="tab-content no-padding" id="myTab2Content">
                    <div class="tab-pane fade show active" id="profile4" role="tabpanel" aria-labelledby="profile-tab4">
                      <?php echo form_open_multipart('user/profile_update');?>
                      <div class="card">
                        <div class="card-body">
                          <div class="form-group profile-pic-wrapper pic-holder">
                            <img id="profilePic" class="pic" src="<?= base_url('assets/dashboard/img/profile/') . $user['profile_picture']; ?>">
                            <label for="newProfilePhoto" class="upload-file-block">
                              <div class="text-center">
                                <div class="mb-2">
                                  <i class="fa fa-camera fa-2x"></i>
                                </div>
                                <div class="text-uppercase">
                                  Update <br /> Profile Photo
                                </div>
                              </div>
                            </label>
                            <input type="file" class="uploadimage" id="newProfilePhoto" name="profile_picture" accept="image/*" hidden="" >
                          </div>
                          <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="id" hidden value="<?= $user['id']; ?>">
                            <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>" required>
                            <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="gender">Gender</label>
                              <div class="selectgroup selectgroup-pills">
                                <label class="selectgroup-item">
                                  <input type="radio" name="gender" value="M" class="selectgroup-input" <?php if($user['gender']=='M') echo 'checked'?> >
                                  <span class="selectgroup-button" >Male</span>
                                </label>
                                <label class="selectgroup-item">
                                  <input type="radio" name="gender" value="F" class="selectgroup-input" <?php if($user['gender']=='F') echo 'checked'?> >
                                  <span class="selectgroup-button">Female</span>
                                </label>
                                <label class="selectgroup-item">
                                  <input type="radio" name="gender" value="O" class="selectgroup-input" <?php if($user['gender']=='O') echo 'checked'?> >
                                  <span class="selectgroup-button">Other</span>
                                </label>
                              </div>  
                            </div>
                            <div class="form-group col-md-6">
                              <label for="date">Date of Birth</label>
                              <input type="date" class="form-control" name="dob" value="<?= $user['dob']; ?>">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-6">
                              <label for="country">Country</label>
                              <select name="country" class="form-control">
                                <?php foreach ($dataCountry as $data) { ?>
                                <option value='<?= $data->iso ?>' <?php if ($user['country']==$data->iso) {
                                  echo "selected";
                                } ?> ><?= $data->nicename ?></option>
                                <?php } ?>
                              </select>
                              <div class="invalid-feedback">
                              </div>
                            </div>
                            <div class="form-group col-6">
                              <label for="city">City</label>
                              <input type="text" name="city" class="form-control" value="<?= $user['city'] ?>">
                              <div class="invalid-feedback">
                              </div>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="position">Position</label>
                              <input type="text" class="form-control" id="position" name="position" value="<?= $user['position']; ?>">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="company">Company</label>
                              <input type="text" class="form-control" id="company" name="company" value="<?= $user['company']; ?>">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-12">
                              <label for="company">About Me</label>
                              <textarea class="form-control" id="about" name="about" ><?= $user['about']; ?></textarea>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-12">
                              <label for="company">Social</label>
                              <div class="input-group ">
                                <div class="input-group-prepend col-sm-12 col-md-4">
                                  <div class="input-group-text"><i class="fab fa-twitter"></i></div>
                                  <input type="text" class="form-control" id="twitter" name="twitter" value="<?= $user['twitter']; ?>">
                                </div>
                                <div class="input-group-prepend col-sm-12 col-md-4">
                                  <div class="input-group-text"><i class="fab fa-instagram"></i></div>
                                  <input type="text" class="form-control" id="instagram" name="instagram" value="<?= $user['instagram']; ?>">
                                </div>
                                <div class="input-group-prepend col-sm-12 col-md-4">
                                  <div class="input-group-text"><i class="fab fa-linkedin"></i></div>
                                  <input type="text" class="form-control" id="linkedin" name="linkedin" value="<?= $user['linkedin']; ?>">
                                </div>
                              </div>
                            </div>
                          </div>  
                        </div>
                        <div class="card-footer">
                          <button class="btn btn-primary">Save</button>
                        </div>
                      </form>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="change_password4" role="tabpanel" aria-labelledby="change_password-tab4">
                      <?php echo form_open_multipart('user/password_update');?>
                      <div class="card-body">
                        <form id="change-password" method="POST" action="<?php echo base_url(); ?>user/password_update">
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
                    </form>
                    </div>
                    <div class="tab-pane fade" id="credit4" role="tabpanel" aria-labelledby="credit-tab4">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
<?php $this->load->view('_layout/footer'); ?>