<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('home/_layout/header');
?>

<!-- page title -->
<section class="page-title-alt bg-primary position-relative">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="text-white font-tertiary">Global Geopark<br>Youth Forum</h2>
      </div>
    </div>
  </div>
  <!-- background shapes -->
<!--   <img src="<?= base_url()?>assets/home/images/illustrations/leaf-bg-top.png" alt="illustrations" class="bg-shape-1 w-100">
  <img src="<?= base_url()?>assets/home/images/illustrations/dots-group-sm.png" alt="illustrations" class="bg-shape-2">
  <img src="<?= base_url()?>assets/home/images/illustrations/leaf-yellow.png" alt="illustrations" class="bg-shape-3">
  <img src="<?= base_url()?>assets/home/images/illustrations/leaf-orange.png" alt="illustrations" class="bg-shape-4">
  <img src="<?= base_url()?>assets/home/images/illustrations/dots-group-cyan.png" alt="illustrations" class="bg-shape-5">
  <img src="<?= base_url()?>assets/home/images/illustrations/leaf-cyan-lg.png" alt="illustrations" class="bg-shape-6"> -->
</section>
<!-- /page title -->

<!-- about -->
<section class="section pt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
          dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
          commodo consequat.</p>
        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          Excepteur sint occaecat cupidatat non proident.</p>
        <p>Deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
          accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
          architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia.</p>
      </div>
      <div class="col-md-4 text-center drag-lg-top">
        <div class="shadow-down mb-4">
          <img src="<?= base_url()?>assets/home/images/about/author.jpg" alt="author" class="img-fluid w-100 rounded-lg border-thick border-white">
        </div>
        <img src="<?= base_url()?>assets/home/images/about/signature.png" alt="signature" class="img-fluid logo-about">
        <h4>Global Geopark Youth Forum</h4>
      </div>
    </div>
  </div>
</section>
<!-- /about -->

<?php
$this->load->view('home/_layout/footer');
?>