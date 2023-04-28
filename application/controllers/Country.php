<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Country extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('M_Country');
        $this->load->model('M_Region');
        $this->load->model('M_Site');
        $this->site_settings = $this->M_Site->showAllSite();
    }

    public function index($id)
    {
        $data['profile'] = $this->M_User->getMyAccount();
        if ($data['profile']->role_id == 3) {
            redirect('geoparks/index/' . $data['profile']->id_country);
        }
        $data['id'] = $id;
        $data['thisRegion'] = $this->M_Region->showAllRegionById($id);
        $data['title'] = "Countries Management";
        $data['dataRegion'] = $this->M_Region->showAllRegion();
        $this->load->view('admin/country/index', $data);
    }

    public function showAllCountry()
    {
        $result = $this->M_Country->showAllCountry();
        echo json_encode($result);
    }

    public function showAllCountryById($id)
    {
        $result = $this->M_Country->showAllCountryById($id);
        echo json_encode($result);
    }

    public function showAllCountryByRegionId($id)
    {
        $result = $this->M_Country->showAllCountryByRegionId($id);
        echo json_encode($result);
    }

    public function addCountry($id)
    {
        $config['upload_path'] = "./images/country/";
        $config['allowed_types'] = 'gif|jpg|png';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload("logo")) {
            $data = array('upload_data' => $this->upload->data());

            $image = $data['upload_data']['file_name'];
        } else {
            $image = 'default.png';
        }
        $result = $this->M_Country->addCountry($image, $id);
        $msg['type'] = 'add';
        $msg['success'] = false;
        if ($result) {
            $msg['success'] = true;
            echo json_encode($msg);
        } else {
            $msg['success'] = false;
        }
    }

    public function editCountry()
    {

        $result = $this->M_Country->editCountry();
        echo json_encode($result);
    }

    public function updateCountry()
    {
        $config['upload_path'] = "./images/country/";
        $config['allowed_types'] = 'gif|jpg|png';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload("logo")) {
            $data = array('upload_data' => $this->upload->data());

            $image = $data['upload_data']['file_name'];
        } else {
            $old_image = $this->db->get_where('country', ['id_country' => $this->input->post('Id')])->row_array();
            $image = $old_image['logo'];
        }

        $result = $this->M_Country->updateCountry($image);
        $msg['success'] = false;
        $msg['type'] = 'edit';
        if ($result) {
            $msg['success'] = true;
        }

        echo json_encode($msg);

        //
    }

    public function deleteCountry()
    {
        $result = $this->M_Country->deleteCountry();
        $msg['success'] = false;
        if ($result) {
            $msg['success'] = true;
        }
        // var_dump($result);
        echo json_encode($msg);
    }
}

/* End of file Country.php */
/* Location: ./application/controllers/Country.php */