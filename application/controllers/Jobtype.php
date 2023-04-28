<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jobtype extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('M_Jobtype');
        $this->load->model('M_Site');
        $this->site_settings = $this->M_Site->showAllSite();
    }

    //Jobtype
    public function index()
    {
        $data['title'] = "Jobtype Management";
        $this->load->view('admin/jobtype/index', $data);
    }

    public function showAllJobtype()
    {
        $result = $this->M_Jobtype->showAllJobtype();
        echo json_encode($result);
    }

    public function addJobtype()
    {
        $result = $this->M_Jobtype->addJobtype();
        $msg['type'] = 'add';
        $msg['success'] = false;
        if ($result) {
            $msg['success'] = true;
        }

        echo json_encode($msg);
    }

    public function editJobtype()
    {
        $result = $this->M_Jobtype->editJobtype();
        echo json_encode($result);
    }

    public function updateJobtype()
    {
        $result = $this->M_Jobtype->updateJobtype();
        $msg['success'] = false;
        $msg['type'] = 'edit';
        if ($result) {
            $msg['success'] = true;
        }

        echo json_encode($msg);
    }

    public function deleteJobtype()
    {
        $result = $this->M_Jobtype->deleteJobtype();
        $msg['success'] = false;
        if ($result) {
            $msg['success'] = true;
        }
        // var_dump($result);
        echo json_encode($msg);
    }
}

/* End of file Jobtype.php */
/* Location: ./application/controllers/Jobtype.php */