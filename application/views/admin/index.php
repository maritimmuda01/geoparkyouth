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
                <div class="card-icon bg-success">
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
                <div class="card-icon bg-warning">
                  <i class="fas fa-briefcase"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Gallery</h4>
                  </div>
                  <div class="card-body">
                    0
                  </div>
                </div>
              </div>
            </div>   
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-globe"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Geopark Countries</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $totalcountries ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-globe"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>UNESCO Geopark</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $totalUGG ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="fas fa-globe"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>National Geopark</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $totalNAG ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="fas fa-globe"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Aspiring Geopark</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $totalASG ?>
                  </div>
                </div>
              </div>
            </div>                      
          </div> 
          <!-- <div class="row"> 
            <div class="col-md-4">
              <div class="card">
                <div class="card-header">
                  <h4>Countries</h4>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">
                      <ul class="list-unstyled list-unstyled-border list-unstyled-noborder mb-0">
                        <?php foreach ($dataCountry as $data) { ?>
                        <li class="media">
                          <div class="media-body ml-3">
                            <div class="media-title"><?= $data->nicename ?></div>
                            <div class="text-small text-muted">3,282</i></div>
                          </div>
                        </li>
                        <?php } ?>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>  -->        
        </section>
      </div>
<?php $this->load->view('_layout/footer'); ?>