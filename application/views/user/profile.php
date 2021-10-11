<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_layout/header');
?>
<!-- Main Content -->
<div class="main-content">
  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
  <section class="section">
    <div class="section-header">
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-lg-8 col-sm-12">
          <div class="card profile-widget">
            <div class="profile-widget-header">                     
              <img alt="image" src="<?= base_url('assets/dashboard/img/profile/') . $profile['profile_picture']; ?>" class="rounded-circle profile-widget-picture">
              <div class="profile-widget-items">
              </div>
            </div>
            <div class="profile-widget-description">
              <div class="profile-widget-name">
                <h4>
                  <?= $profile['name']; ?>
                </h4> 
                <?php if ($profile['position'] || $profile['company']) {
                  echo "<div class='text-muted d-inline font-weight-light'>";
                  if ($profile['position'] && $profile['company']){
                    echo $profile['position']." at ";
                  }
                  echo $profile['company'];
                  echo "</div>";
                }
                ?>
                <div class="d-inline font-weight-light">
                  <h6><?php if($profile['geoname']){ echo $geoname['name'].', ';} if($profile['geotype']){ echo $geotype['name'].', ';} echo $country['nicename']; ?> </h6> 
                </div>
              </div>
              <?= $profile['about']?>
            </div>
            <div class="card-footer">
              <a href="mailto:<?= $profile['email']; ?>" class="btn btn-social-icon btn-primary" data-toggle="tooltip" title="<?= $profile['email']; ?>">
                <i class="fa fa-envelope"></i>
              </a>
              <?php
              if ($profile['twitter'] != "" || $profile['instagram'] != "" || $profile['linkedin'] != "") {
              if ($profile['twitter'] != "") { ?>
                <a href="https://twitter.com/<?= $profile['twitter']; ?>" class="btn btn-social-icon btn-twitter mr-1" data-toggle="tooltip" title="<?= $profile['twitter']; ?>" target="_blank">
                  <i class="fab fa-twitter"></i>
                </a>
              <?php }
              if ($profile['instagram'] != "") { ?>
                <a href="https://instagram.com/<?= $profile['instagram']; ?>" class="btn btn-social-icon btn-instagram" data-toggle="tooltip" title="<?= $profile['instagram']; ?>" target="_blank">
                  <i class="fab fa-instagram"></i>
                </a>
              <?php }
              if ($profile['linkedin'] != "") { ?>
                <a href="https://linkedin.com/<?= $profile['linkedin']; ?>" class="btn btn-social-icon btn-linkedin" data-toggle="tooltip" title="<?= $profile['linkedin']; ?>" target="_blank">
                  <i class="fab fa-linkedin"></i>
                </a>
              <?php } }
              ?>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-12">
          <div class="card">
            <div class="card-body">
              <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Articles
                  <span class="badge badge-primary badge-pill"><?= $total_articles_by_id ?></span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Jobs
                  <span class="badge badge-primary badge-pill"><?= $total_jobs_by_id ?></span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Gallery
                  <span class="badge badge-primary badge-pill">1</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php $this->load->view('_layout/footer'); ?>