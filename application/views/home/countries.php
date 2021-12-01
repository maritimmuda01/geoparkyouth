<?php
defined('BASEPATH') OR exit('No direct script access allowed');
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
    <div  role="tablist">
      <?php foreach ($dataRegion as $data) { ?>
      <div class="card">
        <div class="card-header blue lighten-3 z-depth-1" role="tab" id="heading<?= $data->abbr ?>">
          <h5 class="text-uppercase mb-0 py-1">
            <a class="font-weight-bold white-text">
              <?= $data->name ?>
            </a>
          </h5>
        </div>
          <div class="card-body">
            <div class="row my-4">
              <div class="col-12 mb-4">
                <p>
                  Website: <a href="<?= $data->website ?>"><?= $data->website ?></a>
                </p>
                <p>
                  E-mail: <a href="<?= $data->email ?>"><?= $data->email ?></a>
                </p>
              </div>
              <?php
              $sql ="SELECT * FROM country WHERE region = '$data->abbr'";
              $query = $this->db->query($sql)->result();
              foreach ($query as $data) { ?>
              <div class="col-lg-4 col-6 mb-4 text-center">
                <div class="position-relative rounded hover-wrapper">
                  <a href="<?= base_url() ?>home/geoname/<?= $data->iso?>">
                  <img src="<?= base_url() ?>/assets/dashboard/img/flag/<?= strtolower($data->iso)?>.svg" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
                  </a>
                </div>
                 <a class="btn btn-outline-dark btn-sm mt-2" href="<?= base_url() ?>home/geoname/<?= $data->iso?>"><?= $data->nicename?></a>
              </div>
              <?php } ?>
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