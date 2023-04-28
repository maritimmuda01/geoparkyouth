<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('M_User');
        $this->load->model('M_Country');
        $this->load->model('M_Article');
        $this->load->model('M_Jobvacancy');
        $this->load->model('M_Site');
        $this->load->model('M_Geoparks');
        $this->site_settings = $this->M_Site->showAllSite();
    }

    public function index()
    {
        $data['title'] = "Dashboard";
        $data['profile'] = $this->M_User->getMyAccount();

        $data['User'] = $this->M_User->showAllActiveUser();
        $data['Country'] = $this->M_Country->showAllCountry();
        $data['Geopark'] = $this->M_Geoparks->showAllGeoparks();
        $data['Articles'] = $this->M_Article->showAllPublishedArticle();
        $data['Jobvacancies'] = $this->M_Jobvacancy->showAllPublishedJobvacancy();
        $data['PendingArticles'] = $this->M_Article->showAllPendingArticle();

        // rsort($data['userPerCountry']);

        $this->load->view('index', $data);
    }
}

/* End of file Country.php */
/* Location: ./application/controllers/Country.php */