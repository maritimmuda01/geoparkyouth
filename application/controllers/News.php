<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
        $this->load->model('M_news');
        $this->load->model('M_country');
    }

    public function index()
    {
        $data['title'] = 'News';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['dataNews'] = $this->M_news->select_all();

        $this->load->view('news/index', $data);
    }

    public function write_news()
    {
        $data['title'] = 'Write News';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('news/add', $data);
    }

    public function add_news()
    {   
        $author['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data   = $this->input->post();
        
        $this->form_validation->set_rules('title', 'Title', 'trim|required');
        $this->form_validation->set_rules('content', 'content', 'trim|requires');

        $sql = [
                'title'         => $this->input->post('title'),
                'content'       => $this->input->post('content'),
                'author_id'     => $author['user']['id'],
                'date'          => date('Y-m-d'),
                'image'         => 'default.jpeg',
                'time'          =>time()    
            ];

        $this->db->insert('news', $sql);

        redirect('news');



        // $sql = "INSERT INTO news VALUES ('', '" .$title."',
    }
}