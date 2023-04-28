<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Write New Jobs</h1>
    </div>

    <div class="section-body">

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <?php echo form_open_multipart('account/writeJobvacancy'); ?>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Position</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="position">
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Company</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="company">
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Location</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="location">
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Type</label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control selectric" name="type_id">
                    <?php foreach ($dataJobtype as $type) { ?>
                      <option value="<?= $type->id_jobtype ?>"><?= ucfirst($type->jobtype_name) ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                <div class="col-sm-12 col-md-7">
                  <textarea class="summernote" name="description"></textarea>
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                <div class="col-sm-12 col-md-7">
                  <button class="btn btn-primary">Submit</button>
                </div>
              </div>
              </form>
            </div>
            <div class="card-footer bg-whitesmoke">
              <b>Note:</b> Your article will be <code>pending</code> until the administrator publish your article. <a href="#">See more.</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php $this->load->view('dist/_partials/footer'); ?>