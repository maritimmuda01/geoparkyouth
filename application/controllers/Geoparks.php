<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Geoparks extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('M_Geoparks');
        $this->load->model('M_Country');
        $this->load->model('M_Geotype');
        $this->load->model('M_Site');
        $this->site_settings = $this->M_Site->showAllSite();
    }

    public function index($id)
    {
        $data['id'] = $id;
        $data['thisCountry'] = $this->M_Country->showAllCountryById($id);
        $data['title'] = "Geoparks Management";
        $data['dataCountry'] = $this->M_Country->showAllCountry();
        $data['dataGeotype'] = $this->M_Geotype->showAllGeotype();
        $this->load->view('admin/geoparks/index', $data);
    }

    public function showAllGeoparks()
    {
        $result = $this->M_Geoparks->showAllGeoparks();
        echo json_encode($result);
    }

    public function showAllGeoparksById($id)
    {
        $result = $this->M_Geoparks->showAllGeoparksById($id);
        echo json_encode($result);
    }

    public function showAllGeoparksByCountryId($id)
    {
        $result = $this->M_Geoparks->showAllGeoparksByCountryId($id);
        echo json_encode($result);
    }

    public function addGeoparks($id)
    {
        $config['upload_path'] = "./images/geoparks/";
        $config['allowed_types'] = 'gif|jpg|png';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload("image")) {
            $data = array('upload_data' => $this->upload->data());

            $image = $data['upload_data']['file_name'];
        } else {
            $image = 'default.png';
        }

        $result = $this->M_Geoparks->addGeoparks($image, $id);

        $msg['type'] = 'add';
        $msg['success'] = false;
        if ($result) {
            $msg['success'] = true;
            echo json_encode($msg);
        } else {
            $msg['success'] = false;
        }
    }

    public function editGeoparks()
    {

        $result = $this->M_Geoparks->editGeoparks();
        echo json_encode($result);
    }

    public function updateGeoparks()
    {
        $config['upload_path'] = "./images/geoparks/";
        $config['allowed_types'] = 'gif|jpg|png';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload("image")) {
            $data = array('upload_data' => $this->upload->data());

            $image = $data['upload_data']['file_name'];
        } else {
            $old_image = $this->db->get_where('geoname', ['id_geoname' => $this->input->post('Id')])->row_array();
            $image = $old_image['image'];
        }

        $result = $this->M_Geoparks->updateGeoparks($image);
        $msg['success'] = false;
        $msg['type'] = 'edit';
        if ($result) {
            $msg['success'] = true;
        }

        echo json_encode($msg);

        //
    }

    public function deleteGeoparks()
    {
        $result = $this->M_Geoparks->deleteGeoparks();
        $msg['success'] = false;
        if ($result) {
            $msg['success'] = true;
        }
        // var_dump($result);
        echo json_encode($msg);
    }
}

/* End of file Geoparks.php */
/* Location: ./application/controllers/Geoparks.php */