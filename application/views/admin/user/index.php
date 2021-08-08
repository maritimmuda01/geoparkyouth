<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_layout/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
        <section class="section">
          <div class="section-header">
            <h1>User Management</h1>
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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Date of Birth</th>
                            <th>City</th>
                            <th>Country</th>
                            <th class="text-center">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $num = 1; foreach ($dataUser as $data) {
                            if ($data->role_id == 1) {
                              $color = 'primary';
                              $role = 'Admin';
                              $action = 'Set Role to User';
                              $url = 'role_to_user';
                            }elseif ($data->role_id == 2) {
                              $color = 'warning';
                              $role = 'User';
                              $action = 'Set Role to Admin';
                              $url = 'role_to_admin';
                            }
                           ?>                                
                          <tr>
                            <td class="align-middle"><?= $num ?></td>
                            <td>
                              <a href="<?php echo base_url(); ?>user/profile/<?= $data->id?>">
                                <img alt="image" src="<?php echo base_url(); ?>assets/img/profile/<?= $data->profile_picture ?>"class="rounded-circle" width="35" data-toggle="title" title=""> <div class="d-inline-block ml-1"><?= $data->name ?></div>
                              </a>
                            </td>
                            <td class="align-middle"><?= $data->email ?></td>
                            <td class="align-middle"><?= date("d M Y",strtotime($data->dob)) ?></td>
                            <td class="align-middle"><?= $data->city?></td>
                            <td class="align-middle"><?= $data->country?> </td>
                            <td class="text-center">
                              <?php if ($data->id != $user['id']) { ?>
                              <div class="btn-group">
                                <button type="button" class="btn btn-<?= $color ?> role_change" href="<?php echo base_url('admin/user_'.$url.'/'.$data->id); ?> "><?= $role ?></button>
                                <button type="button" class="btn btn-<?= $color ?> dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                                  <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item role_change" href="<?php echo base_url('admin/user_'.$url.'/'.$data->id); ?>"><?= $action ?></a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item tombol-hapus" href="<?php echo base_url('admin/user_delete/'.$data->id); ?>">Delete Account</a>
                                </div>
                              <?php } ?>
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