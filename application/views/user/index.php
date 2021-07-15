<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_layout/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row"> <!-- Start -->
            <?php
              foreach ($dataNews as $data){ ?>              
              <div class="col-12 col-md-4 col-lg-4">
                <article class="article article-style-c">
                  <div class="article-header">
                    <a href="ajshjd.com"><div class="article-image" data-background="<?php echo base_url(); ?>assets/img/news/img13.jpg">
                    </div></a>
                  </div>
                  <div class="article-details">
                    <div class="article-category"><a href="#">News</a> <div class="bullet"></div> <a href="#"><?php echo date("j F Y",strtotime($data->created_date)) ; ?></a></div>
                    <div class="article-title">
                      <h2><a href="#"><?php echo $data->title ?></a></h2>
                    </div>
                    <p><?php $clickbait = strpos($data->content, ".");
                    echo substr($data->content, 0,$clickbait+1);   ?></p>
                    <div class="article-user">
                      <img alt="image" src="<?= base_url('assets/img/profile/') . $data->image; ?>">
                      <div class="article-user-details">
                        <div class="user-detail-name">
                          <a href="#"><?php echo $data->author?></a>
                        </div>
                        <div class="text-job"><?php echo $data->position." at ".$data->company?></div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
            <?php  }
            ?>             
            </div>
            <h2 class="section-title">Articles</h2>
            <p class="section-lead">This article component is based on card and flexbox.</p>

            <div class="row">
              <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <article class="article">
                  <div class="article-header">
                    <div class="article-image" data-background="<?php echo base_url(); ?>assets/img/news/img08.jpg">
                    </div>
                    <div class="article-title">
                      <h2><a href="#">Excepteur sint occaecat cupidatat non proident</a></h2>
                    </div>
                  </div>
                  <div class="article-details">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. </p>
                    <div class="article-cta">
                      <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <article class="article">
                  <div class="article-header">
                    <div class="article-image" data-background="<?php echo base_url(); ?>assets/img/news/img04.jpg">
                    </div>
                    <div class="article-title">
                      <h2><a href="#">Excepteur sint occaecat cupidatat non proident</a></h2>
                    </div>
                  </div>
                  <div class="article-details">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. </p>
                    <div class="article-cta">                           
                      <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <article class="article">
                  <div class="article-header">
                    <div class="article-image" data-background="<?php echo base_url(); ?>assets/img/news/img09.jpg">
                    </div>
                    <div class="article-title">
                      <h2><a href="#">Excepteur sint occaecat cupidatat non proident</a></h2>
                    </div>
                  </div>
                  <div class="article-details">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. </p>
                    <div class="article-cta">                           
                      <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <article class="article">
                  <div class="article-header">
                    <div class="article-image" data-background="<?php echo base_url(); ?>assets/img/news/img12.jpg">
                    </div>
                    <div class="article-title">
                      <h2><a href="#">Excepteur sint occaecat cupidatat non proident</a></h2>
                    </div>
                  </div>
                  <div class="article-details">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. </p>
                    <div class="article-cta">                           
                      <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                  </div>
                </article>
              </div>
            </div>

            <h2 class="section-title">Article Style B</h2>
            <div class="row">
              <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <article class="article article-style-b">
                  <div class="article-header">
                    <div class="article-image" data-background="<?php echo base_url(); ?>assets/img/news/img13.jpg">
                    </div>
                    <div class="article-badge">
                      <div class="article-badge-item bg-danger"><i class="fas fa-fire"></i> Trending</div>
                    </div>
                  </div>
                  <div class="article-details">
                    <div class="article-title">
                      <h2><a href="#">Excepteur sint occaecat cupidatat non proident</a></h2>
                    </div>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. </p>
                    <div class="article-cta">
                      <a href="#">Read More <i class="fas fa-chevron-right"></i></a>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <article class="article article-style-b">
                  <div class="article-header">
                    <div class="article-image" data-background="<?php echo base_url(); ?>assets/img/news/img15.jpg">
                    </div>
                  </div>
                  <div class="article-details">
                    <div class="article-title">
                      <h2><a href="#">Excepteur sint occaecat cupidatat non proident</a></h2>
                    </div>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. </p>
                    <div class="article-cta">
                      <a href="#">Read More <i class="fas fa-chevron-right"></i></a>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <article class="article article-style-b">
                  <div class="article-header">
                    <div class="article-image" data-background="<?php echo base_url(); ?>assets/img/news/img07.jpg">
                    </div>
                  </div>
                  <div class="article-details">
                    <div class="article-title">
                      <h2><a href="#">Excepteur sint occaecat cupidatat non proident</a></h2>
                    </div>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. </p>
                    <div class="article-cta">
                      <a href="#">Read More <i class="fas fa-chevron-right"></i></a>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <article class="article article-style-b">
                  <div class="article-header">
                    <div class="article-image" data-background="<?php echo base_url(); ?>assets/img/news/img02.jpg">
                    </div>
                  </div>
                  <div class="article-details">
                    <div class="article-title">
                      <h2><a href="#">Excepteur sint occaecat cupidatat non proident</a></h2>
                    </div>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. </p>
                    <div class="article-cta">
                      <a href="#">Read More <i class="fas fa-chevron-right"></i></a>
                    </div>
                  </div>
                </article>
              </div>
            </div>  
          </div>
        </section>
      </div>
<?php $this->load->view('_layout/footer'); ?>