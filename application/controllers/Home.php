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
    }

    public function index()
    {
        $data['title'] = '';

        $this->load->view('home/index', $data);
    }

    public function media()
    {
        $data['title'] = 'Media |';
        $data['dataNews'] = $this->M_articles->select_published();

        $this->load->view('home/media', $data);
    }

}
