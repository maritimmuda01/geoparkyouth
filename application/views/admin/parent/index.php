<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><?= $title ?></h1>
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
            <label>Parent Name</label>
            <input type="text" class="form-control" name="name" tabindex="1" required="">
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
    showAllParent();

    //add New
    $('#btnAdd').click(function() {
      $("#myForm").trigger('reset');
      $('#myModal').modal('show');
      $('#myModal').find('.modal-title').text('Add New Page Parent');
      $('#myForm').attr('action', '<?php echo base_url() ?>pageparent/addPageparent');
    });

    $('#btnSave').click(function() {
      var url = $('#myForm').attr('action');
      var data = $('#myForm').serialize();
      //validate form
      var parentName = $('input[name=name]');
      var result = '';
      if (parentName.val() == '') {
        parentName.parent().addClass('was-validated');
      } else {
        parentName.parent().parent().removeClass('was-validated');
        result += 1;
      }

      if (result == '1') {
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
              showAllParent();
            } else {
              swal('Failed', 'Error occured. Please try again!', 'error');
            }
          },
          error: function() {
            swal('Failed', 'Error occured. Please try again!', 'error');
          }
        });
      }
    });

    //edit
    $('#show_data').on('click', '.item-edit', function() {
      var id = $(this).attr('data');
      $('#myModal').modal('show');
      $('#myModal').find('.modal-title').text('Edit Parent');
      $('#myForm').attr('action', '<?php echo base_url() ?>pageparent/updatePageparent');
      $.ajax({
        type: 'get',
        url: '<?php echo  base_url() ?>pageparent/editPageparent',
        data: {
          id: id
        },
        async: false,
        dataType: 'json',
        success: function(data) {
          $('input[name=name]').val(data.pageparent_name);
          $('input[name=Id]').val(data.id_pageparent);
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
          title: 'Delete Parent?',
          icon: 'error',
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            $.ajax({
              type: 'get',
              async: false,
              url: '<?php echo base_url() ?>pageparent/deletePageparent',
              data: {
                id: id
              },
              dataType: 'json',
              success: function(response) {
                swal('Deleted!', {
                  icon: 'success',
                });
                showAllParent();
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
    function showAllParent() {
      $.ajax({
        url: '<?php echo base_url() ?>pageparent/showAllPageparent',
        async: false,
        dataType: 'json',
        success: function(data) {
          // console.log(data);
          var html = '';
          var i;
          for (i = 0; i < data.length; i++) {
            html += '<tr>' +
              '<td class="">' + (i + 1) + '</td>' +
              '<td class="">' + data[i].id_pageparent + '</td>' +
              '<td class="">' + data[i].pageparent_name + '</td>' +
              '<td class="text-center">' +
              '<a class="btn btn-info" href="<?= base_url() ?>pages/index/' + data[i].id_pageparent + '"><i class="fas fa-globe" aria-hidden="true"></i></a>' +
              '<button class="btn btn-warning item-edit ml-2" data="' + data[i].id_pageparent + '"><i class="far fa-edit" aria-hidden="true"></i></button>' +
              '<button class="btn btn-danger item-delete ml-2" style="margin-left:10px" data="' + data[i].id_pageparent + '"><i class="fa fa-trash" aria-hidden="true"></i></button>' +
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
    showAllParent();
  }

  function refresh() {
    MyTable = $('#myTable').dataTable();
  }
</script>