<!-- footer -->
<footer class="bg-dark footer-section">
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <a class="text-white mr-2" href="https://www.instagram.com/<?= $this->site_settings['instagram'] ?>"><i class="ti-instagram"></i></a>
          <a class="text-white mr-2" href="https://www.facebook.com/<?= $this->site_settings['facebook'] ?>"><i class="ti-facebook"></i></a>
        </div>
        <div class="col-md-12 footer-text mt-4">
          <p class="mb-0 text-white">
            <?= $this->site_settings['title'] . " " . $this->site_settings['footer_text'] ?>
          </p>
        </div>
      </div>
    </div>
</footer>
<!-- /footer -->

<!-- jQuery -->
<script src="<?= base_url() ?>assets/home/plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="<?= base_url() ?>assets/home/plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="<?= base_url() ?>assets/home/plugins/slick/slick.min.js"></script>
<!-- filter -->
<script src="<?= base_url() ?>assets/home/plugins/shuffle/shuffle.min.js"></script>

<!-- Main Script -->
<script src="<?= base_url() ?>assets/home/js/script.js"></script>

<?php
$this->load->view('dist/_partials/js');
?>