<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('M_Pages');
        $this->load->model('M_Parent');
        $this->load->model('M_Site');
        $this->site_settings = $this->M_Site->showAllSite();
    }

    public function index($id)
    {
        $data['id'] = $id;
        $data['thisParent'] = $this->M_Parent->showAllPageparentById($id);
        $data['title'] = "Pages Management";
        $data['dataParent'] = $this->M_Parent->showAllPageparent();
        $this->load->view('admin/pages/index', $data);
    }

    public function showAllPages()
    {
        $result = $this->M_Pages->showAllPages();
        echo json_encode($result);
    }

    public function showAllPagesById($id)
    {
        $result = $this->M_Pages->showAllPagesById($id);
        echo json_encode($result);
    }

    public function showAllPagesByPageparentId($id)
    {
        $result = $this->M_Pages->showAllPagesByPageparentId($id);
        echo json_encode($result);
    }

    public function addPages($id)
    {
        $config['upload_path'] = "./images/pages/";
        $config['allowed_types'] = 'gif|jpg|png';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload("image")) {
            $data = array('upload_data' => $this->upload->data());

            $image = $data['upload_data']['file_name'];

            $result = $this->M_Pages->addPages($image, $id);
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

    public function editPages()
    {

        $result = $this->M_Pages->editPages();
        echo json_encode($result);
    }

    public function updatePages()
    {
        $config['upload_path'] = "./images/pages/";
        $config['allowed_types'] = 'gif|jpg|png';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload("image")) {
            $data = array('upload_data' => $this->upload->data());

            $image = $data['upload_data']['file_name'];
        } else {
            $old_image = $this->db->get_where('pages', ['id_pages' => $this->input->post('Id')])->row_array();
            $image = $old_image['image'];
        }

        $result = $this->M_Pages->updatePages($image);
        $msg['success'] = false;
        $msg['type'] = 'edit';
        if ($result) {
            $msg['success'] = true;
        }

        echo json_encode($msg);

        //
    }

    public function deletePages()
    {
        $result = $this->M_Pages->deletePages();
        $msg['success'] = false;
        if ($result) {
            $msg['success'] = true;
        }
        // var_dump($result);
        echo json_encode($msg);
    }

    public function upPages()
    {
        $result = $this->M_Pages->upPages();
        $msg['success'] = false;
        if ($result) {
            $msg['success'] = true;
        }
        // var_dump($result);
        echo json_encode($msg);
    }

    public function downPages()
    {
        $result = $this->M_Pages->downPages();
        $msg['success'] = false;
        if ($result) {
            $msg['success'] = true;
        }
        // var_dump($result);
        echo json_encode($msg);
    }
}
