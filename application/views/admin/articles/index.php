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
                    <h4>Articles Management</h4>
                    <div class="card-header-action">
                      <a href="<?= base_url() ?>user/write_articles" class="btn btn-info">
                        <i class="far fa-edit"></i> Write New
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="form-row">
                          <div class="form-group col-lg-8">
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
                          <div class="form-group col-lg-2">
                            <label class="form-label">Author's Country</label>
                            <select class="form-control" id="country">
                              <option value="">All</option>
                              <?php foreach ($dataCountry as $data) { 
                                echo "<option value='$data->iso'>$data->nicename</option>";
                               } ?>
                            </select>
                          </div>
                          <div class="form-group col-lg-2">
                            <label class="form-label">Show Status</label>
                            <select class="form-control" id="dropdown">
                              <option value="">All</option>
                              <option value="Published">Published</option>
                              <option value="Pending">Pending</option>
                            </select>
                          </div>
                        </div>
                        <div class="table-responsive">
                          <table id="example" class="display table table-striped">
                            <thead>                                 
                              <tr>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Category</th>
                                <th>Date</th>
                                <th class="text-center">Status</th>
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
                                  <a href="<?php echo base_url(); ?>articles/single/<?= $data->id?>"><?= $data->title ?></a>
                                </td>
                                <td class="align-middle">
                                  <a href="<?php echo base_url(); ?>user/profile/<?= $data->author_id?>">
                                    <div class="d-inline-block ml-1"><?= $data->author ?></div>
                                  </a>
                                </td>
                                <td class="align-middle"><?= $data->category_attr?></td>
                                <td class="align-middle"><span style="display: none"><?= date("Y-m-d",strtotime($data->date))." ".date("H:i",strtotime($data->time))  ?></span><?= date("d F Y",strtotime($data->date))." ".date("H:i",strtotime($data->time))  ?>
                                </td>
                                <td class="text-center">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-<?= $color ?> <?= $url ?>" href="<?php echo base_url('admin/articles_'.$url.'/'.$data->id); ?>"><?= $status ?></button>
                                    <button type="button" class="btn btn-<?= $color ?> dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                                      <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu">
                                      <a class="dropdown-item <?= $url ?>" href="<?php echo base_url('admin/articles_'.$url.'/'.$data->id); ?>"><?= $action ?></a>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item has-icon text-danger delete-confirm" href="<?php echo base_url('admin/articles_delete/'.$data->id); ?>"><i class="fa fa-trash"></i> Delete</a>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <?= $data->author_country; ?>
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