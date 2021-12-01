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
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="email">Email</label>  
                      <input id="email" type="email" class="form-control" name="email" value="<?= set_value('email'); ?>">
                       <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                      <div class="invalid-feedback">
                      </div>
                    </div>
                    <div class="form-group col-6">
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
                    <div class="form-group col-4">
                      <label for="country">Geopark Country</label>
                      <select name="country" id="mark" class="form-control select2">
                        <option value="">Select Country</option>
                        <?php foreach ($dataCountry as $data) { 
                          echo "<option value='$data->iso'>$data->nicename</option>";
                         } ?>
                      </select>
                      <?= form_error('country', '<small class="text-danger">', '</small>'); ?>
                      <div class="invalid-feedback">
                      </div>
                    </div>
                    <div class="form-group col-4">
                      <label for="geotype">Geopark Type</label>
                      <select name="geotype" id="series" class="form-control">
                        <option></option>
                        <?php foreach ($dataType as $data) {
                         echo "<option value='$data->iso$data->country_id' data-chained='$data->country_id'>$data->name</option>";
                        } ?>
                      </select>
                    </div>
                    <div class="form-group col-4">
                      <label for="geoname">Geopark Name</label>
                      <select name="geoname" id="engine" class="form-control select2">
                        <option value=""></option>
                        <?php foreach ($dataName as $data) {
                         echo "<option value='$data->iso' data-chained='$data->geotype_id$data->country_id'>$data->name</option>";
                        } ?>
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

<script type="text/javascript">
// SCROLL AT THE END TO SEE HOW TO USE IT 




// CODE JQUERY SELECT
(function($, window, document, undefined) {
    "use strict";

    $.fn.chained = function(parentSelector) {
        return this.each(function() {

            /* Save this to child because this changes when scope changes. */
            var child   = this;
            var backup = $(child).clone();

            /* Handles maximum two parents now. */
            $(parentSelector).each(function() {
                $(this).bind("change", function() {
                    updateChildren();
                });

                /* Force IE to see something selected on first page load, */
                /* unless something is already selected */
                if (!$("option:selected", this).length) {
                    $("option", this).first().attr("selected", "selected");
                }

                /* Force updating the children. */
                updateChildren();
            });

            function updateChildren() {
                var triggerChange = true;
                var currentlySelectedValue = $("option:selected", child).val();

                $(child).html(backup.html());

                /* If multiple parents build value like foo+bar. */
                var selected = "";
                $(parentSelector).each(function() {
                    var selectedValue = $("option:selected", this).val();
                    if (selectedValue) {
                        if (selected.length > 0) {
                            selected += "+";
                        }
                        selected += selectedValue;
                    }
                });

                /* Also check for first parent without subclassing. */
                /* TODO: This should be dynamic and check for each parent */
                /*       without subclassing. */
                var first;
                if ($.isArray(parentSelector)) {
                    first = $(parentSelector[0]).first();
                } else {
                    first = $(parentSelector).first();
                }
                var selectedFirst = $("option:selected", first).val();

                $("option", child).each(function() {
                    /* Always leave the default value in place. */
                    if ($(this).val() === "") {
                        return;
                    }
                    var matches = [];
                    var data = $(this).data("chained");
                    if (data) {
                        matches = data.split(" ");
                    }
                    if ((matches.indexOf(selected) > -1) || (matches.indexOf(selectedFirst) > -1)) {
                        if ($(this).val() === currentlySelectedValue) {
                            $(this).prop("selected", true);
                            triggerChange = false;
                        }
                    } else {
                        $(this).remove();
                    }
                });

                /* If we have only the default value disable select. */
                if (1 === $("option", child).length && $(child).val() === "") {
                    $(child).prop("disabled", true);
                } else {
                    $(child).prop("disabled", false);
                }
                if (triggerChange) {
                    $(child).trigger("change");
                }
            }
        });
    };

    /* Alias for those who like to use more English like syntax. */
    $.fn.chainedTo = $.fn.chained;

    /* Default settings for plugin. */
    $.fn.chained.defaults = {};

})(window.jQuery || window.Zepto, window, document);


// MY CODE
$("#series").chained("#mark");
$("#model").chained("#series");
$("#engine").chained("#series, #model");
</script>