<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('home/_layout/header');
// var_dump($dataCountry);
// die();
?>


<!-- page title -->
<section class="page-title bg-primary position-relative">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mt-4">
        <h1 class="text-white font-tertiary"><?= $dataCountry['nicename'] ?></h1>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<section class="section pt-5">
  <div class="container mb-5">
    <div class="row">
      <div class="col-md-10">
        <?= $dataCountry['country_desc'] ?>
      </div>
      <div class="col-md-2">
        <div class="row">
          <div class="col-md-12 text-center drag-lg-top">
            <div class="position-relative rounded hover-wrapper flags">
              <img src="<?= base_url() ?>/images/flags/<?= strtolower($dataCountry['iso']) ?>.svg" class="border img-fluid rounded w-100 d-block">
            </div>
          </div>
          <div class="col-md-12 text-center drag-lg-top mt-3">
            <div class="position-relative rounded hover-wrapper flags">
              <img src="<?= base_url() ?>images/country/<?= $dataCountry['logo'] ?>" class=" img-fluid rounded w-100 d-block">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-sm-12 col-md-12">
        <div id="mapall" style="height: 400px;"></div>
      </div>
    </div>
  </div>
  <div class="container">
    <!--Accordion wrapper-->
    <div class="accordion md-accordion accordion-1" id="accordionEx23" role="tablist">
      <?php foreach ($dataType as $type) { ?>
        <div class="card">
          <div class="card-header blue lighten-3 z-depth-1" role="tab">
            <h5 class="text-uppercase mb-0 py-1">
              <a class=" font-weight-bold white-text" aria-expanded="false" aria-controls="collapseunescoglobalgeopark">
                <?= $type->geotype_name ?>
              </a>
            </h5>
          </div>
          <?php if ($dataGeoparks) { ?>
            <div id="collapseunescoglobalgeopark" role="tabpanel">
              <div class="card-body">
                <div class="row my-4">
                  <?php foreach ($dataGeoparks as $geoparks) {
                    if ($geoparks->geotype_id == $type->id_geotype) {
                  ?>
                      <div class="col-lg-4 col-12 mb-4 shuffle-item text-center ">
                        <div class="position-relative rounded hover-wrapper">
                          <img src="<?= base_url() ?>images/geoparks/<?= $geoparks->image ?>" class="mx-auto img-fluid rounded d-block" style="height: 200px;">
                        </div>
                        <button id="<?= $geoparks->id_geoname ?>" class="btn btn-outline-dark item-preview geonamebutton btn-sm mt-4"><?= $geoparks->geoname . " " . $geoparks->geotype_name ?></button>
                      </div>
                  <?php }
                  } ?>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      <?php } ?>
    </div>
  </div>
</section>
<!-- /portfolio -->

<div id="myModal" class="modal fade" role="dialog" style="z-index: 99999;">
  <div class="modal-dialog modal-lg" style="width:100%" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body p-0">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-12 col-md-12" id="maphere">
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-sm-12 col-lg-12 text-center mb-2">
              <a class="btn btn-secondary btn-sm insta" href="#" role="button"><i class="fa fa-instagram" aria-hidden="true"></i></a>
              <a class="btn btn-info btn-sm link" href="#" role="button"><i class="fa fa-link" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php
$this->load->view('home/_layout/footer');
?>

<script>
  //preview
  $(document).on('click', '.item-preview', function() {
    $('#mapid').remove();
    $('#maphere').append('<div id="mapid" style="height: 400px;"></div> ')
    var id = $(this).attr('data');
    $('#myModal').modal('show');
    $('#myModal').find('.modal-title').text('Edit Geopark');
    $.ajax({
      type: 'get',
      url: '<?php echo  base_url() ?>home/showAllGeoparksById/' + this.id,
      data: {
        id: id
      },
      async: false,
      dataType: 'json',
      success: function(data) {
        console.log(data);
        $('#myModal').find('.modal-title').text(data.geoname + " " + data.geotype_name);
        $(".insta").attr("href", data.geo_insta)
        $(".link").attr("href", data.geo_link)
        $("#latitude").val(data.lat);
        $("#longitude").val(data.long);
        var curLocation = [data.lat, data.long];
        initializeMap(curLocation);
      },
      error: function() {
        swal('Failed', 'Error occured. Please try again!', 'error');
      }
    });

  });

  function initializeMap(curLocation) {
    $('#myModal').on('shown.bs.modal', function() {
      this.mymap;
      setTimeout(function() {
        mymap.invalidateSize();
      }, 3);
    })
    if (curLocation[0] == '' && curLocation[1] == '') {
      curLocation = [-6.3677206, 106.7108219];
    }
    var mymap = L.map('mapid').setView(curLocation, 5);

    var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 19,
      attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(mymap);


    mymap.attributionControl.setPrefix(false);
    var marker = new L.marker(curLocation, {
    });

    mymap.addLayer(marker);
  }
</script>

<!-- all map -->
<script>
    this.mymap;
    var mymap = L.map('mapall').setView([-6.3677206, 106.7108219], 5);

    var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 20,
      attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(mymap);

    <?php foreach ($dataGeoparks as $geo){
      if ($geo->lat && $geo->long) {
     ?> 
        mymap.attributionControl.setPrefix(false);
         var marker = new L.marker([<?= $geo->lat ?>, <?= $geo->long ?>], {
        });
        mymap.addLayer(marker);
        marker.bindPopup('<h6><?= $geo->geoname ?> <?= $geo->geotype_name ?></h6>');
    <?php } } ?>

    

  
</script>