<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; <?= date('Y') ?> <div class="bullet"></div> <?= $site_settings['title'] ?>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>

<?php $this->load->view('_layout/js'); ?>