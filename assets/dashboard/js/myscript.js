$('.delete-confirm').on('click', function(e) {

    e.preventDefault();
    const href = $(this).attr('href');
    swal({
            title: 'Are you sure?',
            text: 'Data will be deleted!',
            icon: 'error',
            buttons: true,
            dangerMode: true,
        })
        .then((result) => {
            if (result) {
                swal('Loading', {
                    buttons: false,
                });
                document.location.href = href;
            }else {
        swal('Cancelled');
        }
        });

});


$('.publish').on('click', function(e) {

    e.preventDefault();
    const href = $(this).attr('href');
    swal({
            title: 'Publish?',
            text: 'Article will be available on main media',
            icon: 'info',
            buttons: true,
            dangerMode: true,
        })
        .then((result) => {
            if (result) {
              swal('Loading', {
                    buttons: false,
                });
                document.location.href = href;
            }
        });

});

$('.unpublish').on('click', function(e) {

    e.preventDefault();
    const href = $(this).attr('href');
    swal({
            title: 'Unpublish?',
            text: 'Article will be unavailable on main media',
            icon: 'info',
            buttons: true,
            dangerMode: true,
        })
        .then((result) => {
            if (result) {
              swal('Loading', {
                    buttons: false,
                });
                document.location.href = href;
            }
        });

});

$('.role_change').on('click', function(e) {

    e.preventDefault();
    const href = $(this).attr('href');
    swal({
            title: 'Change this account role?',
            text: "You're about to change this account's role",
            icon: 'info',
            buttons: true,
            dangerMode: true,
        })
        .then((result) => {
            if (result) {
              swal('Loading', {
                    buttons: false,
                });
                document.location.href = href;
            }
        });

});

const flashData = $('.flash-data').data('flashdata');

if (flashData == 'success') {
    swal('Done!', '', 'success');
}

if (flashData == 'deleted') {
    swal('Deleted!', '', 'success');
}


if (flashData == 'failed') {
    swal('Failed!', '', 'error');
}

if (flashData == 'wrong-password') {
    swal('Wrong Password!', "Please try again", 'error');
}

if (flashData == 'same-password') {
    swal('Failed!', "New password can't be the same as old password", 'error');
}



// Profile
$(document).on("change", ".uploadimage", function() {
    var triggerInput = this;
    var currentImg = $(this).closest(".pic-holder").find(".pic").attr("src");
    var holder = $(this).closest(".pic-holder");
    var wrapper = $(this).closest(".profile-pic-wrapper");
    $(wrapper).find('[role="alert"]').remove();
    var files = !!this.files ? this.files : [];
    if (!files.length || !window.FileReader) {
        return;
    }
    if (/^image/.test(files[0].type)) {
        // only image file
        var reader = new FileReader(); // instance of the FileReader
        reader.readAsDataURL(files[0]); // read the local file

        reader.onloadend = function() {
            $(holder).addClass("uploadInProgress");
            $(holder).find(".pic").attr("src", this.result);
            $(holder).append(
                '<div class="upload-loader"><div class="spinner-border text-primary" role="status"><span class="sr-only">Loading...</span></div></div>'
            );

            // Dummy timeout; call API or AJAX below
            setTimeout(() => {
                $(holder).removeClass("uploadInProgress");
                $(holder).find(".upload-loader").remove();

                // If upload successful
                if (Math.random() < 0.9) {
                    $(wrapper).append(
                        '<div class="snackbar show" role="alert"><i class="fa fa-check-circle text-success"></i> Image updated successfully</div>'
                    );
                    $.ajax({
                        url: '',
                        type: "post",
                        data: new FormData(this),
                        processData: false,
                        contentType: false,
                        cache: false,
                        async: false,
                        success: function(data) {
                            $('#uploaded_image').html(data);
                        }
                    });
                    // Clear input after upload
                    $(triggerInput).val("");

                    setTimeout(() => {
                        $(wrapper).find('[role="alert"]').remove();
                    }, 3000);
                } else {
                    $(holder).find(".pic").attr("src", currentImg);
                    $(wrapper).append(
                        '<div class="snackbar show" role="alert"><i class="fa fa-times-circle text-danger"></i> There is an error while uploading! Please try again.</div>'
                    );

                    // Clear input after upload
                    $(triggerInput).val("");
                    setTimeout(() => {
                        $(wrapper).find('[role="alert"]').remove();
                    }, 3000);
                }
            }, 1500);
        };
    } else {
        $(wrapper).append(
            '<div class="alert alert-danger d-inline-block p-2 small" role="alert">Please choose the valid image.</div>'
        );
        setTimeout(() => {
            $(wrapper).find('role="alert"').remove();
        }, 3000);
    }
});