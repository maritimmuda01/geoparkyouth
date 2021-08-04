<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_layout/header');
?>
<!-- Main Content -->
<div class="main-content">
  <!-- <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>   -->
  <section class="section">
    <div class="section-body">
      <div class="row mt-lg-12">
        <div class="col-12 col-md-12 col-lg-8 ">
          <div class="card profile-widget">
            <div class="profile-widget-header">                     
              <img alt="image" src="<?= base_url('assets/img/profile/') . $user['profile_picture']; ?>" class="rounded-circle profile-widget-picture">
              <div class="profile-widget-items">
                <div class="profile-widget-item">
                  <div class="profile-widget-item-label">Articles</div>
                  <div class="profile-widget-item-value"><?php echo $total_articles ?></div>
                </div>
                <div class="profile-widget-item">
                  <div class="profile-widget-item-label">Opinion</div>
                  <div class="profile-widget-item-value">6,8K</div>
                </div>
                <div class="profile-widget-item">
                  <div class="profile-widget-item-label">E-Library</div>
                  <div class="profile-widget-item-value">2,1K</div>
                </div>
              </div>
            </div>
            <div class="profile-widget-description">
              <div class="profile-widget-name">
                <h4><?= $user['name']; ?></h4>
                <?php if ($user['position'] || $user['company']) {
                  echo "<div class='text-muted d-inline font-weight-light'>";
                  if ($user['position'] && $user['company']){
                    echo $user['position']." at ";
                  }
                  echo $user['company'];
                  echo "</div>";
                }
                ?>
                <div class="d-inline font-weight-light">
                  <h6><?php if($user['city']){ echo $user['city'].', ';} echo $user['country'] ?> </h6> 
                </div>
              </div>
              <?= $user['about']?>
            </div>
            <?php
            if ($user['twitter'] != "" || $user['instagram'] != "" || $user['linkedin'] != "") { ?>
              <div class="card-footer">
                <?php
                if ($user['twitter'] != "") { ?>
                  <a href="https://twitter.com/<?= $user['twitter']; ?>" class="btn btn-social-icon btn-twitter mr-1">
                    <i class="fab fa-twitter"></i>
                  </a>
                <?php }
                if ($user['instagram'] != "") { ?>
                  <a href="https://instagram.com/<?= $user['instagram']; ?>" class="btn btn-social-icon btn-instagram">
                    <i class="fab fa-instagram"></i>
                  </a>
                <?php }
                if ($user['linkedin'] != "") { ?>
                  <a href="https://linkedin.com/in/<?= $user['linkedin']; ?>" class="btn btn-social-icon btn-linkedin">
                    <i class="fab fa-linkedin"></i>
                  </a>
                <?php }
                ?>
              </div>  
            <?php } ?>
          </div>
        </div>
<!--               <div class="col-12 col-md-12 col-lg-3">
                <div class="card profile-widget">
                  <div class="card-body">
                    <ul class="list-group">
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                        News
                        <span class="badge badge-primary badge-pill"><?php echo $total_news ?></span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                        Articles
                        <span class="badge badge-primary badge-pill">2</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                        Opinion
                        <span class="badge badge-primary badge-pill">1</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                        E-Library
                        <span class="badge badge-primary badge-pill">1</span>
                      </li>
                    </ul>
                  </div>
                </div>  
              </div> -->
            </div>
          </div>
        </section>
      </div>
      <?php $this->load->view('_layout/footer'); ?>