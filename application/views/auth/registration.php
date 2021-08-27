<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_layout/header');
?>
<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">

            <div class="card card-primary">
              <div class="card-header"><h4>Create New Account!</h4></div>

              <div class="card-body">
                <form method="POST" action="<?= base_url('auth/registration'); ?>">
                  <div class="row">
                    <div class="form-group col-12">
                      <label for="frist_name">Full Name</label>
                      <input id="frist_name" type="text" class="form-control" name="name" autofocus value="<?= set_value('name'); ?>">
                      <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>  
                    <input id="email" type="email" class="form-control" name="email" value="<?= set_value('email'); ?>">
                     <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password1" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password1">
                      <?= form_error('password1', '<small class="text-danger">', '</small>'); ?>
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>  
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Confirm Password</label>
                      <input id="password2" type="password" class="form-control" name="password2">
                    </div>
                  </div>
                  <div class=row>
                    <div class="form-group col-md-6">
                      <label for="gender">Gender</label>
                      <div class="selectgroup selectgroup-pills">
                        <label class="selectgroup-item">
                          <input type="radio" name="gender" value="M" class="selectgroup-input" >
                          <span class="selectgroup-button" ><i class="fas fa-mars"></i> Male</span>
                        </label>
                        <label class="selectgroup-item">
                          <input type="radio" name="gender" value="F" class="selectgroup-input">
                          <span class="selectgroup-button"><i class="fas fa-venus"></i> Female</span>
                        </label>
                        <label class="selectgroup-item">
                          <input type="radio" name="gender" value="O" class="selectgroup-input">
                          <span class="selectgroup-button"><i class="fas fa-genderless"></i> Other</span>
                        </label>
                      </div>  
                    </div>
                    <div class="form-group col-6">
                      <label for="country">Country</label>
                      <select name="country" class="form-control">
                        <option value="">Select Country</option>
                        <?php foreach ($dataCountry as $data) { 
                          echo "<option value='$data->iso'>$data->nicename</option>";
                         } ?>
                      </select>
                      <?= form_error('country', '<small class="text-danger">', '</small>'); ?>
                      <div class="invalid-feedback">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Already have an account? <a href="<?php echo base_url(); ?>auth">Log In</a>
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