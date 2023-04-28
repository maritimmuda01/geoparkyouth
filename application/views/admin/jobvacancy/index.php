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
                          <th>Author</th>
                          <th class="text-center">Type</th>
                          <th class="text-center">Date Created</th>
                          <th style="width: 20%;"></th>
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<?php if ($profile->role_id == 1) {
  $url = 'jobvacancy/showAllPublishedJobvacancy/';
} else if ($profile->role_id == 3) {
  $url = 'jobvacancy/showAllPublishedJobvacancyByCountry/' . $profile->id_country;
} ?>

<script>
  $(function() {
    showAllJobvacancy();

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
                showAllJobvacancy();
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
                showAllJobvacancy();
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
    function showAllJobvacancy() {
      $.ajax({
        url: '<?php echo base_url() . $url ?>',
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
              '<td class="">' + data[i].name + '</td>' +
              '<td class="text-center">' + data[i].jobtype_name + '</td>' +
              '<td class="text-center">' + data[i].time_created + '</td>' +
              '<td class="text-center">' +
              '<button class="btn btn-warning item-unpublish mr-2" data="' + data[i].id_job + '">Unpublish</button>' +
              '<button class="btn btn-secondary item-preview mr-2" data="' + data[i].id_job + '"><i class="fa fa-eye" aria-hidden="true"></i></button>' +
              '<button class="btn btn-danger item-delete" data="' + data[i].id_job + '"><i class="fa fa-trash" aria-hidden="true"></i></button>' +
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
    "order": [
      [2, "desc"]
    ],
  });

  window.onload = function() {
    showAllJobvacancy();
  }

  function refresh() {
    MyTable = $('#myTable').dataTable({
      "order": [
        [2, "desc"]
      ],
    });
  }
</script>