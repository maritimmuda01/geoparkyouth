<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('home/_layout/header');
?>
<!-- page title -->
<section class="page-title bg-primary position-relative" style="padding: 80px;">
</section>
<!-- /page title -->

<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-sm-12 pr-5">
        <h3 class="font-tertiary mb-2"><?= $dataArticles['title'] ?></h3>
        <p class="font-secondary">Published on <?= date("j F Y, H:i", strtotime($dataArticles['time_created'])) ?> by <span class="text-primary"><?= $dataArticles['name'] ?></span class="text-primary"> on <span><?= ucfirst($dataArticles['category_name']) ?></span></p>
        <div class="content">
          <img src="<?= base_url() ?>images/article/<?= $dataArticles['article_image'] ?>" alt="post-thumb" class="img-fluid rounded w-100 mb-5">
        </div>
        <div class="content">
          <?= $dataArticles['content'] ?>
        </div>
      </div>
      <div class="col-lg-4 pl-5">
        <div class="card mt-0">
          <?php foreach ($featuredArticle as $data) { ?>
            <img class="card-img-top" src="<?= base_url() ?>images/article/<?= $data->article_image ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><?= $data->title ?></h5>
              <span class="card-text">Published on <?= date("j F Y, H:i", strtotime($data->time_created)) ?> by <?= $data->name ?> on <?= $data->category_name ?></span>
              <div class="mt-3">
                <a href="<?= base_url() ?>home/single/<?= $data->id_article ?>" class="btn btn-sm btn-primary">Read More</a>
              </div>
            </div>
          <?php } ?>
        </div>
        <div class="card mt-3">
          <div class="card-header bg-primary text-white">
            <span class="h6">Recent Articles</span>
          </div>
          <div class="list-group">
            <?php foreach (array_slice($dataRecent, 0, 3) as $data) { ?>
              <a href="<?= base_url() ?>home/single/<?= $data->id_article ?>" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between mb-2">
                  <h5 class="mb-1"><?= $data->title ?></h5>
                </div>
                <small>Published on <?= date("j F Y, H:i", strtotime($data->time_created)) ?> by <?= $data->name ?> on <?= $data->category_name ?></small>
              </a>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="mb-3">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 mb-4">
        <h4 class="font-weight-bold mb-3" id="countComment"></h4>
        <div class="bg-gray p-5 mb-4" id="show_data">
        </div>
        <button class="btn btn-primary w-100" id="btnAdd"><i class="fa fa-plus"></i> Leave a Comment</button>
      </div>
    </div>
  </div>
</section>


<?php $this->load->view('home/_layout/footer'); ?>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php if ($this->session->userdata('email')) { ?>
          <form id="myForm" action="#" method="post" class="needs-validation" novalidate="" onsubmit={this.saveAndContinue}>
            <div class="col-md-12">
              <input type="hidden" name="article_id" value="<?= $dataArticles['id_article'] ?>">
              <textarea name="comment" id="comment" placeholder="Type here..." class="form-control mb-4" name="text"></textarea>
            </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="submit" id="btnSave" class="btn btn-primary w-100">Comment!</button>
      </div>
    <?php } else { ?>
      <div class="card-body text-center px-4 py-5">
        <i class="ti-vector icon mb-5 d-inline-block"></i>
        <h4 class="mb-4">Oops!</h4>
        <p>You can't leave a comment unless you are logged in into <?= $this->site_settings['title'] ?>!</p>
      </div>
      <div class="modal-footer">
        <a class="btn btn-primary w-100 text-white" href="<?= base_url() ?>auth">Log In</a>
      </div>
    <?php } ?>
    </div>
  </div>
</div>

<script>
  $(function() {
    showAllComment();

    $('#btnAdd').click(function() {
      $("#myForm").trigger('reset');
      $('#myModal').modal('show');
      $('#myModal').find('.modal-title').text('Add New Region');
      $('#myForm').attr('action', '<?php echo base_url() ?>comment/addComment');
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
            swal('Done', 'Your comment has been sent!', 'success');
            showAllComment();
          } else {
            swal('Failed', 'Error occured. Please try again!', 'error');
          }
        },
        error: function() {
          swal('Failed', 'Error occured. Please try again!', 'error');
        }
      });

    });

    //function
    function showAllComment() {
      $.ajax({
        type: 'post',
        url: '<?php echo base_url() ?>comment/showAllComment/<?= $this->uri->segment(3) ?>',
        async: false,
        dataType: 'json',
        success: function(data) {
          // console.log(data);
          var html = '';
          var i;
          for (i = 0; i < data.length; i++) {
            html += '<div class="media py-4">' +
              '<img src="<?= base_url() ?>images/profile/' + data[i].profile_picture + '" class=" img-fluid align-self-start rounded-circle mr-3" alt="" style="height: 75px; width: 75px;">' +
              '<div class="media-body">' +
              '<h5 class="mt-0">' + data[i].name + '</h5>' +
              '<p>' + data[i].time_created + '</p>' +
              data[i].comment_text +
              '</div>' +
              '</div>';

          }
          $('#show_data').html(html);
          $('#countComment').html('Comment (' + data.length + ')');
          refresh();

        },
        error: function() {
          alert('Error loading data');
        }
      });
    }
  });

  window.onload = function() {
    showAllComment();
  }

  function refresh() {
    MyTable = $('#myTable').dataTable();
  }
</script>