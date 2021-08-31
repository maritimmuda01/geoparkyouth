<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_layout/header');
?>
<!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
          </div>

          <div class="section-body">
            <div class="row col-9" id="myProducts" >
              <?php foreach ($dataUser as $data) { ?>
              <div class="profile-card col-12 col-md-6 col-lg-4">
                <div class="card ">
                  <div class="card-body">
                    <div class="user-item">
                      <figure class="avatar mr-2 avatar-xl" style="background: #fff">
                        <img src="<?php echo base_url(); ?>assets/dashboard/img/profile/<?= $data->profile_picture ?>" style="padding-left: 0px; padding-right: 0px;">
                        <img src="https://hatscripts.github.io/circle-flags/flags/<?= strtolower($data->country) ?>.svg" data-toggle="tooltip" title="<?=$data->nicename ?>" class="avatar-icon" style="height: 25px; width: 25px;">
                      </figure>
                      <div class="user-details">
                        <div class="card-title user-name"><?= $data->name ?></div>
                        <div class="text-job text-muted">
                          <?php if ($data->position && $data->company) { 
                            echo $data->position.", ".$data->company; } ?>
                        </div>
                        <div class="user-cta">
                          <a href="<?php echo base_url(); ?>user/profile/<?= $data->id?>" class="btn btn-primary">See Profile</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
        </section>
      </div>
<?php $this->load->view('_layout/footer'); ?>

<script type="text/javascript">
  function myFunction() {
  var input, filter, cards, cardContainer, title, i;
  input = document.getElementById("myFilter");
  filter = input.value.toUpperCase();
  cardContainer = document.getElementById("myProducts");
  cards = cardContainer.getElementsByClassName("profile-card");
  
  for (i = 0; i < cards.length; i++) {
    title = cards[i].querySelector(".card-title");
    if (title.innerText.toUpperCase().indexOf(filter) > -1) {
      cards[i].style.display = "";
    } else {
      cards[i].style.display = "none";
    }
  }

}

</script>