<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pageimage extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('M_Pageimage');
        $this->load->model('M_Pages');
        $this->load->model('M_Site');
        $this->site_settings = $this->M_Site->showAllSite();
    }

    public function index($id)
    {
        $data['id'] = $id;
        $data['thisPage'] = $this->M_Pages->showAllPagesById($id);
        $data['title'] = "Page Images Management";
        // $data['dataPage'] = $this->M_Pages->showAllPage();
        $this->load->view('admin/pageimage/index', $data);
    }

    public function showAllPageimage()
    {
        $result = $this->M_Pageimage->showAllPageimage();
        echo json_encode($result);
    }

    public function showAllPageimageById($id)
    {
        $result = $this->M_Pageimage->showAllPageimageById($id);
        echo json_encode($result);
    }

    public function showAllPageimageByPageId($id)
    {
        $result = $this->M_Pageimage->showAllPageimageByPageId($id);
        echo json_encode($result);
    }

    public function addPageimage($id)
    {
        $config['upload_path'] = "./images/pageimage/";
        $config['allowed_types'] = 'gif|jpg|png';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload("image")) {
            $data = array('upload_data' => $this->upload->data());

            $image = $data['upload_data']['file_name'];
            $result = $this->M_Pageimage->addPageimage($image, $id);

            $msg['type'] = 'add';
            $msg['success'] = false;
            if ($result) {
                $msg['success'] = true;
            }
            echo json_encode($msg);
        } else {
            $msg['success'] = false;
        }
    }

    public function editPageimage()
    {

        $result = $this->M_Pageimage->editPageimage();
        echo json_encode($result);
    }

    public function updatePageimage()
    {
        $config['upload_path'] = "./images/pageimage/";
        $config['allowed_types'] = 'gif|jpg|png';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload("image")) {
            $data = array('upload_data' => $this->upload->data());

            $image = $data['upload_data']['file_name'];
        } else {
            $old_image = $this->db->get_where('pageimage', ['id_pageimage' => $this->input->post('Id')])->row_array();
            $image = $old_image['image'];
        }

        $result = $this->M_Pageimage->updatePageimage($image);
        $msg['success'] = false;
        $msg['type'] = 'edit';
        if ($result) {
            $msg['success'] = true;
        }

        echo json_encode($msg);

        //
    }

    public function deletePageimage()
    {
        $result = $this->M_Pageimage->deletePageimage();
        $msg['success'] = false;
        if ($result) {
            $msg['success'] = true;
        }
        // var_dump($result);
        echo json_encode($msg);
    }
}

/* End of file Pageimage.php */
/* Location: ./application/controllers/Pageimage.php */