<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('dist/_partials/header');

?>

<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1> <a href="<?= base_url('region') ?>" class="mr-2"><i class="fa fa-arrow-left" aria-hidden="true"></i></a> <?= $title ?></h1>
      <div class="section-header-breadcrumb">
        <button class="btn btn-info" id="btnAdd"><i class="fa fa-plus"></i> Add New</button>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Region : <?= $thisRegion['region_name'] ?></h2>
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
                      <th style="width: 20%;">ISO</th>
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
          <img src="" class="rounded mx-auto d-block w-50 logo">
          <div class="form-group has-error">
            <label>Country Name</label>
            <input type="text" class="form-control" name="name" tabindex="1" required="">
          </div>
          <div class="form-group has-error">
            <label>ISO</label>
            <input type="text" class="form-control" name="iso" tabindex="2" required="">
          </div>
          <div class="form-group">
            <label>Region</label>
            <select class="form-control" name="region" id="region">
              <?php foreach ($dataRegion as $region) { ?>
                <option value="<?= $region->id_region ?>"><?= $region->region_name ?></option>
              <?php } ?>
            </select>
          </div>
          <div id="tab-1" class="type-content">
            <div class="form-group row mb-4">
              <label class="col-form-label col-12 col-md-12 col-lg-12">Description</label>
              <div class="col-sm-12 col-md-12">
                <textarea class="summernote" id="desc" name="desc"></textarea>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>Logo</label>
            <input type="file" name="logo" class="form-control">
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
    showAllCountry();

    //add New
    $('#btnAdd').click(function() {
      $("#myForm").trigger('reset');
      $('#myModal').modal('show');
      $('#myModal').find('.modal-title').text('Add New Country');
      $('.logo').attr("src", "");
      $('#region').val('<?= $id ?>');
      $('#myForm').attr('action', '<?php echo base_url() ?>country/addCountry/<?= $id ?>');
      $('.note-editable ').html("");
    });

    $('#btnSave').click(function() {
      var url = $('#myForm').attr('action');
      var data = $('#myForm').serialize();
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
            showAllCountry();
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
      $('#myModal').find('.modal-title').text('Edit Country');
      $('#myForm').attr('action', '<?php echo base_url() ?>country/updateCountry');
      $.ajax({
        type: 'get',
        url: '<?php echo  base_url() ?>country/editCountry',
        data: {
          id: id
        },
        async: false,
        dataType: 'json',
        success: function(data) {
          $('input[name=name]').val(data.nicename);
          $('input[name=iso]').val(data.iso);
          $('#region').val(data.region_id);
          $('input[name=Id]').val(data.id_country);
          $('.logo').attr("src", "<?php echo base_url(); ?>/images/country/" + data.logo);
          $('textarea').html('<p>' + data.country_desc + '</p>');
          $('.note-editable ').html('<p>' + data.country_desc + '</p>');
          $('.note-editable ').addClass('mt-2');

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
          title: 'Delete Country?',
          icon: 'error',
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            $.ajax({
              type: 'get',
              async: false,
              url: '<?php echo base_url() ?>country/deleteCountry',
              data: {
                id: id
              },
              dataType: 'json',
              success: function(response) {
                swal('Deleted!', {
                  icon: 'success',
                });
                showAllCountry();
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
    function showAllCountry() {
      $.ajax({
        url: '<?php echo base_url() ?>country/showAllCountryByRegionId/<?= $id ?>',
        async: false,
        dataType: 'json',
        success: function(data) {
          console.log(data);
          var html = '';
          var i;
          for (i = 0; i < data.length; i++) {
            html += '<tr>' +
              '<td class="text-center">' + (i + 1) + '</td>' +
              '<td>' + data[i].id_country + '</td>' +
              '<td class=""><img class="mr-4" alt="image" src="<?php echo base_url(); ?>/images/country/' + data[i].logo + '" style="border: .5px solid #f1f1f1" height="35">' + data[i].nicename + '</td>' +
              '<td>' + data[i].iso + '</td>' +
              '<td class="text-center">' +
              '<a class="btn btn-info mr-2" href="<?= base_url() ?>geoparks/index/' + data[i].id_country + '"><i class="fas fa-globe" aria-hidden="true"></i></a>' +
              '<button class="btn btn-warning item-edit" data="' + data[i].id_country + '"><i class="far fa-edit" aria-hidden="true"></i></button>' +
              '<button class="btn btn-danger item-delete" style="margin-left:10px" data="' + data[i].id_country + '"><i class="fa fa-trash" aria-hidden="true"></i></button>' +
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
    showAllCountry();
  }

  function refresh() {
    MyTable = $('#myTable').dataTable();
  }
</script>