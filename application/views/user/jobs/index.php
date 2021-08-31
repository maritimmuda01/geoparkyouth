<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_layout/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
        <section class="section">
          <div class="section-header">
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12 col-sm-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Jobs</h4>
                    <div class="card-header-action">
                      <a href="<?= base_url() ?>user/post_jobs" class="btn btn-info">
                        <i class="far fa-edit"></i> Post New
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="form-row">
                          <div class="form-group col-lg-10">
                            <label class="form-label">Filter Categories</label>
                            <div class="selectgroup selectgroup-pills panel-body " id="category">
                              <div class="selectgroup-item">
                                <label class="selectgroup-item">
                                  <input type="checkbox" value="Full-Time" class="selectgroup-input filter-checkbox">
                                  <span class="selectgroup-button">Full-Time</span>
                                </label>
                                <label class="selectgroup-item">
                                  <input type="checkbox" value="Part-Time" class="selectgroup-input filter-checkbox">
                                  <span class="selectgroup-button">Part-Time</span>
                                </label>
                                <label class="selectgroup-item">
                                  <input type="checkbox" value="Freelance" class="selectgroup-input filter-checkbox">
                                  <span class="selectgroup-button">Freelance</span>
                                </label>
                                <label class="selectgroup-item">
                                  <input type="checkbox" value="Internship" class="selectgroup-input filter-checkbox">
                                  <span class="selectgroup-button">Internship</span>
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="table-responsive">
                          <table id="user-jobs" class="display table table-striped">
                            <thead>                                 
                              <tr>
                                <th>Position</th>
                                <th>Company</th>
                                <th>Location</th>
                                <th>Type</th>
                                <th>Posted By</th>
                                <th class="text-center"></th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($dataJobs as $data) {
                               ?>                                
                              <tr>
                                <td class="align-middle"><?= $data->position ?></td>
                                <td class="align-middle"><?= $data->company ?></td>
                                <td class="align-middle"><?= $data->location ?></td>
                                <td class="align-middle"><?= $data->type ?></td>
                                <td class="align-middle">
                                  <a href="<?php echo base_url(); ?>user/profile/<?= $data->author_id?>">
                                    <div class="d-inline-block ml-1"><?= $data->author ?></div>
                                </td>
                                <td class="text-center">
                                   <a class="btn btn-primary" href="<?php echo base_url('user/jobs_single/'.$data->id); ?>">See Detail</a>
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