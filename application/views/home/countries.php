<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('home/_layout/header');
?>

<!-- page title -->
<section class="page-title bg-primary position-relative">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="text-white font-tertiary">List per Country</h1>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- portfolio -->
<section class="section">
  <div class="container">
    <!--Accordion wrapper-->
    <div role="tablist">
      <?php foreach ($dataRegion as $region) { ?>
        <div class="card">
          <div class="card-header blue lighten-3 z-depth-1" role="tab" id="heading<?= $region->id_region ?>">
            <h5 class="text-uppercase mb-0 py-1">
              <a class="font-weight-bold white-text">
                <?= $region->region_name ?>
              </a>
            </h5>
          </div>
          <div class="card-body">
            <div class="row my-4">
              <?php foreach ($dataCountry as $country) {
                if ($country->region_id == $region->id_region) { ?>
                  <div class="col-lg-4 col-12 mb-4 text-center">
                    <div class="position-relative rounded hover-wrapper flags">
                      <a href="<?= base_url() ?>home/geopark/<?= $country->id_country ?>">
                        <img src="<?= base_url() ?>images/flags/<?= strtolower($country->iso) ?>.svg" class="img-fluid rounded w-100 d-block border">
                      </a>
                    </div>
                    <a class="btn btn-outline-dark btn-sm mt-2" href="<?= base_url() ?>home/geopark/<?= $country->id_country ?>"><?= $country->nicename ?></a>
                  </div>
              <?php }
              } ?>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
    <!--Accordion wrapper-->
    <div class="row shuffle-wrapper">

    </div>
  </div>
</section>
<!-- /portfolio -->

<?php
$this->load->view('home/_layout/footer');
?>