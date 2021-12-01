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
        $data['dataPageYouthForum'] = $this->db->get_where('pages', ['parent_id' => 2])->result();
        $data['site_settings'] = $this->db->get('site_settings')->row_array();
        $data['title'] = '';

        $this->load->view('home/index', $data);
    }

    public function media()
    {
        
        $data['dataPageAbout'] = $this->db->get_where('pages', ['parent_id' => 1])->result();
        $data['dataPageYouthForum'] = $this->db->get_where('pages', ['parent_id' => 2])->result();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['site_settings'] = $this->db->get('site_settings')->row_array();
        $data['title'] = 'Media —';
        $data['dataArticles'] = $this->M_articles->select_published();
        $data['dataCategories'] = $this->M_categories->select_all();

        $this->load->view('home/media', $data);
    }

    public function single($id = null){

        $data['dataPageAbout'] = $this->db->get_where('pages', ['parent_id' => 1])->result();
        $data['dataPageYouthForum'] = $this->db->get_where('pages', ['parent_id' => 2])->result();

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['site_settings'] = $this->db->get('site_settings')->row_array();

        if (!isset($id)) redirect('errors');
        
        $data['dataArticles'] = $this->M_articles->select_single($id);
        $data['dataArticlesLatest'] = $this->M_articles->select_published();
        
        if (!$data['dataArticles']) redirect('errors');

        $data['title'] = $data['dataArticles']['title'].' —';

        $this->load->view('home/single', $data);
    }

    public function pages($id = null){

        $data['dataPageAbout'] = $this->db->get_where('pages', ['parent_id' => 1])->result();
        $data['dataPageYouthForum'] = $this->db->get_where('pages', ['parent_id' => 2])->result();

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['site_settings'] = $this->db->get('site_settings')->row_array();

        if (!isset($id)) redirect('errors');
        
        $data['dataPages'] = $this->M_pages->select_single($id);
        
        if (!$data['dataPages']) redirect('errors');

        $data['title'] = $data['dataPages']['title'].' —';

        $this->load->view('home/page', $data);
    }

    public function countries(){

        
        $data['dataPageYouthForum'] = $this->db->get_where('pages', ['parent_id' => 2])->result();

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['site_settings'] = $this->db->get('site_settings')->row_array();
        
        $data['dataRegion'] = $this->M_country->select_region();

        $data['title'] = 'List per Country —';

        $this->load->view('home/countries', $data);
    }

    public function geoname($id = null){

        $data['dataPageAbout'] = $this->db->get_where('pages', ['parent_id' => 1])->result();
        $data['dataPageYouthForum'] = $this->db->get_where('pages', ['parent_id' => 2])->result();

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['site_settings'] = $this->db->get('site_settings')->row_array();
        
        if (!isset($id)) redirect('errors');

        $data['dataGeotype'] = $this->M_country->select_type();
        
        $data['dataGeoname'] = $this->M_country->select_geoname_country($id);
        
        if (!$data['dataGeoname']) redirect('errors');

        $data['country_by_id'] = $this->db->get_where('country', ['iso' => $id])->row_array();

        $data['title'] = $data['country_by_id']['nicename'].' —';

        $this->load->view('home/geoname', $data);
    }

}
