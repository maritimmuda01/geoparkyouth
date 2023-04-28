<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <a href="<?=base_url()?>"><img src="<?= base_url() ?>images/site_settings/<?= $this->site_settings['logo'] ?>" alt="logo" width="300"></a>
            </div>
            <?= $this->session->flashdata('message'); ?>

            <div class="card card-primary">
              <div class="card-header">
                <h5 class="mt-4"><a href="<?= base_url() ?>auth" class="mr-3"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>Register</h5>
              </div>
              <div class="card-body">
                <form method="POST" class="needs-validation" novalidate="">
                  <div class="row">
                    <div class="form-group col-12">
                      <label for="name">Name</label>
                      <input id="name" type="text" class="form-control form-control-user" name="name" tabindex="1" required autofocus value="<?= set_value('name') ?>">
                      <div class=" invalid-feedback">
                        Please fill in your name
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="2" value="<?= set_value('email') ?>">
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-sm-12 col-lg-6">
                      <label class="form-label">Gender</label>
                      <div class="selectgroup w-100 ">
                        <label class="selectgroup-item">
                          <input type="radio" name="gender" value="M" class="selectgroup-input">
                          <span class="selectgroup-button"><i class="fas fa-mars"></i> Male</span>
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
                    <div class="form-group col-sm-12 col-lg-6">
                      <label>Date of Birth</label>
                      <input type="date" name="date" class="form-control">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-sm-12 col-lg-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password1" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password1">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-sm-12 col-lg-6">
                      <label for="password2" class="d-block">Password Confirmation</label>
                      <input id="password2" type="password" class="form-control" name="password2">
                    </div>
                  </div>

                  <div class="section-title mt-0 mb-4">Geopark Information</div>
                  <div class="row">
                    <div class="form-group col-sm-12 col-lg-4">
                      <label for="country">Geopark Country</label>
                      <select name="country" class="form-control" id="country">
                        <option value="">Select country...</option>
                        <?php foreach ($dataCountry as $data) {
                          echo "<option value='$data->id_country'>$data->nicename</option>";
                        } ?>
                      </select>
                      <?= form_error('country', '<small class="text-danger">', '</small>'); ?>
                      <div class="invalid-feedback">
                      </div>
                    </div>
                    <div class="form-group col-12 col-sm-12 col-lg-4">
                      <label for="geotype">Geopark Type</label>
                      <select name="geotype" class="form-control" id="geotype" disabled>
                        <option value="">Select Geopark type...</option>
                        <?php foreach ($dataType as $data) {
                          echo "<option value='$data->id_geotype'>$data->geotype_name</option>";
                        } ?>
                      </select>
                    </div>
                    <div class="form-group col-12 col-sm-12 col-lg-4">
                      <label for="geoname">Geopark Name</label>
                      <select name="geoname" class="form-control" id="geoname" disabled>
                        <option value="">Select Geopark name...</option>
                      </select>
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
              Already have account? <a href="<?php echo base_url(); ?>auth">Log in</a>
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

  <script type="text/javascript">
    $(document).ready(function() {
      $("#country").change(function() {
        $("#geotype").removeAttr('disabled');
        var country_value = $("#country").val();
        if (country_value == '') {
          $("#geotype").attr('disabled', true);
          $("#geoname").attr('disabled', true);
          $("#geotype").val('').attr('selected', true);
          $("#geoname").val('').attr('selected', true);
        } else {
          $("#geotype").change(function() {
            $("#geoname").removeAttr('disabled');
            var type_value = $("#geotype").val();
            if (type_value == '') {
              $("#geoname").attr('disabled', true);
              $("#geoname").val('').attr('selected', true);
            }
            $.ajax({
              url: '<?php echo base_url() ?>auth/showAllGeoparksByCountryAndType/' + country_value + '/' + type_value,
              async: false,
              dataType: 'json',
              success: function(data) {
                var html = '';
                var i;
                for (i = 0; i < data.length; i++) {
                  html += '<option value="' + data[i].id_geoname + '">' + data[i].geoname + '</option>';
                }
                $("#geoname").empty();
                $("#geoname").append('<option value="">Select Geopark name...</option>');
                $('#geoname').append(html);
              },
              error: function() {
                alert: ('error');
              }
            })
          });
        }
      });

    });
  </script>