<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_layout/header');
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-body">
  <div class="row">
    <div class="col-sm-12 mb-3 mt-3">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-search" aria-hidden="true"></i>
          </div>
        </div>
        <input type="text" id="myFilter" class="form-control" onkeyup="myFunction()" placeholder="Search">
      </div>
    </div>
  </div>
      <div class="row" id="myItems">
        <?php foreach ($dataUser as $data) { ?>
          <div class="col-lg-3">
            <div class="card profile-widget">
              <div class="profile-widget-header">                     
                <img alt="image" src="<?php echo base_url(); ?>assets/dashboard/img/profile/<?= $data->profile_picture ?>" class="rounded-circle profile-widget-picture">
              </div>
              <div class="profile-widget-description">
                <div class="profile-widget-name">
                  <h5>
                    <?= $data->name ?>
                  </h5>
                  <div class="d-inline font-weight-light">
                    <h6><?= $data->geoname_name.', '.$data->nicename ?></h6> 
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <a href="mailto:<?= $data->email; ?>" class="btn btn-social-icon btn-primary" data-toggle="tooltip" title="<?= $data->email ?>">
                  <i class="fa fa-envelope"></i>
                </a>
                <?php
                if ($data->twitter != "" || $data->instagram != "" || $data->linkedin != "") {
                  if ($data->twitter != "") { ?>
                    <a href="https://twitter.com/<?= $data->twitter ?>" class="btn btn-social-icon btn-twitter mr-1" data-toggle="tooltip" title="<?= $data->twitter ?>" target="_blank">
                      <i class="fab fa-twitter"></i>
                    </a>
                  <?php }
                  if ($data->instagram != "") { ?>
                    <a href="https://instagram.com/<?= $data->instagram; ?>" class="btn btn-social-icon btn-instagram" data-toggle="tooltip" title="<?= $data->instagram; ?>" target="_blank">
                      <i class="fab fa-instagram"></i>
                    </a>
                  <?php }
                  if ($data->linkedin != "") { ?>
                    <a href="https://linkedin.com/<?= $data->linkedin; ?>" class="btn btn-social-icon btn-linkedin" data-toggle="tooltip" title="<?= $data->linkedin; ?>" target="_blank">
                      <i class="fab fa-linkedin"></i>
                    </a>
                  <?php } }
                  ?>
                </div>
                <div class="card-footer">
                  <a href="<?php echo base_url(); ?>user/profile/<?= $data->id?>" class="btn btn-primary">See Profile</a>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </section>
    </div>
    <?php $this->load->view('_layout/footer'); ?>

<script type="text/javascript">
  // search results //
function myFunction() {
    var input, filter, cards, cardContainer, h5, title, i;
    input = document.getElementById("myFilter");
    filter = input.value.toUpperCase();
    cardContainer = document.getElementById("myItems");
    cards = cardContainer.getElementsByClassName("card");
    for (i = 0; i < cards.length; i++) {
        title = cards[i].querySelector(".profile-widget-name h5");
        if (title.innerText.toUpperCase().indexOf(filter) > -1) {
            cards[i].parentElement.style.display = "flex"
              } else {
                cards[i].parentElement.style.display = "none"
        }
    }
}
</script>