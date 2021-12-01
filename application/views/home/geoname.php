<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('home/_layout/header');
?>

<!-- page title -->
<section class="page-title bg-primary position-relative">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mt-4">
        <h1 class="text-white font-tertiary"><?= $country_by_id['nicename'] ?></h1>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<section class="section pt-5">
  <div class="container mb-5">
    <div class="row">
      <div class="col-md-8">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Semper viverra nam libero justo laoreet sit amet cursus. Tristique sollicitudin nibh sit amet commodo nulla facilisi. Enim diam vulputate ut pharetra sit amet. Sit amet cursus sit amet. Urna id volutpat lacus laoreet non curabitur. Consectetur adipiscing elit duis tristique sollicitudin nibh. Malesuada bibendum arcu vitae elementum curabitur vitae nunc. Nulla facilisi morbi tempus iaculis urna id volutpat lacus laoreet. Fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien. Dui id ornare arcu odio ut sem nulla pharetra. Elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi tristique senectus.

        Massa enim nec dui nunc mattis enim. Lobortis feugiat vivamus at augue. Risus commodo viverra maecenas accumsan. Sit amet tellus cras adipiscing. Vulputate ut pharetra sit amet aliquam id diam maecenas. Nisl nunc mi ipsum faucibus vitae aliquet nec ullamcorper sit. Natoque penatibus et magnis dis parturient montes nascetur ridiculus. Leo a diam sollicitudin tempor id eu. Commodo ullamcorper a lacus vestibulum. Pellentesque dignissim enim sit amet venenatis urna cursus. Ullamcorper malesuada proin libero nunc consequat interdum varius sit amet. Nec sagittis aliquam malesuada bibendum.
      </div>
      <div class="col-md-4 text-center drag-lg-top">
        <div class="position-relative rounded hover-wrapper">
          <img src="<?= base_url() ?>/assets/dashboard/img/flag/<?= strtolower($country_by_id['iso'])?>.svg" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
        </div>
        <h4 class="mt-5"><?= $country_by_id['nicename'] ?>  </h4>
      </div>
    </div>
  </div>
  <div class="container">
    <!--Accordion wrapper-->
    <div class="accordion md-accordion accordion-1" id="accordionEx23" role="tablist">
      <div class="card">
        <div class="card-header blue lighten-3 z-depth-1" role="tab" id="headingunescoglobalgeopark">
          <h5 class="text-uppercase mb-0 py-1">
            <a class="collapsed font-weight-bold white-text" data-toggle="collapse" href="#collapseunescoglobalgeopark"
              aria-expanded="false" aria-controls="collapseunescoglobalgeopark">
              UNESCO Global Geopark (UGGp)
            </a>
          </h5>
        </div>
        <div id="collapseunescoglobalgeopark" class="collapse" role="tabpanel" aria-labelledby="headingunescoglobalgeopark"
          data-parent="#accordionEx23">
          <div class="card-body">
            <div class="row my-4">
              <?php
              $ID = $country_by_id['iso'];
              $sql ="SELECT * FROM geoname WHERE geotype_id = 'unescoglobalgeopark' AND country_id = '$ID' ";
              $query = $this->db->query($sql)->result();
              foreach ($query as $data) { ?>
              <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;design&quot;,&quot;illustration&quot;]">
                <div class="position-relative rounded hover-wrapper">
                  <img src="<?= base_url() ?>/assets/home/images/geopark/<?= $data->image ?>" alt="portfolio-image" class="img-fluid rounded w-100 d-block" style="height: 200px;">
                  <div class="">
                    <div class="hover-content">
                      <a class="btn btn-outline-light btn-sm" href="<?= base_url() ?>home/geoname/<?= $data->iso?>"><?= $data->name?></a>
                    </div>
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header blue lighten-3 z-depth-1" role="tab" id="headingnationalgeopark">
          <h5 class="text-uppercase mb-0 py-1">
            <a class="collapsed font-weight-bold white-text" data-toggle="collapse" href="#collapsenationalgeopark"
              aria-expanded="false" aria-controls="collapsenationalgeopark">
              National Geopark
            </a>
          </h5>
        </div>
        <div id="collapsenationalgeopark" class="collapse" role="tabpanel" aria-labelledby="headingnationalgeopark"
          data-parent="#accordionEx23">
          <div class="card-body">
            <div class="row my-4">
              <?php
              $ID = $country_by_id['iso'];
              $sql ="SELECT * FROM geoname WHERE geotype_id = 'nationalgeopark' AND country_id = '$ID' ";
              $query = $this->db->query($sql)->result();
              foreach ($query as $data) { ?>
              <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;design&quot;,&quot;illustration&quot;]">
                <div class="position-relative rounded hover-wrapper">
                  <img src="<?= base_url() ?>/assets/home/images/geopark/<?= $data->image ?>" alt="portfolio-image" class="img-fluid rounded w-100 d-block" style="height: 200px;">
                  <div class="">
                    <div class="hover-content">
                      <a class="btn btn-outline-light btn-sm" href="<?= base_url() ?>home/geoname/<?= $data->iso?>"><?= $data->name?></a>
                    </div>
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header blue lighten-3 z-depth-1" role="tab" id="headingaspiringgeopark">
          <h5 class="text-uppercase mb-0 py-1">
            <a class="collapsed font-weight-bold white-text" data-toggle="collapse" href="#collapseaspiringgeopark"
              aria-expanded="false" aria-controls="collapseaspiringgeopark">
              Aspiring Geopark
            </a>
          </h5>
        </div>
        <div id="collapseaspiringgeopark" class="collapse" role="tabpanel" aria-labelledby="headingaspiringgeopark"
          data-parent="#accordionEx23">
          <div class="card-body">
            <div class="row my-4">
              <?php
              $ID = $country_by_id['iso'];
              $sql ="SELECT * FROM geoname WHERE geotype_id = 'aspiringgeopark' AND country_id = '$ID' ";
              $query = $this->db->query($sql)->result();
              foreach ($query as $data) { ?>
              <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;design&quot;,&quot;illustration&quot;]">
                <div class="position-relative rounded hover-wrapper">
                  <img src="<?= base_url() ?>/assets/home/images/geopark/<?= $data->image ?>" alt="portfolio-image" class="img-fluid rounded w-100 d-block" style="height: 200px;">
                  <div class="">
                    <div class="hover-content">
                      <a class="btn btn-outline-light btn-sm" href="<?= base_url() ?>home/geoname/<?= $data->iso?>"><?= $data->name?></a>
                    </div>
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
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