<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1> <?= $title ?></h1>
      <div class="section-header-breadcrumb">
        <button class="btn btn-info" id="btnAdd"><i class="fa fa-plus"></i> Add New</button>
      </div>
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
                      <th style="width: 5%;">No.</th>
                      <th style="width: 10%;">ID</th>
                      <th>Name</th>
                      <th style="width: 20%;">E-mail</th>
                      <th>Website</th>
                      <th style="width: 15%;"></th>
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
  <div class="modal-dialog modal-lg" style="width:90%" role="document">
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
            <label>Region Name</label>
            <input type="text" class="form-control" name="name" tabindex="1" required="">
          </div>
          <div class="form-group has-error">
            <label>Abbreviation</label>
            <input type="text" class="form-control" name="abbr" tabindex="1" required="">
          </div>
          <div class="form-group has-error">
            <label>Email</label>
            <input type="email" class="form-control" name="email" tabindex="1" required="">
          </div>
          <div class="form-group has-error">
            <label>Website</label>
            <input type="text" class="form-control" name="website" tabindex="1" required="">
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

<script>
  $(function() {
    showAllRegion();

    //add New
    $('#btnAdd').click(function() {
      $("#myForm").trigger('reset');
      $('#myModal').modal('show');
      $('#myModal').find('.modal-title').text('Add New Region');
      $('#myForm').attr('action', '<?php echo base_url() ?>region/addRegion');
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
            showAllRegion();
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
      $('#myModal').find('.modal-title').text('Edit Region');
      $('#myForm').attr('action', '<?php echo base_url() ?>region/updateRegion');
      $.ajax({
        type: 'get',
        url: '<?php echo  base_url() ?>region/editRegion',
        data: {
          id: id
        },
        async: false,
        dataType: 'json',
        success: function(data) {
          $('input[name=name]').val(data.region_name);
          $('input[name=abbr]').val(data.region_abbr);
          $('input[name=email]').val(data.region_email);
          $('input[name=website]').val(data.region_website);
          $('input[name=Id]').val(data.id_region);
        },
        error: function() {
          swal('Failed', 'Error occured. Please try again!', 'error');
        }
      });

    });

    //delete
    $('#show_data').on('click', '.item-delete', function() {
      var id = $(this).attr('data');
      swal({
          title: 'Delete Region?',
          icon: 'error',
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            $.ajax({
              type: 'get',
              async: false,
              url: '<?php echo base_url() ?>region/deleteRegion',
              data: {
                id: id
              },
              dataType: 'json',
              success: function(response) {
                swal('Deleted!', {
                  icon: 'success',
                });
                showAllRegion();
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
    function showAllRegion() {
      $.ajax({
        url: '<?php echo base_url() ?>region/showAllRegion',
        async: false,
        dataType: 'json',
        success: function(data) {
          // console.log(data);
          var html = '';
          var i;
          for (i = 0; i < data.length; i++) {
            html += '<tr>' +
              '<td class="">' + (i + 1) + '</td>' +
              '<td class="">' + data[i].id_region + '</td>' +
              '<td class="">' + data[i].region_name + '</td>' +
              '<td class="">' + data[i].region_email + '</td>' +
              '<td class="">' + data[i].region_website + '</td>' +
              '<td class="text-center">' +
              '<a class="btn btn-info ml-2" href="<?= base_url() ?>country/index/' + data[i].id_region + '"><i class="fas fa-globe" aria-hidden="true"></i></a>' +
              '<button class="btn btn-warning item-edit ml-2" data="' + data[i].id_region + '"><i class="far fa-edit" aria-hidden="true"></i></button>' +
              '<button class="btn btn-danger item-delete ml-2" data="' + data[i].id_region + '"><i class="fa fa-trash" aria-hidden="true"></i></button>' +
              '</td>' +
              '</tr>';
          }
          MyTable.fnDestroy();
          $('#show_data').html(html);
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
    showAllRegion();
  }

  function refresh() {
    MyTable = $('#myTable').dataTable();
  }
</script>