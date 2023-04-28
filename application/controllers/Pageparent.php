<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pageparent extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('M_Parent');
        $this->load->model('M_Site');
        $this->site_settings = $this->M_Site->showAllSite();
    }

    public function index()
    {
        $data['title'] = "Page Parent Management";
        $this->load->view('admin/parent/index', $data);
    }

    public function siteSettings()
    {
        $data['title'] = "Site Settings";
        $data['dataSiteSettings'] = $this->M_Parent->showAllSiteSettings();

        if ($this->input->method() === 'post') {

            if (isset($_FILES["logo"]["name"])) {
                $config['upload_path']          = './images/site_settings/';
                $config['allowed_types']        = 'jpg|png|jpeg';
                $config['overwrite']            = TRUE;
                $config['remove_spaces']        = TRUE;
                $config['encrypt_name']         = TRUE;

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('logo')) {
                    $logo = $data['dataSiteSettings']->logo;
                } else {
                    $gbr = $this->upload->data();
                    $logo = $gbr['file_name'];
                }
            }

            $this->form_validation->set_rules('title', 'Title', 'trim|required');
            $this->form_validation->set_rules('description', 'Description', 'trim|required');
            $this->form_validation->set_rules('footer_text', 'Footer Text', 'trim|required');
            $this->form_validation->set_rules('instagram', 'Instagram', 'trim|required');
            $this->form_validation->set_rules('facebook', 'Facebook', 'trim|required');

            if ($this->form_validation->run() == TRUE) {
                $this->M_Parent->editSiteSettings($logo);
                $this->session->set_flashdata('message', 'success');
                redirect('pageparent/siteSettings');
            } else {
                $this->session->set_flashdata('message', 'failed');
            }
        }

        $this->load->view('admin/site_settings/index', $data);
    }

    public function showAllPageparent()
    {
        $result = $this->M_Parent->showAllPageparent();
        echo json_encode($result);
    }

    public function addPageparent()
    {
        $result = $this->M_Parent->addPageparent();
        $msg['type'] = 'add';
        $msg['success'] = false;
        if ($result) {
            $msg['success'] = true;
        }

        echo json_encode($msg);
    }

    public function editPageparent()
    {
        $result = $this->M_Parent->editPageparent();
        echo json_encode($result);
    }

    public function updatePageparent()
    {
        $result = $this->M_Parent->updatePageparent();
        $msg['success'] = false;
        $msg['type'] = 'edit';
        if ($result) {
            $msg['success'] = true;
        }

        echo json_encode($msg);
    }

    public function deletePageparent()
    {
        $result = $this->M_Parent->deletePageparent();
        $msg['success'] = false;
        if ($result) {
            $msg['success'] = true;
        }
        // var_dump($result);
        echo json_encode($msg);
    }
}

/* End of file Pageparent.php */
/* Location: ./application/controllers/Pageparent.php */