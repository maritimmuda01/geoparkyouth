<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('home/_layout/header');
?>

<style>
  .page-title-alt {
    background-image: url('<?= base_url() ?>images/front-carousel/<?= $dataPages['image'] ?>');
  }
</style>

<!-- page title -->
<section class="page-title-alt bg-primary position-relative">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="text-white font-tertiary"><?= $dataPages['title'] ?></h2>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- about -->
<section class="section pt-5 pb-0">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?= $dataPages['content'] ?>
      </div>
    </div>
  </div>
</section>
<!-- /about -->

<section class="mt-5 mb-4">
  <div class="container">
    <div class="row shuffle-wrapper">
      <?php foreach ($dataPageimage as $data) { ?>
        <div class="col-lg-4 col-6 mb-4 shuffle-item">
          <div class="position-relative rounded hover-wrapper">
            <img src="<?= base_url() ?>images/pageimage/<?= $data->file ?>" class="img-fluid rounded w-100 d-block">
            <div class="hover-overlay">
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>

<?php $this->load->view('home/_layout/footer'); ?>