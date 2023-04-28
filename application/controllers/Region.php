<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Region extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('M_Region');
        $this->load->model('M_Site');
        $this->site_settings = $this->M_Site->showAllSite();
    }

    //Region
    public function index()
    {
        $data['profile'] = $this->M_User->getMyAccount();
        if ($data['profile']->role_id == 3) {
            redirect('geoparks/index/' . $data['profile']->id_country);
        }
        $data['title'] = "Region Management";
        $this->load->view('admin/region/index', $data);
    }

    public function showAllRegion()
    {
        $result = $this->M_Region->showAllRegion();
        echo json_encode($result);
    }

    public function addRegion()
    {
        $result = $this->M_Region->addRegion();
        $msg['type'] = 'add';
        $msg['success'] = false;
        if ($result) {
            $msg['success'] = true;
        }

        echo json_encode($msg);
    }

    public function editRegion()
    {
        $result = $this->M_Region->editRegion();
        echo json_encode($result);
    }

    public function updateRegion()
    {
        $result = $this->M_Region->updateRegion();
        $msg['success'] = false;
        $msg['type'] = 'edit';
        if ($result) {
            $msg['success'] = true;
        }

        echo json_encode($msg);
    }

    public function deleteRegion()
    {
        $result = $this->M_Region->deleteRegion();
        $msg['success'] = false;
        if ($result) {
            $msg['success'] = true;
        }
        // var_dump($result);
        echo json_encode($msg);
    }
}

/* End of file Region.php */
/* Location: ./application/controllers/Region.php */