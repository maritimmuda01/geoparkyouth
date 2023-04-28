<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('M_User');
        $this->load->model('M_Site');
        $this->site_settings = $this->M_Site->showAllSite();
    }

    //User
    public function index()
    {
        if ($this->session->userdata('role_id') == 3) {
            redirect('auth/blocked');
        }
        $data['title'] = "User Management";
        $data['dataRole'] = $this->db->get('role')->result();
        $this->load->view('admin/user/index', $data);
    }

    public function showAllUser()
    {
        $result = $this->M_User->showAllUser();
        echo json_encode($result);
    }

    public function editUser()
    {
        $result = $this->M_User->editUser();
        echo json_encode($result);
    }

    public function updateUser()
    {
        $result = $this->M_User->updateUser();
        $msg['success'] = false;
        $msg['type'] = 'edit';
        if ($result) {
            $msg['success'] = true;
        }

        echo json_encode($msg);
    }
}

/* End of file User.php */
/* Location: ./application/controllers/User.php */