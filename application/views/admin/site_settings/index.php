<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
<!-- Main Content -->
<div class="main-content">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <?php echo form_open_multipart('pageparent/siteSettings'); ?>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="title" value="<?= $dataSiteSettings->title ?>">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="description" value="<?= $dataSiteSettings->description ?>">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">About Us</label>
                                <div class="col-sm-12 col-md-7">
                                    <textarea class="summernote" name="about_us"><?= $dataSiteSettings->about_us ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Logo</label>
                                <div class="form-group row mb-6">
                                    <div class="file-input ml-4">
                                        <input class="choose" type="file" name="logo" accept="image/*">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-5">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <img id="preview" src="<?= base_url() ?>images/site_settings/<?= $dataSiteSettings->logo ?>" style="width: 400px;">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Footer Text</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="footer_text" value="<?= $dataSiteSettings->footer_text ?>">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-6 col-md-3 col-lg-3">Instagram Link</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="instagram" value="<?= $dataSiteSettings->instagram ?>">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-6 col-md-3 col-lg-3">Facebook Link</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="facebook" value="<?= $dataSiteSettings->facebook ?>">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $this->load->view('dist/_partials/footer'); ?>

<script type="text/javascript">
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
        $('.label').text(fileName)
    })
</script>