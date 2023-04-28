<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><?= $title ?></h1>
    </div>
    <!-- <div class="form-group">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search here..." aria-label="" id="searchInput">
      </div>
    </div> -->
    <div class="section-body">
      <!-- <div class="row" id="show_data"> -->
      <div class="row" id="show_data">
        <div class="col-12 col-sm-12 col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-12 col-sm-12 col-md-3" style="height: 520px; overflow: auto;">
                  <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
                    <li class="nav-item">
                      <?php $jumlah = count($dataUser) ?>
                      <a class="nav-link active" id="contact-tab4" data-toggle="tab" href="#allCountries" role="tab" aria-controls="contact" aria-selected="true">All Countries<div class="text-small"><i class="fas fa-user mr-2"></i><?= $jumlah ?></div></a>
                    </li>
                    <?php foreach ($dataCountries as $data) {
                      $jumlah = count($this->M_User->showAllActiveUserByCountry($data->id_country))
                    ?>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab4" data-toggle="tab" href="#<?= $data->id_country ?>" role="tab" aria-controls="contact" aria-selected="false"><?= $data->nicename ?><div class="text-small"><i class="fas fa-user mr-2"></i><?= $jumlah ?></div> </a>
                      </li>
                    <?php } ?>
                  </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-9" style="height: 520px; overflow: auto;">
                  <div class="tab-content no-padding" id="myTab2Content">
                    <!-- <div class="form-group">
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search here..." aria-label="" id="searchInput">
                      </div>
                    </div> -->
                    <div class="tab-pane fade show active" id="allCountries" role="tabpanel" aria-labelledby="contact-tab4">
                      <?php foreach ($dataUser as $data) { ?>
                        <div class="card card-info h-50 items">
                          <div class="card-body">
                            <ul class="list-unstyled user-progress list-unstyled-border list-unstyled-noborder">
                              <li class="media">
                                <img alt="image" class="mr-3 rounded-circle" width="50" height="50" src="<?php echo base_url(); ?>images/profile/<?= $data->profile_picture ?>">
                                <div class="media-body">
                                  <div class="media-title"><?= $data->name ?></div>
                                  <div class="text-job text-primary"><?= $data->geoname . ", " . $data->geotype_name ?></div>
                                  <div class="text-job text-muted"><?= $data->about ?></div>
                                  <div class="social mt-2">
                                    <a href="mailto:<?= $data->email ?>" class="btn btn-social-icon mr-1 btn-adn">
                                      <i class="fa fa-envelope"></i>
                                    </a>
                                    <a href="https://twitter.com/<?= $data->twitter ?>" target="_blank" class="btn btn-social-icon mr-1 btn-twitter">
                                      <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="https://instagram.com/<?= $data->instagram ?>" target="_blank" class="btn btn-social-icon mr-1 btn-instagram">
                                      <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="https://linkedin.com/in/<?= $data->twitter ?>" target="_blank" class="btn btn-social-icon mr-1 btn-linkedin">
                                      <i class="fab fa-linkedin"></i>
                                    </a>
                                  </div>
                                </div>
                              </li>
                          </div>
                        </div>
                      <?php } ?>
                    </div>
                    <?php foreach ($dataCountries as $country) { ?>
                      <div class="tab-pane fade" id="<?= $country->id_country ?>" role="tabpanel" aria-labelledby="contact-tab4">
                        <?php foreach ($dataUser as $data) {
                          if ($data->country_id == $country->id_country) { ?>
                            <div class="card h-75">
                              <div class="card-body">
                                <ul class="list-unstyled user-progress list-unstyled-border list-unstyled-noborder">
                                  <li class="media">
                                    <img alt="image" class="mr-3 rounded-circle" width="50" height="50" src="<?php echo base_url(); ?>images/profile/<?= $data->profile_picture ?>">
                                    <div class="media-body">
                                      <div class="media-title"><?= $data->name ?></div>
                                      <div class="text-job text-primary"><?= $data->geoname . ", " . $data->geotype_name ?></div>
                                      <div class="text-job text-muted"><?= $data->about ?></div>
                                      <div class="social mt-2">
                                        <a href="mailto:<?= $data->email ?>" class="btn btn-social-icon mr-1 btn-adn">
                                          <i class="fa fa-envelope"></i>
                                        </a>
                                        <a href="https://twitter.com/<?= $data->twitter ?>" target="_blank" class="btn btn-social-icon mr-1 btn-twitter">
                                          <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="https://instagram.com/<?= $data->instagram ?>" target="_blank" class="btn btn-social-icon mr-1 btn-instagram">
                                          <i class="fab fa-instagram"></i>
                                        </a>
                                        <a href="https://linkedin.com/in/<?= $data->twitter ?>" target="_blank" class="btn btn-social-icon mr-1 btn-linkedin">
                                          <i class="fab fa-linkedin"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </li>
                              </div>
                            </div>
                        <?php }
                        } ?>
                        <!-- <?php if ($data->country != $country->id_country) { ?>
                          <div class="empty-state" data-height="400">
                            <div class="empty-state-icon">
                              <i class="fas fa-question"></i>
                            </div>
                            <h2>No Result</h2>
                            <p class="lead">
                              The data you are looking for is not exist.
                            </p>
                          </div>
                        <?php } ?> -->
                      </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--  -->
    </div>
  </section>
</div>
<?php $this->load->view('dist/_partials/footer'); ?>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="author-box">
          <div class="card-body">
            <div class="author-box-left">
              <img alt="image" src="#" class="rounded-circle author-box-picture" id="profilePicture">
              <div class="clearfix"></div>
            </div>
            <div class="author-box-details">
              <div class="author-box-name">
                <a href="#" id="name"></a>
              </div>
              <div class="author-box-job" id="job"></div>
              <div class="author-box-job" id="geoname"></div>
              <div class="author-box-description mb-4">
              </div>
              <a href="#" class="btn btn-social-icon mr-1 btn-twitter">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="btn btn-social-icon mr-1 btn-instagram">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#" class="btn btn-social-icon mr-1 btn-linkedin">
                <i class="fab fa-linkedin"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.querySelector('#searchInput').addEventListener('keyup', function(e) {
      // UI Element
      let namesLI = document.getElementsByClassName('items');

      // Get Search Query
      let searchQuery = searchInput.value.toLowerCase();

      // Search Compare & Display

      for (let index = 0; index < namesLI.length; index++) {
        const name = namesLI[index].textContent.toLowerCase();

        if (name.includes(searchQuery)) {
          namesLI[index].style.display = 'block';
          count++;
        } else {
          namesLI[index].style.display = 'none';
        }

        var allElems = document.getElementsByTagName('div');
        var count = 0;
        for (var i = 0; i < allElems.length; i++) {
          var thisElem = allElems[i];
          if (thisElem.style.display == 'block') count++;
        }

      }
      var count = $('div.items:hidden').length;
      if (count == namesLI.length) {
        $('.empty-state').removeAttr('hidden');
      }
      if (count < 1) {
        $('.empty-state').attr('hidden', true);
      }

    });

    $(function() {

      //preview
      $('#show_data').on('click', '.item-preview', function() {
        var id = $(this).attr('data');
        $('#myModal').modal('show');
        $('#myModal').find('.modal-title').text('Preview');
        $.ajax({
          type: 'get',
          url: '<?php echo  base_url() ?>user/editUser',
          data: {
            id: id
          },
          async: false,
          dataType: 'json',
          success: function(data) {
            $('#name').text(data.name);
            if (data.position) {
              $('#job').text(data.position + ", " + data.company);
            }
            $("#profilePicture").attr("src", "<?php echo base_url(); ?>images/profile/" + data.profile_picture);
            $('#geoname').text(data.geoname_name + ", " + data.nicename);
            $('.author-box-description').html(data.about);
            $('.btn-twitter').prop("href", "https://twitter.com/" + data.twitter);
            $('.btn-instagram').prop("href", "https://instagram.com/" + data.instagram);
            $('.btn-linkedin').prop("href", "https://linkedin.com/in/" + data.linkedin);
          },
          error: function() {
            swal('Failed', 'Error occured. Please try again!', 'error');
          }
        });

      });
    });
  </script>