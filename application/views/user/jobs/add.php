<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_layout/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="section-header">
            </div>
            <div class="row">
              <div class="col-lg-8">
                <div class="card">
                  <div class="card-header">
                    <h4>Post New</h4>
                  </div>
                  <?php echo form_open_multipart('user/add_jobs');?>
                  <div class="card-body">
                    <div class="form-group row lg-12">
                      <label class="col-form-label col-lg-12">Position</label>
                      <div class="col-lg-12">
                        <input type="text" class="form-control" name="position" required>
                      </div>
                    </div>
                    <div class="form-group row lg-12">
                      <label class="col-form-label col-lg-12">Company</label>
                      <div class="col-lg-12">
                        <input type="text" class="form-control" name="company" required>
                      </div>
                    </div>
                    <div class="form-group row lg-4">
                      <label class="col-form-label col-lg-12">Description</label>
                      <div class="col-lg-12">
                        <textarea class="summernote" name="description"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card">
                  <div class="card-body">
                    <div class="form-group row col-lg-12">
                      <label class="col-form-label col-lg-12">Job Category</label>
                      <div class="col-lg-12">
                        <select class="form-control" id="category_id" name="type" data-show-subtext="true" data-live-search="true">  
                        <option value="Full-Time">Full-Time</option>
                        <option value="Part-Time">Part-Time</option>
                        <option value="Freelance">Freelance</option>
                        <option value="Internship">Internship</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row col-lg-12">
                      <label class="col-form-label col-lg-12">Job Location</label>
                      <div class="col-lg-12">
                        <input type="text" class="form-control" name="location">
                      </div>
                    </div>
                  </div>  
                  <div class="card-footer text-right bg-whitesmoke">
                    <button class="btn btn-primary"><i class="far fa-edit"></i> Post</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
<?php $this->load->view('_layout/footer'); ?>


                  