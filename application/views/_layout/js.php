<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  <!-- General JS Scripts -->
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/popper.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/tooltip.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/js/geopark.js"></script>

  <script src="<?php echo base_url(); ?>assets/dashboard/modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/jquery-selectric/jquery.selectric.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/js/page/auth-register.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/summernote/summernote-bs4.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/codemirror/lib/codemirror.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/codemirror/mode/javascript/javascript.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/sweetalert/sweetalert.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/js/page/modules-sweetalert.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/js/myscript.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/izitoast/js/iziToast.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/jquery-ui/jquery-ui.min.js"></script>

  <script src="<?php echo base_url(); ?>assets/dashboard/modules/cleave-js/dist/cleave.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/cleave-js/dist/addons/cleave-phone.us.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/select2/dist/js/select2.full.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/jquery-selectric/jquery.selectric.min.js"></script>
  
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/sticky-kit.js"></script>


  <script src="<?php echo base_url(); ?>assets/dashboard/modules/datatables/datatables.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/jquery-ui/jquery-ui.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/js/page/modules-datatables.js"></script>

  
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/simple-weather/jquery.simpleWeather.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/chart.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/jqvmap/dist/jquery.vmap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/summernote/summernote-bs4.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

  <script src="<?php echo base_url(); ?>assets/dashboard/modules/prism/prism.js"></script>
  <!-- <script src="<?php echo base_url(); ?>assets/dashboard/js/page/bootstrap-modal.js"></script> -->

  <script src="<?php echo base_url(); ?>assets/dashboard/modules/izitoast/js/iziToast.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/jqvmap/dist/jquery.vmap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/jqvmap/dist/maps/jquery.vmap.indonesia.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/js/page/modules-vector-map.js"></script>

  <script src="<?php echo base_url(); ?>assets/dashboard/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
  
  <script src="<?php echo base_url(); ?>assets/dashboard/js/page/components-user.js"></script>
  
  <!-- JS Libraies -->
<?php
if ($this->uri->segment(2) == "" || $this->uri->segment(2) == "index") { ?>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/jquery.sparkline.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/chart.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/summernote/summernote-bs4.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "components_gallery") { ?>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "components_multiple_upload") { ?>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/dropzonejs/min/dropzone.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "components_statistic") { ?>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/jquery.sparkline.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/chart.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/jqvmap/dist/jquery.vmap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/jqvmap/dist/maps/jquery.vmap.indonesia.js"></script>
<?php
}elseif ($this->uri->segment(2) == "components_table") { ?>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/jquery-ui/jquery-ui.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "forms_editor") { ?>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/summernote/summernote-bs4.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/codemirror/lib/codemirror.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/codemirror/mode/javascript/javascript.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/jquery-selectric/jquery.selectric.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "gmaps_advanced_route" || $this->uri->segment(2) == "gmaps_draggable_marker" || $this->uri->segment(2) == "gmaps_geocoding" || $this->uri->segment(2) == "gmaps_geolocation" || $this->uri->segment(2) == "gmaps_marker" || $this->uri->segment(2) == "gmaps_multiple_marker" || $this->uri->segment(2) == "gmaps_route" || $this->uri->segment(2) == "gmaps_simple") { ?>
  <script src="http://maps.google.com/maps/api/js?key=AIzaSyB55Np3_WsZwUQ9NS7DP-HnneleZLYZDNw&amp;sensor=true"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/gmaps.js"></script>
<?php
}elseif ($this->uri->segment(2) == "modules_calendar") { ?>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/fullcalendar/fullcalendar.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "modules_chartjs") { ?>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/chart.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "modules_owl_carousel") { ?>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "modules_sparkline") { ?>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/jquery.sparkline.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "features_post_create") { ?>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/summernote/summernote-bs4.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/jquery-selectric/jquery.selectric.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/upload-preview/assets/dashboard/js/jquery.uploadPreview.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "features_posts") { ?>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/jquery-selectric/jquery.selectric.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "features_tickets") { ?>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/summernote/summernote-bs4.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "utilities_contact") { ?>
  <script src="http://maps.google.com/maps/api/js?key=AIzaSyB55Np3_WsZwUQ9NS7DP-HnneleZLYZDNw&amp;sensor=true"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/modules/gmaps.js"></script>
<?php
} ?>

  <!-- Page Specific JS File -->
<?php
if ($this->uri->segment(2) == "" || $this->uri->segment(2) == "index") { ?>
  <script src="<?php echo base_url(); ?>assets/dashboard/js/page/index.js"></script>
<?php
}elseif ($this->uri->segment(2) == "index_0") { ?>
  <script src="<?php echo base_url(); ?>assets/dashboard/js/page/index-0.js"></script>
<?php
}elseif ($this->uri->segment(2) == "components_chat_box") { ?>
  <script src="<?php echo base_url(); ?>assets/dashboard/js/page/components-chat-box.js"></script>
<?php
}elseif ($this->uri->segment(2) == "components_multiple_upload") { ?>
  <script src="<?php echo base_url(); ?>assets/dashboard/js/page/components-multiple-upload.js"></script>
<?php
}elseif ($this->uri->segment(2) == "components_statistic") { ?>
  <script src="<?php echo base_url(); ?>assets/dashboard/js/page/components-statistic.js"></script>
<?php
}elseif ($this->uri->segment(2) == "components_table") { ?>
  <script src="<?php echo base_url(); ?>assets/dashboard/js/page/components-table.js"></script>
<?php
}elseif ($this->uri->segment(2) == "forms_advanced_form") { ?>
  <script src="<?php echo base_url(); ?>assets/dashboard/js/page/forms-advanced-forms.js"></script>
<?php
}elseif ($this->uri->segment(2) == "gmaps_advanced_route") { ?>
  <script src="<?php echo base_url(); ?>assets/dashboard/js/page/gmaps-advanced-route.js"></script>
<?php
}elseif ($this->uri->segment(2) == "gmaps_draggable_marker") { ?>
  <script src="<?php echo base_url(); ?>assets/dashboard/js/page/gmaps-draggable-marker.js"></script>
<?php
}elseif ($this->uri->segment(2) == "gmaps_geocoding") { ?>
  <script src="<?php echo base_url(); ?>assets/dashboard/js/page/gmaps-geocoding.js"></script>
<?php
}elseif ($this->uri->segment(2) == "gmaps_geolocation") { ?>
  <script src="<?php echo base_url(); ?>assets/dashboard/js/page/gmaps-geolocation.js"></script>
<?php
}elseif ($this->uri->segment(2) == "gmaps_marker") { ?>
  <script src="<?php echo base_url(); ?>assets/dashboard/js/page/gmaps-marker.js"></script>
<?php
}elseif ($this->uri->segment(2) == "gmaps_multiple_marker") { ?>
  <script src="<?php echo base_url(); ?>assets/dashboard/js/page/gmaps-multiple-marker.js"></script>
<?php
}elseif ($this->uri->segment(2) == "gmaps_route") { ?>
  <script src="<?php echo base_url(); ?>assets/dashboard/js/page/gmaps-route.js"></script>
<?php
}elseif ($this->uri->segment(2) == "gmaps_simple") { ?>
  <script src="<?php echo base_url(); ?>assets/dashboard/js/page/gmaps-simple.js"></script>
<?php
}elseif ($this->uri->segment(2) == "modules_calendar") { ?>
  <script src="<?php echo base_url(); ?>assets/dashboard/js/page/modules-calendar.js"></script>
<?php
}elseif ($this->uri->segment(2) == "modules_chartjs") { ?>
  <script src="<?php echo base_url(); ?>assets/dashboard/js/page/modules-chartjs.js"></script>
<?php
}elseif ($this->uri->segment(2) == "modules_ion_icons") { ?>
  <script src="<?php echo base_url(); ?>assets/dashboard/js/page/modules-ion-icons.js"></script>
<?php
}elseif ($this->uri->segment(2) == "modules_owl_carousel") { ?>
  <script src="<?php echo base_url(); ?>assets/dashboard/js/page/modules-slider.js"></script>
<?php
}elseif ($this->uri->segment(2) == "modules_sparkline") { ?>
  <script src="<?php echo base_url(); ?>assets/dashboard/js/page/modules-sparkline.js"></script>
<?php
}elseif ($this->uri->segment(2) == "modules_toastr") { ?>
  <script src="<?php echo base_url(); ?>assets/dashboard/js/page/modules-toastr.js"></script>
<?php
}elseif ($this->uri->segment(2) == "features_post_create") { ?>
  <script src="<?php echo base_url(); ?>assets/dashboard/js/page/features-post-create.js"></script>
<?php
}elseif ($this->uri->segment(2) == "features_posts") { ?>
  <script src="<?php echo base_url(); ?>assets/dashboard/js/page/features-posts.js"></script>
<?php
}elseif ($this->uri->segment(2) == "features_setting_detail") { ?>
  <script src="<?php echo base_url(); ?>assets/dashboard/js/page/features-setting-detail.js"></script>
<?php
}elseif ($this->uri->segment(2) == "utilities_contact") { ?>
  <script src="<?php echo base_url(); ?>assets/dashboard/js/page/utilities-contact.js"></script>
<?php
} ?>

  <!-- Template JS File -->
  <script src="<?php echo base_url(); ?>assets/dashboard/js/scripts.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/js/custom.js"></script>
</body>
</html>