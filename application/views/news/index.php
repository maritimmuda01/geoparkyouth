<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_layout/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>News</h1>
            <div class="section-header-breadcrumb">
              <div class=""><a href="<?php echo base_url(); ?>news/write_news" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> New</a></div>
            </div>
          </div>
          <div class="section-body">
            <div class="row"> <!-- Start -->
            <?php
              foreach ($dataNews as $data){ ?>            
              <div class="col-12 col-md-4 col-lg-4">
                <article class="article article-style-c">
                  <div class="article-header">
                    <a href="ajshjd.com"><div class="article-image" data-background="<?php echo base_url(); ?>assets/img/news/<?= $data->news_image; ?>">
                    </div></a>
                  </div>
                  <div class="article-details">
                    <div class="article-category"><a href="#">News</a> <div class="bullet"></div> <a href="#"><?php echo date("j F Y",strtotime($data->date)) ; ?></a></div>
                    <div class="article-title">
                      <h2><a href="#"><?php echo $data->title ?></a></h2>
                    </div>
                    <div class="article-user">
                      <img alt="image" src="<?= base_url('assets/img/profile/') . $data->image; ?>">
                      <div class="article-user-details">
                        <div class="user-detail-name">
                          <a href="#"><?php echo $data->author?></a>
                        </div>
                        <?php if ($user['position'] || $user['company']) {
                        echo "<div class='text-job'>";
                        if ($user['position'] && $user['company']){
                          echo $user['position']." at ";
                          }
                          echo $user['company'];
                          echo "</div>";
                        }
                       ?>
                        <!-- <div class="text-job"><?php echo $data->position." at ".$data->company?></div> -->
                      </div>
                    </div>
                  </div>
                </article>
              </div>
            <?php  }
            ?>             
            </div>  
          </div>
        </section>
      </div>
<?php $this->load->view('_layout/footer'); ?>