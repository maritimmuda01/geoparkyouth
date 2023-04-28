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
        <a class="btn btn-info" href="<?= base_url() ?>account/writeJobs"><i class="fa fa-plus"></i> Add New</a>
      </div>
    </div>

    <div class="section-body">
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
                          <th style="width: 5%;">No.</th>
                          <th>Position</th>
                          <th>Company</th>
                          <th>Location</th>
                          <th class="text-center" style="width: 20%;">Type</th>
                          <th class="text-center" style="width: 20%;">Date Created</th>
                          <th class="text-center" style="width: 5%;">Status</th>
                          <th style="width: 10%;"></th>
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
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<script>
  $(function() {
    showMyJobvacancy();

    //preview
    $('#show_data').on('click', '.item-preview', function() {
      var id = $(this).attr('data');
      $('#myModal').modal('show');
      $('#myModal').find('.modal-title').text('Preview');
      $.ajax({
        type: 'get',
        url: '<?php echo  base_url() ?>jobvacancy/editJobvacancy',
        data: {
          id: id
        },
        async: false,
        dataType: 'json',
        success: function(data) {
          console.log(data);
          $('.modal-title').text(data.job_position + ' at ' + data.job_company);
          $('.modal-body').html(data.description);
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
          title: 'Delete Job Vacancy?',
          icon: 'error',
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            $.ajax({
              type: 'get',
              async: false,
              url: '<?php echo base_url() ?>jobvacancy/deleteJobvacancy',
              data: {
                id: id
              },
              dataType: 'json',
              success: function(response) {
                swal('Deleted!', {
                  icon: 'success',
                });
                showMyJobvacancy();
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

    //unpublish
    $('#show_data').on('click', '.item-unpublish', function() {
      var id = $(this).attr('data');
      swal({
          title: 'Unpublish?',
          icon: 'info',
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            $.ajax({
              type: 'get',
              async: false,
              url: '<?php echo base_url() ?>jobvacancy/unpublishJobvacancy',
              data: {
                id: id
              },
              dataType: 'json',
              success: function(response) {
                swal('Unpublished!', {
                  icon: 'success',
                });
                showMyJobvacancy();
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
    function showMyJobvacancy() {
      $.ajax({
        url: '<?php echo base_url() ?>jobvacancy/showAllJobvacancyByUser',
        async: false,
        dataType: 'json',
        success: function(data) {
          // console.log(data);
          var html = '';
          var i;
          for (i = 0; i < data.length; i++) {
            html += '<tr>' +
              '<td class="">' + (i + 1) + '</td>' +
              '<td class="">' + data[i].job_position + '</td>' +
              '<td class="">' + data[i].job_company + '</td>' +
              '<td class="">' + data[i].location + '</td>' +
              '<td class="text-center">' + data[i].jobtype_name + '</td>' +
              '<td class="text-center">' + data[i].time_created + '</td>' +
              '<td class="text-center is_published' + data[i].is_published + '">' +
              '<td class="text-center">' +
              '<button class="btn btn-secondary item-preview mr-2" data="' + data[i].id_job + '"><i class="fa fa-eye" aria-hidden="true"></i></button>' +
              '<button class="btn btn-danger item-delete" data="' + data[i].id_job + '"><i class="fa fa-trash" aria-hidden="true"></i></button>' +
              '</td>' +
              '</tr>';
          }
          MyTable.fnDestroy();
          $('#show_data').html(html);
          $('.is_published0').append('<div class="badge badge-warning">Pending</div>');
          $('.is_published1').append('<div class="badge badge-primary">Published</div>');
          refresh();

        },
        error: function() {
          alert('Error loading data');
        }
      });
    }
  });

  var MyTable = $('#myTable').dataTable({
    "order": [
      [2, "desc"]
    ],
  });

  window.onload = function() {
    showMyJobvacancy();
  }

  function refresh() {
    MyTable = $('#myTable').dataTable({
      "order": [
        [2, "desc"]
      ],
    });
  }
</script>