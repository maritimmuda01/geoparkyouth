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
        $this->load->model('M_pages');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['dataPageAbout'] = $this->db->get_where('pages', ['parent_id' => 1])->result();
        $data['dataPageYouth Forum'] = $this->db->get_where('pages', ['parent_id' => 2])->result();
        $data['site_settings'] = $this->db->get('site_settings')->row_array();
        $data['title'] = '';

        $this->load->view('home/index', $data);
    }

    public function media()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['site_settings'] = $this->db->get('site_settings')->row_array();
        $data['title'] = 'Media —';
        $data['dataArticles'] = $this->M_articles->select_published();
        $data['dataCategories'] = $this->M_categories->select_all();

        $this->load->view('home/media', $data);
    }

    public function single($id = null){

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['site_settings'] = $this->db->get('site_settings')->row_array();

        if (!isset($id)) redirect('errors');
        
        $data['dataArticles'] = $this->M_articles->select_single($id);
        
        if (!$data['dataArticles']) redirect('errors');

        $data['title'] = $data['dataArticles']['title'].' —';

        $this->load->view('home/single', $data);
    }

    public function about(){
        $data['site_settings'] = $this->db->get('site_settings')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'About —';

        $this->load->view('home/about', $data);
    }

    public function maritimmuda(){
        $data['site_settings'] = $this->db->get('site_settings')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Maritim Muda Nusantara —';

        $this->load->view('home/maritimmuda', $data);
    }

    public function globalgeoparknetwork(){
        $data['site_settings'] = $this->db->get('site_settings')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Global Geopark Network —';

        $this->load->view('home/globalgeoparknetwork', $data);
    }

    public function geopark(){
        $data['site_settings'] = $this->db->get('site_settings')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Geopark —';

        $this->load->view('home/geopark', $data);
    }

    public function unescoggyf(){
        $data['site_settings'] = $this->db->get('site_settings')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'UNESCO Global Geoparks Youth Forum —';

        $this->load->view('home/unescoggyf', $data);
    }

    public function pages($id = null){

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['site_settings'] = $this->db->get('site_settings')->row_array();

        if (!isset($id)) redirect('errors');
        
        $data['dataPages'] = $this->M_pages->select_single($id);
        
        if (!$data['dataPages']) redirect('errors');

        $data['title'] = $data['dataPages']['title'].' —';

        $this->load->view('home/page', $data);
    }

}
