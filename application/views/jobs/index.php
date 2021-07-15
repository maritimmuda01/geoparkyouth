<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_layout/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Job Portal</h1>
            <div class="section-header-breadcrumb">
<!--               <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
              <div class="breadcrumb-item">Card</div> -->
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <?php
                foreach ($dataJobs as $data) { ?>
                  <div class="col-12 col-md-6 col-lg-12">
                    <div class="card card-primary">
                      <div class="card-header">
                        <h4>
                          <?= $data->position ?>
                        </h4>
                      </div>
                      <div class="card-body">
                        <h6>
                          <?= $data->company?>
                        </h6>
                      </div>
                        <div class="col-12 card-footer bg-whitesmoke">
                          <div>
                            <?= $data->created_date?>
                          </div>
                          <div class="text-right">
                            <button class="btn btn-primary">Details</button>
                          </div>
                      </div>
                    </div>
                  </div>                
                <?php }
              ?>
            </div>
          </div>
        </section>
      </div>
<?php $this->load->view('_layout/footer'); ?>