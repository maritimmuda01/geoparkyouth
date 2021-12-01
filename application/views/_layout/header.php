<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?php echo $title; ?> — <?= $site_settings['title'] ?></title>
  <link rel="shortcut icon" type="image/jpg" href="<?= base_url(); ?>assets/home/images/site_logo/<?= $site_settings['logo'] ?>" >

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/bootstrap-social/bootstrap-social.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/jquery-selectric/selectric.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/bootstrap-social/bootstrap-social.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/bootstrap-social/bootstrap-social.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/codemirror/lib/codemirror.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/codemirror/theme/duotone-dark.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/izitoast/css/iziToast.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/chocolat/dist/css/chocolat.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/select2/dist/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/jquery-selectric/selectric.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">

  
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/weather-icon/css/weather-icons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/weather-icon/css/weather-icons-wind.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/summernote/summernote-bs4.css">


  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/datatables/datatables.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
  
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/prism/prism.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/izitoast/css/iziToast.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/flag-icon-css/css/flag-icon.min.css">
  <!-- CSS Libraries -->
<?php
if ($this->uri->segment(2) == "" || $this->uri->segment(2) == "index") { ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">
<?php
}elseif ($this->uri->segment(2) == "components_gallery") { ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/chocolat/dist/css/chocolat.css">
<?php
}elseif ($this->uri->segment(2) == "components_multiple_upload") { ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/dropzonejs/dropzone.css">
<?php
}elseif ($this->uri->segment(2) == "components_statistic") { ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/flag-icon-css/css/flag-icon.min.css">
<?php
}elseif ($this->uri->segment(2) == "forms_editor") { ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/codemirror/lib/codemirror.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/codemirror/theme/duotone-dark.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/jquery-selectric/selectric.css">
<?php
}elseif ($this->uri->segment(2) == "modules_calendar") { ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/fullcalendar/fullcalendar.min.css">
<?php
}elseif ($this->uri->segment(2) == "modules_ion_icons") { ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/ionicons/css/ionicons.min.css">
<?php
}elseif ($this->uri->segment(2) == "modules_owl_carousel") { ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">
<?php
}elseif ($this->uri->segment(2) == "modules_weather_icon") { ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/weather-icon/css/weather-icons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/weather-icon/css/weather-icons-wind.min.css">
<?php
}elseif ($this->uri->segment(2) == "features_post_create") { ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/jquery-selectric/selectric.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
<?php
}elseif ($this->uri->segment(2) == "features_posts") { ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/jquery-selectric/selectric.css">
<?php
}elseif ($this->uri->segment(2) == "features_tickets") { ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/modules/chocolat/dist/css/chocolat.css">
<?php
} ?>

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/css/components.css">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<?php
if ($this->uri->segment(1) == "admin") {
  $this->load->view('_layout/layout');
  $this->load->view('_layout/sidebar');
  
  }elseif ($this->uri->segment(1) == "user" || $this->uri->segment(1) == "jobs" || $this->uri->segment(1) == "articles" ) {
  $this->load->view('_layout/layout');
  $this->load->view('_layout/sidebar');

}elseif ($this->uri->segment(1) != "" &&   $this->uri->segment(1) !="auth") {
  $this->load->view('_layout/layout');
  $this->load->view('_layout/sidebar');

}elseif ($this->uri->segment(1) == "errors") {
  $this->load->view('_layout/layout-3');
  $this->load->view('_layout/navbar');
}
?>


