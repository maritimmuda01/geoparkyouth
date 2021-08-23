<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_layout/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
        <section class="section">
          <div class="section-header">
            <h1>Categories Management</h1>
            <div class="section-header-breadcrumb">
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12 col-sm-12 col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="table-responsive">
                          <table id="categories" class="display table table-striped" cellspacing="0" width="100%">
                            <thead>                                 
                              <tr>
                                </th>
                                <th>Name</th>
                                <th class="text-center">Status</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($dataCategories as $data) { ?>                       
                              <tr>
                                <td class="align-middle">
                                  <a href="#"><?= $data->attr ?></a>
                                </td>
                                
                                <td class="text-center">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-warning" href="">Edit</button>
                                    </button>
                                  </div>
                                </td>
                              </tr>
                            <?php } ?>
                            </tbody>
                          </table>
                        </div>
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