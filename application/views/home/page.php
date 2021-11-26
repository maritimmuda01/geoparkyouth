<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('home/_layout/header');
?>

<!-- page title -->
<section class="page-title-alt bg-primary position-relative">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="text-white font-tertiary"><?= $dataPages['title']?></h2>
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
        <?= $dataPages['content']?>
      </div>
      <div class="col-md-4 text-center drag-lg-top">
        <div class="shadow-down mb-4">
          <img src="https://cdn.idntimes.com/content-images/post/20180129/gunungrinjanilombok6-1-8cd9c00301a1c1851a47241d7eea67f6.jpg" alt="author" class="img-fluid w-100 rounded-lg border-thick border-white">
        </div>
        <h4><?= $dataPages['title']?></h4>
      </div>
    </div>
  </div>
</section>
<!-- /about -->

<?php
$this->load->view('home/_layout/footer');
?>