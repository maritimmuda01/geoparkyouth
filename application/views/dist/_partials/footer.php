<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<footer class="main-footer">
  <div class="footer-left">
    <?= $this->site_settings['title'] . " " . $this->site_settings['footer_text'] ?>
    <!-- <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div> -->
    <div class="footer-right">
    </div>
</footer>
</div>
</div>

<?php $this->load->view('dist/_partials/js'); ?>

<script>
  function myFunction() {
    var myWindow = window.open("<?= base_url() ?>message", "", 'directories=no,titlebar=no,toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=no,width=1200,height=600');
  }


  $(function() {
    showAllNotifications();

    //edit
    $('a[href="#markAsRead"]').click(function() {
      // alert('ass');
      var id = $(this).attr('data');
      $.ajax({
        type: 'get',
        url: '<?php echo  base_url() ?>notifications/markAsRead',
        data: {
          id: id
        },
        async: false,
        dataType: 'json',
        success: function(data) {
          showAllNotifications();
        },
        error: function() {
          swal('Failed', 'Error occured. Please try again!', 'error');
        }
      });

    });

    //function
    function showAllNotifications() {
      $.ajax({
        type: 'post',
        url: '<?php echo base_url() ?>notifications/showAllNotifications',
        async: false,
        dataType: 'json',
        success: function(data) {
          var html = '';
          var i;
          $j = 0;
          for (i = 0; i < data.length; i++) {
            if (data[i].is_read < 1) {
              $j++
            }
            html += '<a href="<?= base_url() ?>' + data[i].type + '" class="notif dropdown-item ">' +
              '<div class="dropdown-item-icon bg-' + data[i].type_color + ' text-white">' +
              '<i class="' + data[i].type_icon + '"></i>' +
              '</div>' +
              '<div class="dropdown-item-desc">' +
              '' + data[i].text + '' +
              '<div class="time text-primary">' + data[i].time_created + '</div>' +
              '</div>' +
              '</a>';
          }
          $('#show_notif').html(html);
          if ($j > 0) {
            $('.notification-toggle').addClass("beep");
            $('.notif').addClass("dropdown-item-unread");
            $('#markAsRead').removeAttr("hidden");
          } else if ($j < 1) {
            $('.notification-toggle').removeClass("beep");
            $('#markAsRead').attr("hidden", true);
          }

        },
        error: function() {
          alert('Error loading data');
        }
      });
    }
  });

  window.onload = function() {
    showAllNotifications();

  }
</script>