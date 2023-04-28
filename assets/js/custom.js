/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 * 
 */

"use strict";

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

if (flashData == 'pending') {
    swal('Done!', 'Your post is waiting to be published by the administrator', 'success');
}