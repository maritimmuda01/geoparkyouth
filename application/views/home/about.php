<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('home/_layout/header');
?>

<!-- page title -->
<section class="page-title-alt bg-primary position-relative">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="text-white font-tertiary">Geoparks Youth Hub</h2>
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
        <p>Geoparks Youth Hub is a platform to connect youths around the world for sustaining the Geoparks. It is powered by Indonesian Maritime Youths (Maritim Muda Nusantara) in collaboration with the Ministry of National Development Planning/National Development Planning Agency of Republic of Indonesia. We provide a digital communication portal for Geoparks youth across countries. We also provide information of Geoparks youth activities, events, and job vacancy.</p>
        <p>
      </div>
      <div class="col-md-4 text-center drag-lg-top">
        <div class="shadow-down mb-4">
          <img src="https://phinemo.com/wp-content/uploads/2018/04/geopark-ciletuh-3-1.jpg" alt="author" class="img-fluid w-100 rounded-lg border-thick border-white">
        </div>
        <h4><?= $site_settings['title'] ?></h4>
      </div>
    </div>
  </div>
</section>
<!-- /about -->

<?php
$this->load->view('home/_layout/footer');
?>