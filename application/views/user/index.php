<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_layout/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">

          <div class="section-body">
            <h2 class="section-title">Articles</h2>
            <div class="row">
              <?php foreach ($dataArticles as $data) { ?>
              <div class="col-12 col-md-4 col-lg-4">
                <article class="article article-style-c">
                  <div class="article-header">
                    <div class="article-image" data-background="<?php echo base_url(); ?>assets/img/news/<?= $data->articles_image ?>">
                    </div>
                  </div>
                  <div class="article-details">
                    <div class="article-category"><a href="#">News</a> <div class="bullet"></div> <a href="#">5 Days</a></div>
                    <div class="article-title">
                      <h2><a href="#"><?= $data->title ?></a></h2>
                    </div>
                    <div class="article-user">
                      <img alt="image" src="<?php echo base_url(); ?>assets/img/profile/<?= $data->image ?>">
                      <div class="article-user-details">
                        <div class="user-detail-name">
                          <a href="#"><?= $data->author ?></a>
                        </div>
                        <div class="text-job">Web Developer</div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <?php } ?>
            </div>
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