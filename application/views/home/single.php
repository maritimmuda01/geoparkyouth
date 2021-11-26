<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('home/_layout/header');
?>

<section class="section">
  <div class="container">
    <div class="row" style="margin-top: 50px">
      <div class="col-lg-8">
        <h3 class="font-tertiary mb-3"><?= $dataArticles['title']?></h3>
        <p class="font-secondary"><?= date("l, d F Y",strtotime($dataArticles['date']))." at ".date("H:i",strtotime($dataArticles['date']))  ?> by <span class="text-primary"><?= $dataArticles['author']?></span
            class="text-primary"> on <span class="text-primary"><?= $dataArticles['category_attr']?></span></p>
          <img src="<?= base_url()?>assets/dashboard/img/articles/<?= $dataArticles['image']?>" alt="post-thumb" class="img-fluid rounded mb-5">
        <div class="content">
          <?= $dataArticles['content']?>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="col-lg-12 mb-30">
          <article class="card shadow">
            <img class="rounded card-img-top" src="https://asset.kompas.com/crops/QiGHikq1dkSW55J2DTNWGYdUoiQ=/0x0:800x533/750x500/data/photo/2019/10/11/5da0066539a8b.jpg" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="blog-single.html">Example Article #2</a>
              </h4>
              <!-- <p class="cars-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et
                dolore magna aliqua.</p> -->
              <a href="blog-single.html" class="btn btn-xs btn-primary">Read More</a>
            </div>
          </article>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- blog -->
<section class="section">
  <div class="container">
    <div class="row">
      
    </div>
  </div>
</section>
<!-- /blog -->

<?php
$this->load->view('home/_layout/footer');
?>