<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_articles');
        $this->load->model('M_country'); 
        $this->load->model('M_user');
        $this->load->model('M_categories');    
    }

    public function index()
    {
        $data['title'] = '';

        $this->load->view('home/index', $data);
    }

    public function media()
    {
        $data['title'] = 'Media —';
        $data['dataArticles'] = $this->M_articles->select_published();
        $data['dataCategories'] = $this->M_categories->select_all();

        $this->load->view('home/media', $data);
    }

    public function single($id = null){

        if (!isset($id)) redirect('errors');
        
        $data['dataArticles'] = $this->M_articles->select_single($id);
            
        if (!$data['dataArticles']) redirect('errors');

        $data['title'] = $data['dataArticles']['title'].' —';

        $this->load->view('home/single', $data);
    }

}
