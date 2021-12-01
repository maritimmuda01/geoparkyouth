<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('home/_layout/header');
?>

<!-- page title -->
<section class="page-title bg-primary position-relative">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="text-white font-tertiary">Media</h1>
      </div>
    </div>
  </div>
  <!-- background shapes -->
 <!--  <img src="<?php echo base_url(); ?>assets/home/images/illustrations/page-title.png" alt="illustrations" class="bg-shape-1 w-100">
  <img src="<?php echo base_url(); ?>assets/home/images/illustrations/leaf-pink-round.png" alt="illustrations" class="bg-shape-2">
  <img src="<?php echo base_url(); ?>assets/home/images/illustrations/dots-cyan.png" alt="illustrations" class="bg-shape-3">
  <img src="<?php echo base_url(); ?>assets/home/images/illustrations/leaf-orange.png" alt="illustrations" class="bg-shape-4">
  <img src="<?php echo base_url(); ?>assets/home/images/illustrations/leaf-yellow.png" alt="illustrations" class="bg-shape-5">
  <img src="<?php echo base_url(); ?>assets/home/images/illustrations/dots-group-cyan.png" alt="illustrations" class="bg-shape-6">
  <img src="<?php echo base_url(); ?>assets/home/images/illustrations/leaf-cyan-lg.png" alt="illustrations" class="bg-shape-7"> -->
</section>
<!-- /page title -->

<!-- portfolio -->
<section class="section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-12">
        <div class="btn-group btn-group-toggle justify-content-center d-flex" data-toggle="buttons">
            <label class="btn btn-sm btn-primary active cat-label">
              <input type="radio" name="shuffle-filter" value="" checked="checked"/>All
            </label>
          <?php foreach ($dataCategories as $data) { ?>
            <label class="btn btn-sm btn-primary cat-label">
              <input type="radio" name="shuffle-filter" value="<?= $data->name ?>" /><?= $data->attr ?>
            </label>
          <?php } ?>
        </div>
      </div>
    </div>
    <div class="row shuffle-wrapper">
      <?php foreach ($dataArticles as $data) { ?>
        <div class="col-lg-4 col-sm-6 mb-4 shuffle-item" data-groups="[&quot;<?= $data->category_name ?>&quot;]">
        <article class="card shadow">
          <img class="rounded card-img-top" src="<?= base_url() ?>assets/dashboard/img/articles/<?= $data->image ?>" alt="post-thumb">
          <div class="card-body">
            <p class="cars-text thumbnail-text"><span class="text-primary"><?= $data->category_attr ?></span> • <span class="text-primary"><?= date("d F Y",strtotime($data->date)) ?></span></p>
            <h4 class="card-title"><a class="text-dark" href="<?= base_url(); ?>home/single/<?= $data->id ?>"><?= $data->title ?></a>
            </h4>
          </div>
        </article>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
<!-- /portfolio -->

<?php
$this->load->view('home/_layout/footer');
?>