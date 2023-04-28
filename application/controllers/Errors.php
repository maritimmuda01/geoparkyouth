<?php
class Errors extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Site');
        $this->site_settings = $this->M_Site->showAllSite();
    }

    public function index()
    {
        $data['title'] = "Page not Found";
        $this->load->view('errors/html/error_404', $data);
    }
}
