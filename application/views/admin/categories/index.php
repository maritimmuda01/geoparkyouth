<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_layout/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
        <section class="section">
          <div class="section-header">
          </div>
          <div class="section-body">
            <div class="row">
              <div class="col-lg-12">
                <div class="card card-primary">
                  <div class="card-header">
                    <h4>Categories Management</h4>
                    <div class="card-header-action">
                      <button class="btn btn-info" id="btnAdd"><i class="far fa-edit"></i> Add New</button>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="table-responsive">
                          <table id="myTable" class="display table table-striped">
                            <thead>                                 
                              <tr>
                                <th style="width: 80%;">Name</th>
                                <th class="text-center"></th>
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
<?php $this->load->view('_layout/footer'); ?>

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
            <label>Category Name</label>
            <input type="text" class="form-control" name="name" tabindex="1" required="">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" id="btnSave" class="btn btn-primary" >Save changes</button>
      </div>
    </div>
  </div>
</div>

<script>


  $(function(){
    showAllCategories();

      //add New
      $('#btnAdd').click(function(){
        $("#myForm").trigger('reset');
        $('#myModal').modal('show');
        $('#myModal').find('.modal-title').text('Add New Category');
        $('#myForm').attr('action', '<?php echo base_url() ?>admin/addCategories');
      });

      $('#btnSave').click(function(){
        var url = $('#myForm').attr('action');
        var data = $('#myForm').serialize();
        //validate form
        var categoryName = $('input[name=name]');
        var result = '';
        if(categoryName.val()==''){
          categoryName.parent().addClass('was-validated');
        }else{
          categoryName.parent().parent().removeClass('was-validated');
          result+=1;
        }

        if (result=='1'){
          $.ajax({
            type: 'ajax',
            method: 'post',
            url: url,
            data: data,
            async: false,
            dataType: 'json',
            success: function(response){
              if(response.success){
                $('#myModal').modal('hide');
                $('#myForm')[0].reset();
                if (response.type=='add'){
                  var type = 'added';
                }else if (response.type == 'edit'){
                  var type = 'edited';
                }
                swal('Done', 'Successfully '+type+'!', 'success');
                showAllCategories();
              }else{
                swal('Failed', 'Error occured. Please try again!', 'error');
              }
            },
            error: function(){
                swal('Failed', 'Error occured. Please try again!', 'error');
            }
          });
        }
      });

      //edit
      $('#show_data').on('click', '.item-edit', function(){
        var id = $(this).attr('data');
        $('#myModal').modal('show');
        $('#myModal').find('.modal-title').text('Edit Category');
        $('#myForm').attr('action', '<?php echo base_url() ?>admin/updateCategories');
        $.ajax({
          type: 'ajax',
          method: 'get',
          url: '<?php echo  base_url() ?>admin/editCategories',
          data: {
            id:id
          },
          async: false,
          dataType: 'json',
          success: function(data){
            $('input[name=name]').val(data.attr);
            $('input[name=Id]').val(data.id);
          },
          error: function(){
            swal('Failed', 'Error occured. Please try again!', 'error');
          }
        });

      });

      //delete
      $('#show_data').on('click', '.item-delete', function(){
        var id = $(this).attr('data');
        swal({
            title: 'Delete Category?',
            icon: 'error',
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              $.ajax({
                type: 'ajax',
                method: 'get',
                async: false,
                url: '<?php echo base_url() ?>admin/deleteCategories',
                data:{id:id},
                dataType: 'json',
                success: function(response){
                  swal('Deleted!', {
                    icon: 'success',
                  });
                  showAllCategories();
                },
                error: function(){
                  alert: ('error');
                }
              })
            }else {
              swal('Cancelled', {
                    icon: 'success',
                  });
            }
          });


      });

      //function
      function showAllCategories(){
        $.ajax({
            type: 'ajax',
            url: '<?php echo base_url() ?>admin/showAllCategories',
            async: false,
            dataType: 'json',
            success: function(data){
              // console.log(data);
              var html = '';
              var i;
              for (i=0; i<data.length; i++){
                html += '<tr>'+
                          '<td class="">'+data[i].attr+'</td>'+
                          '<td class="text-center">'+
                            '<button class="btn btn-warning item-edit" data="'+data[i].id+'">Edit</button>'+
                            '<button class="btn btn-danger item-delete" style="margin-left:10px" data="'+data[i].id+'">Delete</button>'+
                          '</td>'+
                        '</tr>';
              }
              MyTable.fnDestroy();
              $('#show_data').html(html);
              refresh();
              
            },
            error: function(){
              alert('Error loading data');
            }
        });
      }
    });

var MyTable = $('#myTable').dataTable({
    "order": [],
    });

  window.onload = function() {
    showAllCategories();
  }

  function refresh() {
    MyTable = $('#myTable').dataTable();
  }
</script>