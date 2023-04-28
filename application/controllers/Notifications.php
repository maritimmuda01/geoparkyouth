<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notifications extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('M_Notifications');
        $this->load->model('M_Site');
        $this->site_settings = $this->M_Site->showAllSite();
    }

    public function showAllNotifications()
    {

        $result = $this->M_Notifications->showAllNotifications();
        echo json_encode($result);
    }

    public function markAsRead()
    {

        $result = $this->M_Notifications->updateNotifications();
        $msg['success'] = false;
        $msg['type'] = 'edit';
        if ($result) {
            $msg['success'] = true;
        }

        echo json_encode($msg);
    }
}
