<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('M_country');
        $this->load->model('M_news');
    }

    public function index(){

        $data['title'] = 'News';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['dataNews'] = $this->M_news->select_all();

        $this->load->view('news/index', $data);
    }

    public function add(){
        $data['title'] = 'News';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('news/add', $data); 
    }

    public function news_add_process(){

        $this->form_validation->set_rules('title', 'Title', 'trim|required');

        $data = $this->input->post();
        if ($this->form_validation->run() == TRUE) {
            $result = $this->M_news->insert($data);

            if ($result > 0) {
                $out['status'] = '';
                $out['msg'] = show_succ_msg('Data Kelas Berhasil ditambahkan', '20px');
            } else {
                $out['status'] = '';
                $out['msg'] = show_err_msg('Data Kelas Gagal ditambahkan', '20px');
            }
        } else {
            $out['status'] = 'form';
            $out['msg'] = show_err_msg(validation_errors());
        }

        echo json_encode($out);
    }
};
?>