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
                    <h4>User Management</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-row">
                      <div class="form-group col-lg-8">
                        <label class="form-label">Filter</label>
                        <div class="selectgroup selectgroup-pills panel-body " id="gender">
                          <div class="selectgroup-item">
                            <label class="selectgroup-item">
                              <input type="checkbox" value="M" class="selectgroup-input filter-checkbox">
                              <span class="selectgroup-button"><i class="fas fa-mars"></i> Male</span>
                            </label>
                            <label class="selectgroup-item">
                              <input type="checkbox" value="F" class="selectgroup-input filter-checkbox">
                              <span class="selectgroup-button"><i class="fas fa-venus"></i> Female</span>
                            </label>
                            <label class="selectgroup-item">
                              <input type="checkbox" value="O" class="selectgroup-input filter-checkbox">
                              <span class="selectgroup-button"><i class="fas fa-genderless"></i> Other</span>
                            </label>
                          </div>
                        </div>
                      </div>                        
                      <div class="form-group col-lg-2">
                        <label class="form-label">Country</label>
                        <select class="form-control" id="dropdown1">
                          <option value="">All</option>
                          <?php foreach ($dataCountry as $data) { ?>
                            <option value='$data->iso'><?=$data->nicename?></option>
                          <?php } ?>
                        </select>
                      </div>
                      <div class="form-group col-lg-2">
                        <label class="form-label">Show Role</label>
                        <select class="form-control" id="dropdown2">
                          <option value="">All Role</option>
                          <option value="1">Admin</option>
                          <option value="2">User</option>
                        </select>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>                                 
                          <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Country</th>
                            <th>Country Code</th>
                            <th>Role ID</th>
                            <th class="text-center" style="width: 15%">Role</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($dataUser as $data) {
                            if ($data->role_id == 1) {
                              $color = 'primary';
                              $role = 'Admin';
                              $url = 'role_to_user';
                            }elseif ($data->role_id == 2) {
                              $color = 'warning';
                              $role = 'User';
                              $url = 'role_to_admin';
                            }
                           ?>                                
                          <tr>
                            <td>
                              <a href="<?php echo base_url(); ?>user/profile/<?= $data->id?>">
                                <img alt="image" src="<?php echo base_url(); ?>assets/dashboard/img/profile/<?= $data->profile_picture ?>" class="rounded-circle" width="35" height="35" data-toggle="title" title=""> <div class="d-inline-block ml-1"><?= $data->name ?></div>
                              </a>
                            </td>
                            <td class="align-middle"><?= $data->email ?></td>
                            <td><?= $data->gender?></td>
                            <td class="">
                              <img alt="image" src="https://hatscripts.github.io/circle-flags/flags/<?= strtolower($data->country) ?>.svg" width="35" height="35" data-toggle="title" title=""> <div class="d-inline-block ml-1"></div>
                                <?= $data->nicename ?> </td>
                            <td class=""><?= $data->country ?> </td>
                            <td><?= $data->role_id ?></td>
                            <td class="text-center">
                              <?php if ($data->id != $user['id']) { ?>
                              <div class="btn-group">
                                <button type="button" class="btn btn-<?= $color ?> role_change" href="<?php echo base_url('admin/user_'.$url.'/'.$data->id); ?> "><?= $role ?></button>
                                <button type="button" class="btn btn-<?= $color ?> dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                                  <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item role_change" href="<?php echo base_url('admin/user_'.$url.'/'.$data->id); ?>">Change Role</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item has-icon text-danger delete-confirm" href="<?php echo base_url('admin/user_delete/'.$data->id); ?>"><i class="fa fa-trash"></i> Delete Account</a>
                                </div>
                              <?php } ?>
                            </td>
                          </tr>
                        <?php }?>
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