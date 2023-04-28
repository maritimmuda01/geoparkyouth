<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('home/_layout/header');
?>

<section class="hero-area" id="header-custom">
  <div class="container">
    <div class="row">
      <div class="col-lg-11 mx-auto text-center">
        <h1 class="text-white font-tertiary"><?= $this->site_settings['title'] ?></h1>
        <h1 class="h4 text-white font-tertiary text-center mt-4"><?= $this->site_settings['description'] ?></h1>
        <a href="<?= base_url() ?>auth" type="button" class="btn btn-success btn-lg mt-4 text-white">Join Us</a>
      </div>
    </div>
  </div>
</section>

<div class="carousel-custom d-xs-none">
  <div class="carousel">
    <ul class="slides">
      <?php
      $image = ['batur', 'belitong', 'ciletuh', 'gunung-sewu', 'rinjani', 'toba'];
      for ($i = 0; $i < 6; $i++) {  ?>
        <input type="radio" name="radio-buttons" id="img-<?= $i ?>" <?php if ($i == 0) {
                                                                      echo "checked";
                                                                    } ?> />
        <li class="slide-container">
          <div class="slide-image">
            <img src="<?php base_url() ?>images/front-carousel/<?= $image[$i] ?>.jpg">
          </div>
          <div class="carousel-controls">
            <label for="img-<?= $i - 1 ?>" class="prev-slide" style="width: 100px">
              <span>&lsaquo;</span>
            </label>
            <label for="img-<?= $i + 1 ?>" class="next-slide" style="width: 100px">
              <span>&rsaquo;</span>
            </label>
          </div>
        </li>
      <?php }
      ?>
      <div class="carousel-dots">
        <?php for ($i = 0; $i < 6; $i++) {  ?>
          <label for="img-<?= $i ?>" class="carousel-dot" id="img-dot-<?= $i ?>"></label>
        <?php } ?>

      </div>
    </ul>
  </div>
</div>
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
          <a href="https://geoparksyouth.net/home/firstunescoggyfseminarandcamp"><img src="<?= base_url() ?>assets/new/index1.jpg" alt="" class="w-100">
        <img src="<?= base_url() ?>assets/new/index2.jpg" alt="" class="w-100">
        <img src="<?= base_url() ?>assets/new/index3.jpg" alt="" class="w-100"></a>
        
      </div>
    </div>
  </div>
</section>
<?php if ($dataArticles) { ?>
  <section class="section mt-1">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h3 class="section-title">Recent Articles</h3>
        </div>
        <?php foreach (array_slice($dataArticles, 0, 3) as $data) { ?>
          <div class="col-lg-4 col-sm-12 mb-4 mb-lg-0">
            <article class="card shadow">
              <img class="rounded card-img-top" src="<?= base_url() ?>images/article/<?= $data->article_image ?>" alt="post-thumb">
              <div class="card-body">
                <h4 class="card-title"><a class="text-dark" href="<?= base_url() ?>home/single/<?= $data->id_article ?>"><?= $data->title ?></a>
                </h4>
                <p class="font-secondary"><span class="text-primary"><?= $data->name ?></span> • <?= date("j F Y", strtotime($data->time_created)) ?></p>
              </div>
            </article>
          </div>
        <?php } ?>
        <div class="col-lg-10 mx-auto text-center">
          <a href="<?= base_url() ?>home/media" class="btn btn-transparent mt-3">Read More!</a>
        </div>
      </div>
    </div>
  </section>
<?php } ?>

<section class="section margin-0">
  <style>
    .margin0 {
      padding-top: 0px !important;
    }
  </style>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-title">About Us</h2>
      </div>
      <div class="col-lg-10 mx-auto text-center">
        <?= $this->site_settings['about_us'] ?>
      </div>
    </div>
  </div>
</section>



<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="col-lg-12 text-center">
          <h5 class="">Powered by</h5>
        </div>
        <a href="#" class="text-center d-block outline-0 p-4"><img class="client-logo d-unset img-fluid" src="<?php echo base_url(); ?>images/homepage/bappenas.png" alt="" target="_blank" style="height: 150px;"></a>
      </div>
      <div class="col-lg-8">
        <div class="col-lg-12 text-center">
          <h5 class="">In collaboration with</h5>
        </div>

        <a href="#" class="text-center d-block outline-0 p-4">
          <img class="client-logo d-unset img-fluid" src="<?php echo base_url(); ?>images/homepage/ggyf.png" alt="" target="_blank" style="height: 175px; margin-right: 30px;">
          <img class="client-logo d-unset img-fluid" src="<?php echo base_url(); ?>images/homepage/ggy.png" alt="" target="_blank" style="height: 125px; margin-right: 30px;">
          <img class="client-logo d-unset img-fluid " src="<?php echo base_url(); ?>images/homepage/maritim.png" alt="" target="_blank" style="height: 100px;">
        </a>
      </div>
    </div>
  </div>
</section>
<!-- /client logo slider -->

<script>
  var url = [
    'https://www.geoparksyouth.net/images/front-carousel/batur.jpg',
    'https://www.geoparksyouth.net/images/front-carousel/belitong.jpg',
    'https://www.geoparksyouth.net/images/front-carousel/ciletuh.jpg',
    'https://www.geoparksyouth.net/images/front-carousel/gunung-sewu.jpg',
    'https://www.geoparksyouth.net/images/front-carousel/toba.jpg',
    'https://www.geoparksyouth.net/images/front-carousel/rinjani.jpg'
  ];
  curentImageIndex = 0;
  setInterval(function() {
    console.log(url[curentImageIndex])
    var p = $('#image-head');
    p.css("background-image", "url(" + url[curentImageIndex++] + ")");
    if (curentImageIndex >= url.length) {
      curentImageIndex = 0
    }
  }, 2000);
</script>

<?php $this->load->view('home/_layout/footer'); ?>