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
                          <th>Title</th>
                          <th>Author</th>
                          <th style="width: 20%;">Date</th>
                          <th style="width: 20%;">Category</th>
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
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="card">
        <img class="card-img-top" src="" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title"></h5>
          <div class="card-text"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php if ($profile->role_id == 1) {
  $url = 'article/showAllPendingArticle/';
} else if ($profile->role_id == 3) {
  $url = 'article/showAllPendingArticleByCountry/' . $profile->id_country;
} ?>

<script>
  $(function() {

    showAllArticle();
    //preview
    $('#show_data').on('click', '.item-preview', function() {
      var id = $(this).attr('data');
      $('#myModal').modal('show');
      $('#myModal').find('.modal-title').text('Preview');
      $.ajax({
        type: 'get',
        url: '<?php echo  base_url() ?>article/editArticle',
        data: {
          id: id
        },
        async: false,
        dataType: 'json',
        success: function(data) {
          $('.card-title').text(data.title);
          $('.card-text').html(data.content);
          $('.card-img-top').attr('src', '<?= base_url() ?>images/article/' + data.article_image);
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
          title: 'Delete Article?',
          icon: 'error',
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            $.ajax({
              type: 'get',
              async: false,
              url: '<?php echo base_url() ?>article/deleteArticle',
              data: {
                id: id
              },
              dataType: 'json',
              success: function(response) {
                swal('Deleted!', {
                  icon: 'success',
                });
                showAllArticle();
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

    //publish
    $('#show_data').on('click', '.item-publish', function() {
      var id = $(this).attr('data');
      swal({
          title: 'Publish?',
          icon: 'info',
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            $.ajax({
              type: 'get',
              async: false,
              url: '<?php echo base_url() ?>article/publishArticle',
              data: {
                id: id
              },
              dataType: 'json',
              success: function(response) {
                swal('Published!', {
                  icon: 'success',
                });
                showAllArticle();
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

    <?php if ($profile->role_id == 1) {
      $url = 'article/showAllPendingArticle/';
    } else if ($profile->role_id == 3) {
      $url = 'article/showAllPendingArticleByCountry/' . $profile->id_country;
    } ?>

    //function
    function showAllArticle() {
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
              '<td class="">' + data[i].title + '</td>' +
              '<td class="">' + data[i].name + '</td>' +
              '<td class="">' + data[i].time_created + '</td>' +
              '<td class="">' + data[i].category_name + '</td>' +
              '<td class="text-center">' +
              '<button class="btn btn-info item-publish mr-2" data="' + data[i].id_article + '">Publish</button>' +
              '<button class="btn btn-secondary item-preview mr-2" data="' + data[i].id_article + '"><i class="fa fa-eye" aria-hidden="true"></i></button>' +
              '<button class="btn btn-danger item-delete" data="' + data[i].id_article + '"><i class="fa fa-trash" aria-hidden="true"></i></button>' +
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

  });

  window.onload = function() {
    showAllArticle();
  }

  function refresh() {
    MyTable = $('#myTable').dataTable({});
  }
</script>