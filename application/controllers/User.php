<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('M_User');
        $this->load->model('M_Role');
        $this->load->model('M_Site');
        $this->site_settings = $this->M_Site->showAllSite();
    }

    public function getMyAccount()
    {
        $result = $this->M_User->getMyAccount();
        echo json_encode($result);
    }

    public function active()
    {
        $data['title'] = "Active User";
        $data['profile'] = $this->M_User->getMyAccount();
        $data['dataRole'] = $this->M_Role->showAllRole();
        $this->load->view('admin/user/active', $data);
    }

    public function inactive()
    {
        $data['title'] = "Inactive User";
        $data['profile'] = $this->M_User->getMyAccount();
        $data['dataRole'] = $this->db->get('role')->result();
        $this->load->view('admin/user/inactive', $data);
    }

    public function showAllActiveUser()
    {
        $result = $this->M_User->showAllActiveUser();
        echo json_encode($result);
    }

    public function showAllActiveUserByCountry($id)
    {
        $result = $this->M_User->showAllActiveUserByCountry($id);
        echo json_encode($result);
    }

    public function showAllInactiveUser()
    {
        $result = $this->M_User->showAllInactiveUser();
        echo json_encode($result);
    }

    public function showAllInactiveUserByCountry($id)
    {
        $result = $this->M_User->showAllInactiveUserByCountry($id);

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

    public function activateUser()
    {
        $result = $this->M_User->activateUser();
        $msg['success'] = false;
        if ($result) {
            $msg['success'] = true;
        }
        // var_dump($result);
        echo json_encode($msg);
    }

    public function inactivateUser()
    {
        $result = $this->M_User->inactivateUser();
        $msg['success'] = false;
        if ($result) {
            $msg['success'] = true;
        }
        // var_dump($result);
        echo json_encode($msg);
    }

    public function deleteUser()
    {
        $result = $this->M_User->deleteUser();
        $msg['success'] = false;
        if ($result) {
            $msg['success'] = true;
        }
        // var_dump($result);
        echo json_encode($msg);
    }
}

/* End of file User.php */
/* Location: ./application/controllers/User.php */