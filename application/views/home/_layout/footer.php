<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- footer -->
<footer class="bg-dark footer-section">
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-3 footer-text">
          © <?= date('Y') ?> <?= $site_settings['title'] ?>
        </div>
        <div class="col-md-6 footer-text">
          © 2021 <?= $site_settings['title'] ?>
        </div>        
        <div class="col-md-3 footer-text">
          +62-812-1846-2281
          <br>admin@maritimmuda.id
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="border-top text-center border-dark py-5">
    <p class="mb-0 text-light">Copyright ©<script>
        var CurrentYear = new Date().getFullYear()
        document.write(CurrentYear)
      </script> a theme by <a href="https://themefisher.com">themefisher.com</a></p>
  </div> -->
</footer>
<!-- /footer -->

<?php
$this->load->view('home/_layout/js');
?>

</body>
</html>