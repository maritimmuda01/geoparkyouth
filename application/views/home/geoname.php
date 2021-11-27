<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('home/_layout/header');
?>

<!-- page title -->
<section class="page-title bg-primary position-relative">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="text-white font-tertiary"><?= $country_by_id['nicename'] ?></h1>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- portfolio -->
<section class="section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-12">
        <div class="btn-group btn-group-toggle justify-content-center d-flex" data-toggle="buttons">
          <label class="btn btn-sm btn-primary active">
            <input type="radio" name="shuffle-filter" value="all" checked="checked" />All
          </label>
          <label class="btn btn-sm btn-primary">
            <input type="radio" name="shuffle-filter" value="unescoglobalgeopark" />UNESCO Global Geopark
          </label>
          <label class="btn btn-sm btn-primary">
            <input type="radio" name="shuffle-filter" value="nationalgeopark" />National Geopark
          </label>
          <label class="btn btn-sm btn-primary">
            <input type="radio" name="shuffle-filter" value="aspiringgeopark" />Aspiring Geopark
          </label>
        </div>
      </div>
    </div>
    <div class="row shuffle-wrapper">
    <?php foreach ($dataGeoname as $data) { ?>
      <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;<?= $data->geotype_id ?>&quot;]">
        <div class="position-relative rounded hover-wrapper">
          <img src="https://whatsnewindonesia.com/wp-content/uploads/2020/07/geopark-batur.jpg" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
          <div class="">
            <div class="hover-content">
              <a class="btn btn-outline-light btn-sm" href="project-single.html"><?= $data->name ?></a>
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