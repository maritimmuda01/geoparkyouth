<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('home/_layout/header');
?>

<!-- page title -->
<section class="page-title bg-primary position-relative">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="text-white font-tertiary">Countries of Geopark</h1>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- portfolio -->
<section class="section">
  <div class="container">
    <div class="row shuffle-wrapper">
    <?php foreach ($dataCountries as $data) { ?>
      <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;design&quot;,&quot;illustration&quot;]">
        <div class="position-relative rounded hover-wrapper">
          <img src="<?= base_url() ?>/assets/dashboard/img/flag/<?= strtolower($data->iso)?>.svg" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
          <div class="">
            <div class="hover-content">
              <a class="btn btn-outline-light btn-sm" href="<?= base_url() ?>home/geoname/<?= $data->iso?>"><?= $data->nicename?></a>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>	
    </div>
  </div>
</section>
<!-- /portfolio -->

<?php
$this->load->view('home/_layout/footer');
?>