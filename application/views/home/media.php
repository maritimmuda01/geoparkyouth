<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('home/_layout/header');
?>

<!-- page title -->
<section class="page-title bg-primary position-relative">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="text-white font-tertiary">Portfolio</h1>
      </div>
    </div>
  </div>
  <!-- background shapes -->
  <img src="<?php echo base_url(); ?>assets/home/images/illustrations/page-title.png" alt="illustrations" class="bg-shape-1 w-100">
  <img src="<?php echo base_url(); ?>assets/home/images/illustrations/leaf-pink-round.png" alt="illustrations" class="bg-shape-2">
  <img src="<?php echo base_url(); ?>assets/home/images/illustrations/dots-cyan.png" alt="illustrations" class="bg-shape-3">
  <img src="<?php echo base_url(); ?>assets/home/images/illustrations/leaf-orange.png" alt="illustrations" class="bg-shape-4">
  <img src="<?php echo base_url(); ?>assets/home/images/illustrations/leaf-yellow.png" alt="illustrations" class="bg-shape-5">
  <img src="<?php echo base_url(); ?>assets/home/images/illustrations/dots-group-cyan.png" alt="illustrations" class="bg-shape-6">
  <img src="<?php echo base_url(); ?>assets/home/images/illustrations/leaf-cyan-lg.png" alt="illustrations" class="bg-shape-7">
</section>
<!-- /page title -->

<!-- portfolio -->
<section class="section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-12">
        <div class="btn-group btn-group-toggle justify-content-center d-flex" data-toggle="buttons">
          <label class="btn btn-sm btn-primary active">
            <input type="radio" name="shuffle-filter" value="news" checked="checked" />News
          </label>
          <label class="btn btn-sm btn-primary">
            <input type="radio" name="shuffle-filter" value="information" />Information
          </label>
          <label class="btn btn-sm btn-primary">
            <input type="radio" name="shuffle-filter" value="opinion" />Opinion
          </label>
        </div>
      </div>
    </div>
    <div class="row shuffle-wrapper">
      <?php foreach ($dataNews as $data) { ?>
      <div class="col-lg-4 col-sm-6 mb-4 shuffle-item" data-groups="[&quot;news&quot;]">
        <article class="card shadow">
          <img class="rounded card-img-top" src="<?php echo base_url(); ?>assets/dashboard/img/articles/<?= $data->articles_image?>" alt="post-thumb">
          <div class="card-body">
            <h4 class="card-title"><a class="text-dark" href="blog-single.html"><?= $data->title ?></a>
            </h4>
            <p class="cars-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
              incididunt ut labore et
              dolore magna aliqua.</p>
            <a href="blog-single.html" class="btn btn-xs btn-primary">Read More</a>
          </div>
        </article>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
<!-- /portfolio -->

<!-- clients -->
<section class="section bg-light">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="section-title">My Clients</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="client-logo-slider d-flex align-items-center">
          <a href="#" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
              src="<?php echo base_url(); ?>assets/home/images/clients-logo/client-logo-1.png" alt="client-logo"></a>
          <a href="#" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
              src="<?php echo base_url(); ?>assets/home/images/clients-logo/client-logo-2.png" alt="client-logo"></a>
          <a href="#" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
              src="<?php echo base_url(); ?>assets/home/images/clients-logo/client-logo-3.png" alt="client-logo"></a>
          <a href="#" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
              src="<?php echo base_url(); ?>assets/home/images/clients-logo/client-logo-4.png" alt="client-logo"></a>
          <a href="#" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
              src="<?php echo base_url(); ?>assets/home/images/clients-logo/client-logo-5.png" alt="client-logo"></a>
          <a href="#" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
              src="<?php echo base_url(); ?>assets/home/images/clients-logo/client-logo-1.png" alt="client-logo"></a>
          <a href="#" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
              src="<?php echo base_url(); ?>assets/home/images/clients-logo/client-logo-2.png" alt="client-logo"></a>
          <a href="#" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
              src="<?php echo base_url(); ?>assets/home/images/clients-logo/client-logo-3.png" alt="client-logo"></a>
          <a href="#" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
              src="<?php echo base_url(); ?>assets/home/images/clients-logo/client-logo-4.png" alt="client-logo"></a>
          <a href="#" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
              src="<?php echo base_url(); ?>assets/home/images/clients-logo/client-logo-5.png" alt="client-logo"></a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /clients -->

<!-- contact -->
<section class="section section-on-footer" data-background="images/backgrounds/bg-dots.png">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="section-title">Contact Info</h2>
      </div>
      <div class="col-lg-8 mx-auto">
        <div class="bg-white rounded text-center p-5 shadow-down">
          <h4 class="mb-80">Contact Form</h4>
          <form action="#" class="row">
            <div class="col-md-6">
              <input type="text" id="name" name="name" placeholder="Full Name" class="form-control px-0 mb-4">
            </div>
            <div class="col-md-6">
              <input type="email" id="email" name="email" placeholder="Email Address" class="form-control px-0 mb-4">
            </div>
            <div class="col-12">
              <textarea name="message" id="message" class="form-control px-0 mb-4"
                placeholder="Type Message Here"></textarea>
            </div>
            <div class="col-lg-6 col-10 mx-auto">
              <button class="btn btn-primary w-100">send</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /contact -->

<?php
$this->load->view('home/_layout/footer');
?>