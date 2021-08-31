<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_layout/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="section-header">
            </div>
            <div class="row">
              <div class="col-lg-8">
                <div class="card">
                  <div class="card-header">
                    <h4><?= $single['position']." at ".$single['company'] ?></h4>
                  </div>
                  <div class="card-body">
                    <?= $single['description'] ?>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card">
                  <div class="card-body">
                    <div class="form-group row lg-6">
                      <label class="col-form-label col-lg-12">Position</label>
                      <div class="col-lg-12">
                        <input type="text" class="form-control-plaintext" readonly value="<?= $single['position']?>">
                      </div>
                      <label class="col-form-label col-lg-12">Company</label>
                      <div class="col-lg-12">
                        <input type="text" class="form-control-plaintext" readonly value="<?= $single['company']?>">
                      </div>
                      <label class="col-form-label col-lg-12">Job Location</label>
                      <div class="col-lg-12">
                        <input type="text" class="form-control-plaintext" readonly value="<?= $single['location']?>">
                      </div>
                      <label class="col-form-label col-lg-12">Type</label>
                      <div class="col-lg-12">
                        <input type="text" class="form-control-plaintext" readonly value="<?= $single['type']?>">
                      </div>
                      <label class="col-form-label col-lg-12">Published by</label>
                      <div class="col-lg-12">
                        <input type="text" class="form-control-plaintext" readonly value="<?= $single['author']?>">
                      </div>
                      <label class="col-form-label col-lg-12">Published at</label>
                      <div class="col-lg-12">
                        <input type="text" class="form-control-plaintext" readonly value="<?= date("d F Y", strtotime($single['created_date'])) ?>">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
<?php $this->load->view('_layout/footer'); ?>


                  