<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><?= $title ?></h1>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="myTable">
                  <thead>
                    <tr>
                      <th width="3%">No.</th>
                      <th width="20%">Name</th>
                      <th width="5%">Gender</th>
                      <th class="text-center">DoB</th>
                      <th></th>
                      <th>Geopark Name</th>
                      <th class="text-center" width="10%">Status</th>
                      <th style="max-width: 20%"></th>
                    </tr>
                  </thead>
                  <tbody id="show_data">
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
<?php $this->load->view('dist/_partials/footer'); ?>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="myForm" action="#" method="post" class="needs-validation" novalidate="" onsubmit={this.saveAndContinue}>
          <input type="hidden" name="Id" value="0">
          <div class="form-group has-error">
            <label>Name</label>
            <input type="text" class="form-control-plaintext" name="name" tabindex="1" required="" readonly>
          </div>
          <div class="form-group">
            <label>Role</label>
            <select class="form-control" name="role" id="role">
              <?php foreach ($dataRole as $role) {
                if ($role->id != 1) { ?>
                  <option value="<?= $role->id ?>"><?= $role->role_name ?></option>
                <?php } ?>
              <?php } ?>
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" id="btnSave" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>

<?php if ($profile->role_id == 1) {
  $url = 'user/showAllActiveUser';
} else if ($profile->role_id == 3) {
  $url = 'user/showAllActiveUserByCountry/' . $profile->id_country;
} ?>

<script>
  $(function() {
    showAllUser();

    //add New
    $('#btnAdd').click(function() {
      $("#myForm").trigger('reset');
      $('#myModal').modal('show');
      $('#myModal').find('.modal-title').text('Add New User');
      $('#myForm').attr('action', '<?php echo base_url() ?>user/addUser');
    });

    $('#btnSave').click(function() {
      var url = $('#myForm').attr('action');
      var data = $('#myForm').serialize();

      $.ajax({
        type: 'post',
        url: url,
        data: data,
        async: false,
        dataType: 'json',
        success: function(response) {
          if (response.success) {
            $('#myModal').modal('hide');
            $('#myForm')[0].reset();
            if (response.type == 'add') {
              var type = 'added';
            } else if (response.type == 'edit') {
              var type = 'edited';
            }
            swal('Done', 'Successfully ' + type + '!', 'success');
            showAllUser();
          } else {
            swal('Failed', 'Error occured. Please try again!', 'error');
          }
        },
        error: function() {
          swal('Failed', 'Error occured. Please try again!', 'error');
        }
      });

    });

    //edit
    $('#show_data').on('click', '.item-edit', function() {
      var id = $(this).attr('data');
      $('#myModal').modal('show');
      $('#myModal').find('.modal-title').text('Edit User');
      $('#myForm').attr('action', '<?php echo base_url() ?>user/updateUser');
      $.ajax({
        type: 'get',
        url: '<?php echo  base_url() ?>user/editUser',
        data: {
          id: id
        },
        async: false,
        dataType: 'json',
        success: function(data) {
          $('input[name=name]').val(data.name);
          $('#role').val(data.role_id);
          $('input[name=Id]').val(data.id_user);
        },
        error: function() {
          swal('Failed', 'Error occured. Please try again!', 'error');
        }
      });

    });

    //activate
    $('#show_data').on('click', '.item-halt', function() {
      var id = $(this).attr('data');
      swal({
          title: 'Halt User?',
          icon: 'info',
          buttons: true,
          dangerMode: false,
        })
        .then((willDelete) => {
          if (willDelete) {
            $.ajax({
              type: 'ajax',
              method: 'get',
              async: false,
              url: '<?php echo base_url() ?>user/inactivateUser',
              data: {
                id: id
              },
              dataType: 'json',
              success: function(response) {
                swal('Halted!', {
                  icon: 'success',
                });
                showAllUser();
              },
              error: function() {
                alert: ('error');
              }
            })
          } else {
            swal('Cancelled', {
              icon: 'success',
            });
          }
        });


    });

    //delete
    $('#show_data').on('click', '.item-delete', function() {
      var id = $(this).attr('data');
      swal({
          title: 'Delete User?',
          icon: 'error',
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            $.ajax({
              type: 'get',
              async: false,
              url: '<?php echo base_url() ?>user/deleteUser',
              data: {
                id: id
              },
              dataType: 'json',
              success: function(response) {
                swal('Deleted!', {
                  icon: 'success',
                });
                showAllUser();
              },
              error: function() {
                alert: ('error');
              }
            })
          } else {
            swal('Cancelled', {
              icon: 'success',
            });
          }
        });


    });

    //function
    function showAllUser() {
      $.ajax({
        url: '<?php echo base_url() . $url ?>',
        async: false,
        dataType: 'json',
        success: function(data) {
          console.log(data);
          var html = '';
          var i;
          for (i = 0; i < data.length; i++) {

            var dob = new Date(data[i].dob).getFullYear();
            var thisYear = new Date().getFullYear();
            var myDoB = thisYear - dob;

            if (myDoB < 17 || myDoB > 35) {
              var color = 'danger';
            } else {
              var color = 'info';
            }

            html += '<tr>' +
              '<td>' + (i + 1) + '</td>' +
              '<td><img alt="image" src="<?php echo base_url(); ?>images/profile/' + data[i].profile_picture + '" class="rounded-circle mr-4" width="30">' + data[i].name + '</td>' +
              '<td class="">' + data[i].gender + '</td>' +
              '<td class="text-center"><div class="badge badge-' + color + '">' + data[i].dob + '</div></td>' +
              '<td class="text-center"><img alt="image" src="<?php echo base_url(); ?>images/flags/' + data[i].iso.toLowerCase() + '.svg" style="border: .5px solid #f1f1f1" height="35"></td>' +
              '<td class="">' + data[i].geoname + ', ' + data[i].nicename + '</td>' +
              '<td class="text-center"><div class="badge badge-' + data[i].color + '">' + data[i].role_name + '</div></td>' +
              '<td class="text-center">' +
              '<button class="btn btn-danger item-halt control-' + data[i].role_id + '" data="' + data[i].id_user + '">Halt</button>' +
              '<button class="ml-2 btn btn-warning item-edit control-' + data[i].role_id + ' " data="' + data[i].id_user + '"><i class="far fa-edit" aria-hidden="true"></i></button>' +
              '</td>' +
              '</tr>';
          }
          MyTable.fnDestroy();
          $('#show_data').html(html);
          $('.control-1').remove();
          refresh();

        },
        error: function() {
          alert('Error loading data');
        }
      });
    }
  });

  var MyTable = $('#myTable').dataTable({
    "order": [],
  });

  window.onload = function() {
    showAllUser();
  }

  function refresh() {
    MyTable = $('#myTable').dataTable();
  }
</script>