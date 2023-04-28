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
        <a class="btn btn-info" href="<?= base_url() ?>account/writeJobvacancy"><i class="fa fa-plus"></i> Add New</a>
      </div>
    </div>
    <div class="form-group">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search here..." aria-label="" id="searchInput">
      </div>

      <div class="section-body">

        <div class="row" id="show_data">
        </div>
        <div class="empty-state" data-height="400" hidden>
          <div class="empty-state-icon">
            <i class="fas fa-question"></i>
          </div>
          <h2>No Result</h2>
          <p class="lead">
            The data you are looking for is not exist.
          </p>
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
            <label>Position</label>
            <input type="text" class="form-control" name="position" tabindex="1" required="">
          </div>
          <div class="form-group has-error">
            <label>Company</label>
            <input type="text" class="form-control" name="company" tabindex="1" required="">
          </div>
          <div class="form-group has-error">
            <label>Location</label>
            <input type="text" class="form-control" name="location" tabindex="1" required="">
          </div>
          <div class="form-group">
            <label>Type</label>
            <select class="form-control" name="type" id="region">
              <?php foreach ($dataType as $type) { ?>
                <option value="<?= $type->id ?>"><?= $type->name ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group has-error">
            <label>Description</label>
            <textarea class="summernote" name="description" tabindex="1" required="" id="description"></textarea>
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

<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="Id" value="0">
        <div class="form-group has-error">
          <label>Location :</label>
          <input type="text" class="form-control-plaintext" name="location" tabindex="1" readonly="">
        </div>
        <div class="form-group has-error" id="text_description">
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  document.querySelector('#searchInput').addEventListener('keyup', function(e) {
    // UI Element
    let namesLI = document.getElementsByClassName('items');
    // Get Search Query
    let searchQuery = searchInput.value.toLowerCase();
    // Search Compare & Display
    for (let index = 0; index < namesLI.length; index++) {
      const name = namesLI[index].textContent.toLowerCase();

      if (name.includes(searchQuery)) {
        namesLI[index].style.display = 'block';
        count++;
      } else {
        namesLI[index].style.display = 'none';
      }

      var allElems = document.getElementsByTagName('div');
      var count = 0;
      for (var i = 0; i < allElems.length; i++) {
        var thisElem = allElems[i];
        if (thisElem.style.display == 'block') count++;
      }

    }
    var count = $('div.items:hidden').length;
    if (count == namesLI.length) {
      $('.empty-state').removeAttr('hidden');
    }
    if (count < 1) {
      $('.empty-state').attr('hidden', true);
    }

  });


  $(function() {
    showAllJobvacancy();

    //preview
    $('#show_data').on('click', '.item-preview', function() {
      var id = $(this).attr('data');
      $('#myModal2').modal('show');
      $('#myModal2').find('.modal-title').text('Preview');
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
          $('input[name=location]').val(data.location);
          $('#text_description').html(data.description);
        },
        error: function() {
          swal('Failed', 'Error occured. Please try again!', 'error');
        }
      });

    });

    //function
    function showAllJobvacancy() {
      $.ajax({
        url: '<?php echo base_url() ?>jobvacancy/showAllPublishedJobvacancy',
        async: false,
        dataType: 'json',
        success: function(data) {
          if (data.length < 1) {
            $('.empty-state').removeAttr('hidden');
          }
          console.log(data);
          var html = '';
          var i;
          for (i = 0; i < data.length; i++) {
            html += '<div class="col-12 col-md-6 col-lg-4 items">' +
              '<div class="card card-primary h-100">' +
              '<div class="card-header">' +
              '<h4>' + data[i].job_position + '</h4>' +
              '<div class="card-header-action">' +
              '<button class="btn btn-secondary item-preview" data="' + data[i].id_job + '">' +
              '<i class="fa fa-info-circle" aria-hidden="true"></i>' +
              '</button>' +
              '</div>' +
              '</div>' +
              '<div class="card-body">' +
              '' + data[i].jobtype_name + ' ' + data[i].job_position + ' at ' + data[i].job_company + '' +
              '</div>' +
              '</div>' +
              '</div>';
          }
          $('#show_data').html(html);
          refresh();

        },
        error: function() {
          alert('Error loading data');
        }
      });
    }
  });

  window.onload = function() {
    showAllJobvacancy();
  }
</script>