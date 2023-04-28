<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><a href="<?= base_url('pageparent') ?>" class="mr-2"><i class="fa fa-arrow-left" aria-hidden="true"></i></a> <?= $title ?></h1>
      <div class="section-header-breadcrumb">
        <button class="btn btn-info" id="btnAdd"><i class="fa fa-plus"></i> Add New</button>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Page Parent : <?= $thisParent['pageparent_name'] ?></h2>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <div class="table-responsive">
                    <table id="myTable" class="display table table-striped">
                      <thead>
                        <tr>
                          <th style="width: 5%;">Idx.</th>
                          <th style="width: 10%;">ID</th>
                          <th>Name</th>
                          <th class="text-center" style="width: 20%;">Type</th>
                          <th style="width: 30%;"></th>
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
      </div>
    </div>
  </section>
</div>
<?php $this->load->view('dist/_partials/footer'); ?>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg" style="width:98%" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card-body">
          <form id="myForm" action="#" method="post" class="needs-validation" novalidate="" onsubmit={this.saveAndContinue}>
            <div class="form-group row mb-4">
              <label class="col-form-label col-12 col-md-12 col-lg-12">Title</label>
              <div class="col-sm-12 col-md-12">
                <input type="hidden" name="Id">
                <input type="hidden" name="parent_id">
                <input type="text" class="form-control" name="title">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="inputPassword4">Type</label>
                <select id="type" class="form-control" name="type">
                  <option value="1">Page</option>
                  <option value="2">Link</option>
                </select>
              </div>
            </div>

            <div class="form-group row mb-4 type-content" id="tab-2">
              <label class="col-form-label col-12 col-md-12 col-lg-12">Link</label>
              <div class="col-sm-12 col-md-12">
                <input type="text" class="form-control" name="link">
              </div>
            </div>

            <div id="tab-1" class="type-content">
              <div class="form-group row mb-4">
                <label class="col-form-label col-12 col-md-12 col-lg-12">Content</label>
                <div class="col-sm-12 col-md-12">
                  <textarea class="summernote" id="content" name="content"></textarea>
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label col-12 col-md-12 col-lg-12">Background Image</label>
                <div class="col-sm-12 col-md-12">
                  <input type="file" name="image" class="form-control choose w-100" accept="image/*">
                  <img src="" id="preview" class="rounded mx-auto d-block w-100 logo mt-2">
                </div>
              </div>
            </div>
          </form>
        </div>
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
    showAllPages();

    //add New
    $('#btnAdd').click(function() {
      $("#myForm").trigger('reset');
      $('#myModal').modal('show');
      $('#myModal').find('.modal-title').text('Add New Pages');
      $('#myForm').attr('action', '<?php echo base_url() ?>pages/addPages/<?= $id ?>');
      $('#preview').attr("src", "");
      $('#preview-side').attr("src", "");
      $('.note-editable ').html("");
    });

    $('#btnSave').click(function() {
      var url = $('#myForm').attr('action');
      var data = $('#myForm').serialize();
      //validate form
      var name = $('input[name=name]');
      var result = '';
      if (name.val() == '') {
        name.parent().addClass('was-validated');
      } else {
        name.parent().parent().removeClass('was-validated');
        result += 1;
      }

      if (result == '1') {
        var formData = new FormData($('#myForm')[0]);
        $.ajax({
          type: 'post',
          url: url,
          data: formData,
          contentType: false,
          processData: false,
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
              showAllPages();
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
      $('#myModal').find('.modal-title').text('Edit Pages');
      $('#myForm').attr('action', '<?php echo base_url() ?>pages/updatePages');
      $.ajax({
        type: 'get',
        url: '<?php echo  base_url() ?>pages/editPages',
        data: {
          id: id
        },
        async: false,
        dataType: 'json',
        success: function(data) {
          $('input[name=title]').val(data.title);
          $('#type').val(data.type);
          $('input[name=Id]').val(data.id_pages);
          $('input[name=link]').val(data.link);
          if (data.type == 2) {
            $('#tab-1').hide();
            $('#tab-2').show();
          }
          $('input[name=parent_id]').val(data.parent_id);
          $('textarea').html('<p>' + data.content + '</p>');
          $('.note-editable ').html('<p>' + data.content + '</p>');
          $('.note-editable ').addClass('mt-2');
          $('#preview').attr("src", "<?php echo base_url(); ?>/images/front-carousel/" + data.image);
          $('#preview-side').attr("src", "<?php echo base_url(); ?>/images/front-carousel/" + data.side_image);
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
          title: 'Delete Page?',
          icon: 'error',
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            $.ajax({
              type: 'get',
              async: false,
              url: '<?php echo base_url() ?>pages/deletePages',
              data: {
                id: id
              },
              dataType: 'json',
              success: function(response) {
                swal('Deleted!', {
                  icon: 'success',
                });
                showAllPages();
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

    //Up
    $('#show_data').on('click', '.item-up', function() {
      var id = $(this).attr('data');
      $.ajax({
        type: 'get',
        async: false,
        url: '<?php echo base_url() ?>pages/upPages',
        data: {
          id: id
        },
        dataType: 'json',
        success: function(response) {
          showAllPages();
        },
        error: function() {
          alert: ('error');
        }
      })
    });

    //Down
    $('#show_data').on('click', '.item-down', function() {
      var id = $(this).attr('data');
      $.ajax({
        type: 'get',
        async: false,
        url: '<?php echo base_url() ?>pages/downPages',
        data: {
          id: id
        },
        dataType: 'json',
        success: function(response) {
          showAllPages();
        },
        error: function() {
          alert: ('error');
        }
      })
    });

    //function
    function showAllPages() {
      $.ajax({
        url: '<?php echo base_url() ?>pages/showAllPagesByPageparentId/<?= $id ?>',
        async: false,
        dataType: 'json',
        success: function(data) {
          // console.log(data);
          var html = '';
          var i;
          for (i = 0; i < data.length; i++) {

            switch (data[i].type) {
              case '1':
                var color = "primary";
                var type = "Page";
                break;

              case '2':
                var color = "warning";
                var type = "Link"
                break;
            }

            html += '<tr>' +
              '<td class="">' + data[i].idx_pages + '</td>' +
              '<td class="">' + data[i].id_pages + '</td>' +
              '<td class="">' + data[i].title + '</td>' +
              '<td class="text-center"><span class="badge badge-pill badge-' + color + '">' + type + '</span></td>' +

              '<td class="text-center">' +
              '<button class="btn btn-primary item-up mr-2" data="' + data[i].id_pages + '"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>' +
              '<button class="btn btn-info item-down mr-5" data="' + data[i].id_pages + '"><i class="fa fa-arrow-down" aria-hidden="true"></i></button>' +

              '<a class="btn btn-secondary mr-2" href="<?= base_url() ?>pageimage/index/' + data[i].id_pages + '"><i class="fa fa-camera-retro" aria-hidden="true"></i></a>' +
              '<button class="btn btn-warning item-edit mr-2" data="' + data[i].id_pages + '"><i class="far fa-edit" aria-hidden="true"></i></button>' +
              '<button class="btn btn-danger item-delete mr-2" data="' + data[i].id_pages + '"><i class="fa fa-trash" aria-hidden="true"></i></button>' +
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
    showAllPages();
  }

  function refresh() {
    MyTable = $('#myTable').dataTable();
  }

  //hide all tabs first
  $('.type-content').hide();
  //show the first tab content
  $('#tab-1').show();

  $('#type').change(function() {
    dropdown = $('#type').val();
    //first hide all tabs again when a new option is selected
    $('.type-content').hide();
    //then show the tab content of whatever option value was selected
    $('#' + "tab-" + dropdown).show();
  });

  const readURL = (input) => {
    if (input.files && input.files[0]) {
      const reader = new FileReader()
      reader.onload = (e) => {
        $('#preview').attr('src', e.target.result)
      }
      reader.readAsDataURL(input.files[0])
    }
  }
  $('.choose').on('change', function() {
    readURL(this)
    let i
    if ($(this).val().lastIndexOf('\\')) {
      i = $(this).val().lastIndexOf('\\') + 1
    } else {
      i = $(this).val().lastIndexOf('/') + 1
    }
    const fileName = $(this).val().slice(i)
  })
  //
  const readURLSide = (input) => {
    if (input.files && input.files[0]) {
      const reader = new FileReader()
      reader.onload = (e) => {
        $('#preview-side').attr('src', e.target.result)
      }
      reader.readAsDataURL(input.files[0])
    }
  }
  $('.choose-side').on('change', function() {
    readURLSide(this)
    let i
    if ($(this).val().lastIndexOf('\\')) {
      i = $(this).val().lastIndexOf('\\') + 1
    } else {
      i = $(this).val().lastIndexOf('/') + 1
    }
    const fileName = $(this).val().slice(i)
  })
</script>