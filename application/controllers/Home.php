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
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = '';

        $this->load->view('home/index', $data);
    }

    public function media()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Media —';
        $data['dataArticles'] = $this->M_articles->select_published();
        $data['dataCategories'] = $this->M_categories->select_all();

        $this->load->view('home/media', $data);
    }

    public function single($id = null){

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        if (!isset($id)) redirect('errors');
        
        $data['dataArticles'] = $this->M_articles->select_single($id);
            
        if (!$data['dataArticles']) redirect('errors');

        $data['title'] = $data['dataArticles']['title'].' —';

        $this->load->view('home/single', $data);
    }

    public function about(){
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'About —';

        $this->load->view('home/about', $data);
    }

    public function maritimmuda(){
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Maritim Muda Nusantara —';

        $this->load->view('home/maritimmuda', $data);
    }

    public function globalgeoparknetwork(){
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Global Geopark Network —';

        $this->load->view('home/globalgeoparknetwork', $data);
    }

}
