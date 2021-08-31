<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_layout/header');
?>  
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
          </div>

          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Users</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $total_account ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Articles</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $total_articles ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="fas fa-briefcase"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jobs</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $total_jobs ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-circle"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>E-Library</h4>
                  </div>
                  <div class="card-body">
                    ?
                  </div>
                </div>
              </div>
            </div>                  
          </div>          
        </section>
      </div>
<?php $this->load->view('_layout/footer'); ?>