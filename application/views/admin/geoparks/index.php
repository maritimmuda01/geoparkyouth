<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1> <a href="<?= base_url('country/index/') . $thisCountry['region_id'] ?>" class="mr-2"><i class="fa fa-arrow-left" aria-hidden="true"></i></a> <?= $title ?></h1>
            <div class="section-header-breadcrumb">
                <button class="btn btn-info" id="btnAdd"><i class="fa fa-plus"></i> Add New</button>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Country : <?= $thisCountry['nicename'] ?></h2>
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
                                                    <th style="width: 10%;">ID</th>
                                                    <th>Name</th>
                                                    <th style="width: 20%;" class="text-center">Geopark Type</th>
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
            </div>
        </div>
    </section>
</div>
<?php $this->load->view('dist/_partials/footer'); ?>


<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg" style="width:100%" role="document">
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
                            <label class="col-form-label col-12 col-md-12 col-lg-12">Name</label>
                            <div class="col-sm-12 col-md-12">
                                <input type="hidden" name="Id">
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label col-12 col-md-12 col-lg-12">Category</label>
                            <div class="col-sm-12 col-md-12">
                                <select class="form-control" id="geotype" name="geotype">
                                    <?php foreach ($dataGeotype as $data) { ?>
                                        <option value="<?= $data->id_geotype ?>"><?= $data->geotype_name ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label col-12 col-md-12 col-lg-12">Country</label>
                            <div class="col-sm-12 col-md-12">
                                <select class="form-control" id="country" name="country">
                                    <?php foreach ($dataCountry as $data) { ?>
                                        <option value="<?= $data->id_country ?>"><?= $data->nicename ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label col-12 col-md-12 col-lg-6">Instagram Link</label>
                            <label class="col-form-label col-12 col-md-12 col-lg-6">Website Link</label>
                            <div class="col-sm-12 col-md-6">
                                <input type="text" class="form-control" name="instagram">
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <input type="text" class="form-control" name="link">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label col-12 col-md-12 col-lg-6">Latitude</label>
                            <label class="col-form-label col-12 col-md-12 col-lg-6">Longitude</label>
                            <div class="col-sm-12 col-md-6">
                                <input type="text" class="form-control" id="latitude" name="latitude">
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <input type="text" class="form-control" id="longitude" name="longitude">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label col-12 col-md-12 col-lg-6">Location</label>
                            <div class="col-sm-12 col-md-12" id="maphere">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label col-12 col-md-12 col-lg-12">Image</label>
                            <div class="col-sm-12 col-md-12">
                                <input type="file" name="image" class="form-control choose w-100" accept="image/*">
                                <img src="" id="image" class="rounded mx-auto d-block w-100 logo mt-2">
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
        showAllGeoparks();

        //add New
        $('#btnAdd').click(function() {
            $('#mapid').remove();
            $('#maphere').append('<div id="mapid" style="height: 400px;"></div> ')
            $("#myForm").trigger('reset');
            $('#myModal').modal('show');
            $('#image').attr("src", "");
            $('#country').val('<?= $id ?>');
            $('#myModal').find('.modal-title').text('Add New Geopark');
            $('#myForm').attr('action', '<?php echo base_url() ?>geoparks/addGeoparks/<?= $id ?>');
            var curLocation = [0, 0];
            initializeMap(curLocation);
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
                        showAllGeoparks();
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
            $('#mapid').remove();
            $('#maphere').append('<div id="mapid" style="height: 400px;"></div> ')
            var id = $(this).attr('data');
            $('#myModal').modal('show');
            $('#myModal').find('.modal-title').text('Edit Geopark');
            $('#myForm').attr('action', '<?php echo base_url() ?>geoparks/updateGeoparks');
            $.ajax({
                type: 'get',
                url: '<?php echo  base_url() ?>geoparks/editGeoparks',
                data: {
                    id: id
                },
                async: false,
                dataType: 'json',
                success: function(data) {
                    $('input[name=name]').val(data.geoname);
                    $('input[name=instagram]').val(data.geo_insta);
                    $('input[name=link]').val(data.geo_link);
                    $('#country').val(data.country_id);
                    $('#category').val(data.geotype_id);
                    $('input[name=Id]').val(data.id_geoname);
                    $('#image').attr("src", "<?php echo base_url(); ?>/images/geoparks/" + data.image);
                    $("#latitude").val(data.lat);
                    $("#longitude").val(data.long);
                    var curLocation = [data.lat, data.long];
                    initializeMap(curLocation);
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
                    title: 'Delete Geopark?',
                    icon: 'error',
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            type: 'get',
                            async: false,
                            url: '<?php echo base_url() ?>geoparks/deleteGeoparks',
                            data: {
                                id: id
                            },
                            dataType: 'json',
                            success: function(response) {
                                swal('Deleted!', {
                                    icon: 'success',
                                });
                                showAllGeoparks();
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
        function showAllGeoparks() {
            $.ajax({
                url: '<?php echo base_url() ?>geoparks/showAllGeoparksByCountryId/<?= $id ?>',
                async: false,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<tr>' +
                            '<td class="">' + (i + 1) + '</td>' +
                            '<td class="">' + data[i].id_geoname + '</td>' +
                            '<td class="">' + data[i].geoname + '</td>' +
                            '<td class="text-center"><span class="badge badge-' + data[i].geotype_color + ' ">' + data[i].geotype_name + '</span></td>' +
                            '<td class="text-center">' +
                            '<button class="btn btn-warning item-edit" data="' + data[i].id_geoname + '"><i class="far fa-edit" aria-hidden="true"></i></button>' +
                            '<button class="btn btn-danger item-delete" style="margin-left:10px" data="' + data[i].id_geoname + '"><i class="fa fa-trash" aria-hidden="true"></i></button>' +
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
        showAllGeoparks();
    }

    function refresh() {
        MyTable = $('#myTable').dataTable();
    }

    function initializeMap(curLocation) {

        $('#myModal').on('shown.bs.modal', function() {
            this.mymap;
            setTimeout(function() {
                mymap.invalidateSize();
            }, 3);
        })
        if (curLocation[0] == '' && curLocation[1] == '') {
            curLocation = [-6.3677206, 106.7108219];
        }
        var mymap = L.map('mapid').setView(curLocation, 3);

        var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(mymap);


        mymap.attributionControl.setPrefix(false);
        var marker = new L.marker(curLocation, {
            draggable: 'true'
        });

        marker.on('dragend', function(event) {
            var position = marker.getLatLng();
            marker.setLatLng(position, {
                draggable: 'true'
            }).bindPopup(position).update();
            $("#latitude").val(position.lat);
            $("#longitude").val(position.lng).keyup();
        });

        $("#latitude, #longitude").change(function() {
            var position = [parseInt($("#latitude").val()), parseInt($("#longitude").val())];
            marker.setLatLng(position, {
                draggable: 'true'
            }).bindPopup(position).update();
            mymap.panTo(position);
        });

        mymap.addLayer(marker);
    }

    const readURL = (input) => {
        if (input.files && input.files[0]) {
            const reader = new FileReader()
            reader.onload = (e) => {
                $('#image').attr('src', e.target.result)
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
</script>