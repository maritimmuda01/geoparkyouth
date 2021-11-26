<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_layout/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-lg-8">
                <div class="card">
                  <div class="card-header">
                    <h4>Add New Page</h4>
                  </div>
                  <?php echo form_open_multipart('admin/add_pages_process');?>
                  <div class="card-body">
                    <div class="form-group row lg-12">
                      <label class="col-form-label col-lg-12">Title</label>
                      <div class="col-lg-12">
                        <input type="text" class="form-control" name="title" required>
                      </div>
                    </div>
                    <div class="form-group row lg-4">
                      <label class="col-form-label col-lg-12">Content</label>
                      <div class="col-lg-12">
                        <textarea class="summernote" name="content"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card">
                  <div class="card-body">
                    <div class="form-group row col-lg-12">
                      <label class="col-form-label col-lg-12">Page Image 1</label>
                      <div class="col-lg-12">
                        <div class="form-group profile-pic-wrapper pic-holder image-preview">
                          <img id="profilePic" class="pic">
                          <label for="image-upload" id="image-label">Choose File</label>
                          <input type="file" class="uploadimage" id="newProfilePhoto" name="uploadArticles" accept="image/*" >
                        </div>
                      </div>
                    </div>
                    <div class="form-group row col-lg-12">
                      <label class="col-form-label col-lg-12">Parent</label>
                      <div class="col-lg-12">
                        <select class="form-control" name="parent_id" data-show-subtext="true" data-live-search="true">  
                        <?php
                        foreach ($dataParent as $data){ ?>
                          <option value="<?php echo $data->id ?>"><?php echo $data->name ?></option>
                        <?php } ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer bg-whitesmoke">
                    <b>Note:</b> Your article will be <code>pending</code> until the administrator publish your article. <br>
                    <a href="#">See more.</a>
                  </div>    
                  <div class="card-footer text-right bg-whitesmoke">
                    <button class="btn btn-primary"><i class="far fa-edit"></i> Create Page</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
<?php $this->load->view('_layout/footer'); ?>


                  