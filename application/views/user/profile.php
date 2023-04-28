<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
<!-- Main Content -->
<div class="main-content">
  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
  <section class="section">
    <div class="section-header">
    </div>
    <div class="section-body">
      <div class="row mt-sm-4">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card profile-widget">
            <div class="profile-widget-header">
              <img alt="image" src="<?php echo base_url(); ?>images/profile/<?= $profile->profile_picture ?>" class="rounded-circle profile-widget-picture" style="height: 100px;">
              <div class="profile-widget-items">
              </div>
            </div>
            <div class="profile-widget-description">
                <h4><?= $profile->name ?></h4>
              <div class="profile-widget-name"><?= $profile->geoname ?>, <?= $profile->nicename ?><br>
                <?php if ($profile->position && $profile->company) { ?>
                  <div class="text-muted d-inline font-weight-normal"> <?= $profile->position ?> at <?= $profile->company ?></div>
                <?php } ?>
              </div>
              <?= $profile->about ?>
            </div>
            <div class="card-footer">
              <a href="https://instagram.com/<?= $profile->instagram ?>" class="btn btn-social-icon btn-instagram">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="https://twitter.com/<?= $profile->twitter ?>" class="btn btn-social-icon btn-twitter">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://linkedin.com/in/<?= $profile->linkedin ?>" class="btn btn-social-icon btn-linkedin">
                <i class="fab fa-linkedin"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-lg-12">
          <div class="card">
            <div class="card-body">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="change-password" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Change Password</a>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="profile-tab">
                  <div class="card">
                    <div class="card-header">
                      <h4>Edit Profile</h4>
                    </div>
                    <?php echo form_open_multipart('account'); ?>
                    <div class="card-body">
                      <div class="row">
                        <div class="form-group col-md-12 col-12">
                          <label>Profile Picture</label>
                          <div class="file-input">
                            <input class="choose" type="file" name="profile_picture" accept="image/*">
                          </div>
                        </div>
                        <div class="form-group col-md-12 col-12">
                          <img id="preview" src="" style="height: 200px;">
                        </div>
                        <div class="form-group col-md-12 col-12">
                          <label>First Name</label>
                          <input type="hidden" value="<?= $profile->id_user ?>" name="Id">
                          <input type="text" class="form-control" value="<?= $profile->name ?>" required="" name="name">
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-6 col-12">
                          <label>Email</label>
                          <input type="text" class="form-control-plaintext" value="<?= $profile->email ?>" readonly>
                        </div>
                        <div class="form-group col-md-6 col-12">
                          <label>Date of Birth</label>
                          <input type="text" class="form-control datepicker" value="<?= $profile->dob ?>" name="dob">
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-6 col-12">
                          <label>Geopark Name</label>
                          <input type="text" class="form-control-plaintext" value="<?= $profile->geoname ?>" readonly>
                        </div>
                        <div class="form-group col-md-6 col-12">
                          <label>Country</label>
                          <input type="text" class="form-control-plaintext" value="<?= $profile->nicename ?>" readonly>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-6 col-12">
                          <label>Position</label>
                          <input type="text" class="form-control" value="<?= $profile->position ?>" name="position">
                        </div>
                        <div class="form-group col-md-6 col-12">
                          <label>Company</label>
                          <input type="text" class="form-control" value="<?= $profile->company ?>" name="company">
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-12">
                          <label>About</label>
                          <textarea class="form-control summernote-simple" name="about"><?= $profile->about ?></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-4">
                          <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text"><i class="fab fa-instagram"></i></div>
                            </div>
                            <input type="text" name="instagram" value="<?= $profile->instagram ?>" class="form-control" id="inlineFormInputGroup">
                          </div>
                        </div>
                        <div class="form-group col-4">
                          <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text"><i class="fab fa-twitter"></i></div>
                            </div>
                            <input type="text" name="twitter" value="<?= $profile->twitter ?>" class="form-control" id="inlineFormInputGroup">
                          </div>
                        </div>
                        <div class="form-group col-4">
                          <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text"><i class="fab fa-linkedin"></i></div>
                            </div>
                            <input type="text" name="linkedin" value="<?= $profile->linkedin ?>" class="form-control" id="inlineFormInputGroup">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary">Save Changes</button>
                    </div>
                    </form>
                  </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="change-password">
                  <form id="change-password" method="POST" action="<?php echo base_url(); ?>account/passwordUpdate">
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
                        <button class="btn btn-primary">Save Changes</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php $this->load->view('dist/_partials/footer'); ?>

<script type="text/javascript">
  const readURL = (input) => {
    if (input.files && input.files[0]) {
      const reader = new FileReader()
      reader.onload = (e) => {
        $('#preview').attr('src', e.target.result)
      }
      reader.readAsDataURL(input.files[0])
    }
  }
  $('.choose').on('change', function() {
    readURL(this)
    let i
    if ($(this).val().lastIndexOf('\\')) {
      i = $(this).val().lastIndexOf('\\') + 1
    } else {
      i = $(this).val().lastIndexOf('/') + 1
    }
    const fileName = $(this).val().slice(i)
    $('.label').text(fileName)
  })
</script>