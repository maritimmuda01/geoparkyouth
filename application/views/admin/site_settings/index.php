<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_layout/header');
?>
<!-- Main Content -->
<div class="main-content">
  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-lg-8">
          <div class="card">
            <div class="card-header">
              <h4>Site Settings</h4>
            </div>
            <?php echo form_open_multipart('admin/save_site_settings');?>
            <div class="card-body">
              <div class="form-group row lg-12">
                <label class="col-form-label col-lg-12">Website Title</label>
                <div class="col-lg-12">
                  <input type="text" class="form-control" name="title" required value="<?= $site_settings['title']; ?>">
                </div>
              </div>
              <div class="form-group row lg-12">
                <label class="col-form-label col-lg-12">Website Description</label>
                <div class="col-lg-12">
                  <input type="text" class="form-control" name="description" required value="<?= $site_settings['description']; ?>">
                </div>
              </div>
              <div class="form-group row lg-12">
                <label class="col-form-label col-lg-12">Website Logo</label>
                <div class="col-lg-12">
                  <div class="form-group profile-pic-wrapper pic-holder image-preview">
                    <img id="profilePic" class="pic" src="<?= base_url('assets/home/images/site_logo/') . $site_settings['logo']; ?>">
                    <label for="image-upload" id="image-label">Choose File</label>
                    <input type="file" class="uploadimage" id="newProfilePhoto" name="uploadArticles" accept="image/*" >
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="card-footer bg-whitesmoke">
              <b>Last changes:</b> Your article will be <code>on</code> until the administrator publish your article. <br>
            </div>  -->   
            <div class="card-footer text-right bg-whitesmoke">
              <button class="btn btn-primary">Save</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
<?php $this->load->view('_layout/footer'); ?>


