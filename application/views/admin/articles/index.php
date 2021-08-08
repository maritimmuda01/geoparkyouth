<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_layout/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
        <section class="section">
          <div class="section-header">
            <h1>Articles Management</h1>
            <div class="section-header-breadcrumb">
              <div class=""><a href="<?php echo base_url(); ?>articles/write_articles" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> New</a></div>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>                                 
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Created at</th>
                            <th class="text-center">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $num = 1; foreach ($dataArticles as $data) {
                            if ($data->is_published == 1) {
                              $color = 'primary';
                              $status = 'Published';
                              $action = 'Unpublish Article';
                              $url = 'unpublish';
                            } elseif ($data->is_published == 0) {
                              $color = 'warning';
                              $status = 'Pending';
                              $action = 'Publish Article';
                              $url = 'publish';
                            }
                           ?>                                
                          <tr>
                            <td class="align-middle"><?= $num ?></td>
                            <td class="align-middle">
                              <a href="<?php echo base_url(); ?>articles/single/<?= $data->id?>"><?= $data->title ?></a>
                            </td>
                            <td>
                              <a href="<?php echo base_url(); ?>user/profile/<?= $data->author_id?>">
                                <img alt="image" src="<?php echo base_url(); ?>assets/img/profile/<?= $data->author_image ?>"class="rounded-circle" width="35" height="35" data-toggle="title" title=""> <div class="d-inline-block ml-1"><?= $data->author ?></div>
                              </a>
                            </td>
                            <td class="align-middle"><?= date("d M Y",strtotime($data->date))." ".date("H:i",strtotime($data->time))  ?></td>
                            <td class="text-center">
                              <div class="btn-group">
                                <button type="button" class="btn btn-<?= $color ?> <?= $url ?>" href="<?php echo base_url('admin/articles_'.$url.'/'.$data->id); ?>"><?= $status ?></button>
                                <button type="button" class="btn btn-<?= $color ?> dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                                  <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item <?= $url ?>" href="<?php echo base_url('admin/articles_'.$url.'/'.$data->id); ?>"><?= $action ?></a>
                                  <a class="dropdown-item" href="<?php echo base_url(); ?>articles/single/<?= $data->id?>">Read Article</a>
                                  <a class="dropdown-item" href="<?php echo base_url(); ?>user/profile/<?= $data->author_id?>"> See Author's Profile</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item tombol-hapus" href="<?php echo base_url('admin/articles_delete/'.$data->id); ?>">Delete</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                        <?php $num++; }?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
<?php $this->load->view('_layout/footer'); ?>