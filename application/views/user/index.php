<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_layout/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
            <div class="row">
  	        	<div class="col-md-12 col-xl-8">
                <?php
                  foreach ($dataArticles as $data){ ?>            
                  <div class="col-12 col-md-12">
                    <article class="article article-style-c">
                      <?php if ($data->articles_image != 'default.jpg') { ?>
                      <div class="article-header">
                        <a href="ajshjd.com"><div class="article-image" data-background="<?php echo base_url(); ?>assets/img/articles/<?= $data->articles_image; ?>">
                        </div></a>
                      </div>
                      <?php } ?>
                      <div class="article-details">
                        <div class="article-category"><a href="#">News</a> <div class="bullet"></div> <a href="#"><?php echo date("j F Y",strtotime($data->date)) ; ?></a></div>
                        <div class="article-title">
                          <h2><a href="#"><?= $data->title ?></a></h2>
                        </div>
                        <?= $data->content ?>
                        <div class="article-user">
                          <img alt="image" src="<?= base_url('assets/img/profile/') . $data->image; ?>">
                          <div class="article-user-details">
                            <div class="text-job">
                              Author
                            </div>
                            <div class="user-detail-name">
                              <a href="#"><?php echo $data->author?></a>
                            </div>
                            <!-- <div class="text-job"><?php echo $data->position." at ".$data->company?></div> -->
                          </div>
                        </div>
                      </div>
                    </article>
                  </div>
                <?php  }
                ?>  
  	        	</div>
              <div class="col-xl-4">
                <div class="card profile-widget d-none d-lg-block d-xl-block position-fixed">
                  <div class="profile-widget-header">                     
                    <img alt="image" src="<?= base_url('assets/img/profile/') . $user['profile_picture']; ?>" class="rounded-circle profile-widget-picture">
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
                  </div>
                </div>
              </div>
            </div>
        </section>
      </div>
<?php $this->load->view('_layout/footer'); ?>