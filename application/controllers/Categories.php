<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categories extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('M_Categories');
        $this->load->model('M_Site');
        $this->site_settings = $this->M_Site->showAllSite();
    }

    //Categories
    public function index()
    {
        $data['title'] = "Categories Management";
        $this->load->view('admin/categories/index', $data);
    }

    public function showAllCategories()
    {
        $result = $this->M_Categories->showAllCategories();
        echo json_encode($result);
    }

    public function addCategories()
    {
        $result = $this->M_Categories->addCategories();
        $msg['type'] = 'add';
        $msg['success'] = false;
        if ($result) {
            $msg['success'] = true;
        }

        echo json_encode($msg);
    }

    public function editCategories()
    {
        $result = $this->M_Categories->editCategories();
        echo json_encode($result);
    }

    public function updateCategories()
    {
        $result = $this->M_Categories->updateCategories();
        $msg['success'] = false;
        $msg['type'] = 'edit';
        if ($result) {
            $msg['success'] = true;
        }

        echo json_encode($msg);
    }

    public function deleteCategories()
    {
        $result = $this->M_Categories->deleteCategories();
        $msg['success'] = false;
        if ($result) {
            $msg['success'] = true;
        }
        // var_dump($result);
        echo json_encode($msg);
    }
}

/* End of file Categories.php */
/* Location: ./application/controllers/Categories.php */