<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jobs extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('M_country');
        $this->load->model('M_jobs');
    }

    public function index(){

        $data['title'] = 'Job';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['dataJobs'] = $this->M_jobs->select_published();

        $this->load->view('jobs/index', $data);
    }
};
?>