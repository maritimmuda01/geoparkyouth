<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_layout/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
        <section class="section">
          

          <div class="section-body">
            <div class="row">
              <div class="col-12 col-sm-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Pages Management</h4>
                    <div class="card-header-action">
                      <a href="<?= base_url() ?>admin/add_pages" class="btn btn-info">
                        <i class="far fa-edit"></i> Add New
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="table-responsive">
                          <table id="example" class="display table table-striped">
                            <thead>                                 
                              <tr>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Parent</th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody>
                               <?php foreach ($dataPages as $data) { ?>
                                <tr>
                                  <td class="align-middle">
                                    <a href="<?php echo base_url(); ?>home/pages/<?= $data->id?>" target="_blank"><?= $data->title ?></a>
                                  </td>
                                  <td>
                                    <?= $data->slug ?>
                                  </td>
                                  <td>
                                    <?= $data->page_parent_name ?>
                                  </td>
                                  <td>
                                    
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