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
        <div class="col-lg-12 col-sm-12">
          <div class="card profile-widget">
            <div class="profile-widget-header">                     
              <img alt="image" src="<?= base_url('assets/dashboard/img/profile/') . $profile['profile_picture']; ?>" class="rounded-circle profile-widget-picture">
              <div class="profile-widget-items">
              </div>
            </div>
            <div class="profile-widget-description">
              <div class="profile-widget-name">
                <h4>
                  <?= $profile['name']; ?>
                </h4> 
                <?php if ($profile['position'] || $profile['company']) {
                  echo "<div class='text-muted d-inline font-weight-light'>";
                  if ($profile['position'] && $profile['company']){
                    echo $profile['position']." at ";
                  }
                  echo $profile['company'];
                  echo "</div>";
                }
                ?>
                <div class="d-inline font-weight-light">
                  <h6><?php if($profile['geoname']){ echo $geoname['name'].', ';} echo $country['nicename']; ?> </h6> 
                </div>
              </div>
              <?= $profile['about']?>
            </div>
            <div class="card-footer">
              <a href="mailto:<?= $profile['email']; ?>" class="btn btn-social-icon btn-primary" data-toggle="tooltip" title="<?= $profile['email']; ?>">
                <i class="fa fa-envelope"></i>
              </a>
              <?php
              if ($profile['twitter'] != "" || $profile['instagram'] != "" || $profile['linkedin'] != "") {
              if ($profile['twitter'] != "") { ?>
                <a href="https://twitter.com/<?= $profile['twitter']; ?>" class="btn btn-social-icon btn-twitter mr-1" data-toggle="tooltip" title="<?= $profile['twitter']; ?>" target="_blank">
                  <i class="fab fa-twitter"></i>
                </a>
              <?php }
              if ($profile['instagram'] != "") { ?>
                <a href="https://instagram.com/<?= $profile['instagram']; ?>" class="btn btn-social-icon btn-instagram" data-toggle="tooltip" title="<?= $profile['instagram']; ?>" target="_blank">
                  <i class="fab fa-instagram"></i>
                </a>
              <?php }
              if ($profile['linkedin'] != "") { ?>
                <a href="https://linkedin.com/<?= $profile['linkedin']; ?>" class="btn btn-social-icon btn-linkedin" data-toggle="tooltip" title="<?= $profile['linkedin']; ?>" target="_blank">
                  <i class="fab fa-linkedin"></i>
                </a>
              <?php } }
              ?>
            </div>
            <div class="card-body">
              <ul class="nav nav-tabs" id="myTab2" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="articles-tab2" data-toggle="tab" href="#articles2" role="tab" aria-controls="articles" aria-selected="true">Articles</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="jobs-tab2" data-toggle="tab" href="#jobs2" role="tab" aria-controls="jobs" aria-selected="false">Jobs</a>
                </li>
              </ul>
              <div class="tab-content tab-bordered" id="myTab3Content">
                <div class="tab-pane fade show active" id="articles2" role="tabpanel" aria-labelledby="articles-tab2">
                  <div class="form-row">
                    <div class="form-group col-lg-10">
                      <label class="form-label">Filter Categories</label>
                      <div class="selectgroup selectgroup-pills panel-body " id="category">
                        <div class="selectgroup-item">
                          <?php foreach ($dataCategories as $data) { ?>
                          <label class="selectgroup-item">
                            <input type="checkbox" value="<?= $data->name ?>" class="selectgroup-input filter-checkbox">
                            <span class="selectgroup-button"><?= $data->attr ?></span>
                          </label>
                          <?php } ?>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table id="user-articles" class="display table table-striped">
                      <thead>                                 
                        <tr>
                          <th>Title</th>
                          <th>Category</th>
                          <th>Created Date</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($dataArticles as $data) {
                          if ($data->is_published == 1) {
                            $color = 'primary';
                            $status = 'Published';
                            $action = 'Unpublish';
                            $url = 'unpublish';
                          } elseif ($data->is_published == 0) {
                            $color = 'warning';
                            $status = 'Pending';
                            $action = 'Publish';
                            $url = 'publish';
                          }
                         ?>                                
                        <tr>
                          <td class="align-middle">
                            <img src="<?= base_url()?>assets/dashboard/img/articles/<?= $data->image?>" class="img-fluid rounded" style="padding-right: 20px;">
                            <a href="<?php echo base_url(); ?>home/single/<?= $data->id?>" target="_blank"><?= $data->title ?></a>
                          </td>
                          <td class="align-middle"><?= $data->category_attr?></td>
                          <td class="align-middle">
                            <?= date("d F Y H:i",strtotime($data->date)) ?>
                          </td>
                          <td class="align-middle">
                            <?php if ($profile['id'] == $this->session->userdata('id')) {
                              echo "<div class='badge badge-".$color."' >".$status."</div>";
                            } else echo '<a class="btn btn-primary" href="'.base_url('home/single/'.$data->id).'"><i class="fa fa-eye" aria-hidden="true"></i></a>' ?>
                          </td>
                        </tr>
                      <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="tab-pane fade" id="jobs2" role="tabpanel" aria-labelledby="jobs-tab2">
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
                          <?php if ($profile['id'] == $this->session->userdata('id')) { 
                            echo '<th class="text-center"></th>'; }
                          ?>
                          <th class="text-center"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($dataJobs as $data) {
                          if ($data->is_published == 1) {
                            $color = 'primary';
                            $status = 'Published';
                            $action = 'Unpublish';
                            $url = 'unpublish';
                          } elseif ($data->is_published == 0) {
                            $color = 'warning';
                            $status = 'Pending';
                            $action = 'Publish';
                            $url = 'publish';
                          }
                         ?>                                
                        <tr>
                          <td class="align-middle"><?= $data->position ?></td>
                          <td class="align-middle"><?= $data->company ?></td>
                          <td class="align-middle"><?= $data->location ?></td>
                          <td class="align-middle"><?= $data->type ?></td>
                          <?php if ($profile['id'] == $this->session->userdata('id')) { ?>
                            <td class="text-center">
                              <div class='badge badge-<?= $color?>' ><?= $status ?></div>
                            </td>
                          <?php } ?>
                          <td class="text-center">
                             <a class="btn btn-primary" href="<?php echo base_url('user/jobs_single/'.$data->id); ?>"><i class="fa fa-eye" aria-hidden="true"></i></a>
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