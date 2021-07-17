<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_layout/header');
?>
      <!-- Main Content -->
      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
      <div class="main-content">
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
                            <a class="nav-link active" id="profile-tab4" data-toggle="tab" href="#profile4" role="tab" aria-controls="profile" aria-selected="true">Profile Settings</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>user/changepassword" role="tab" aria-controls="account" aria-selected="false">Change Password</a>
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
                      <?php echo form_open_multipart('user/profile_update');?>
                        <div class="card">
                          <div class="card-header">
                            <h4>Profile</h4>
                          </div>
                          <div class="card-body">
                            <div class="form-group profile-pic-wrapper pic-holder">
                              <img id="profilePic" class="pic" src="<?= base_url('assets/img/profile/') . $user['profile_picture']; ?>">
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
                                <label for="city">Gender</label>
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
                                <input type="text" class="form-control datepicker" name="dob" value="<?= $user['dob']; ?>">
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="city">City</label>
                                <input type="text" class="form-control" id="city" name=city value="<?= $user['city']; ?>">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="city">Country</label>
                                <select class="form-control select2" name="country" data-show-subtext="true" data-live-search="true">  
                                  <?php
                                    foreach ($dataCountry as $data){ ?>
                                        <option
                                        <?php if ($data->name == $user['country']){
                                          echo "selected";
                                        } ?> value="<?php echo $data->name ?>"><?php echo $data->name ?></option>
                                    <?php }
                                  ?>
                                </select>
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
                              <div class="form-group col-md-12 ">
                                <label for="company">Social</label>
                                <div class="input-group ">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fab fa-twitter"></i></div>
                                  </div>
                                  <input type="text" class="form-control" id="twitter" name="twitter" value="<?= $user['twitter']; ?>">
                                  <div class="input-group-prepend ml-2">
                                    <div class="input-group-text"><i class="fab fa-instagram"></i></div>
                                  </div>
                                  <input type="text" class="form-control" id="instagram" name="instagram" value="<?= $user['instagram']; ?>">
                                  <div class="input-group-prepend ml-2">
                                    <div class="input-group-text"><i class="fab fa-linkedin"></i></div>
                                  </div>
                                  <input type="text" class="form-control" id="linkedin" name="linkedin" value="<?= $user['linkedin']; ?>">
                                </div>
                              </div>
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