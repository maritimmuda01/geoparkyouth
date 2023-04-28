<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jobvacancy extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('M_Jobvacancy');
        $this->load->model('M_Categories');
        $this->load->model('M_Site');
        $this->site_settings = $this->M_Site->showAllSite();
    }

    public function index()
    {
        $data['title'] = "Published Jobvacancy";
        $data['profile'] = $this->M_User->getMyAccount();
        $this->load->view('admin/jobvacancy/index', $data);
    }

    public function pending()
    {
        $data['title'] = "Pending Jobvacancy";
        $data['profile'] = $this->M_User->getMyAccount();
        $this->load->view('admin/jobvacancy/pending', $data);
    }


    public function showAllPublishedJobvacancy()
    {
        $result = $this->M_Jobvacancy->showAllPublishedJobvacancy();
        echo json_encode($result);
    }

    public function showAllPublishedJobvacancyByCountry($id)
    {
        $result = $this->M_Jobvacancy->showAllPublishedJobvacancy($id);
        echo json_encode($result);
    }

    public function showAllPendingJobvacancy()
    {
        $result = $this->M_Jobvacancy->showAllPendingJobvacancy();
        echo json_encode($result);
    }

    public function showAllPendingJobvacancyByCountry($id)
    {
        $result = $this->M_Jobvacancy->showAllPendingJobvacancyByCountry($id);
        echo json_encode($result);
    }

    public function showAllJobvacancyById($id)
    {
        $result = $this->M_Jobvacancy->showAllJobvacancyById($id);
        echo json_encode($result);
    }

    public function showAllJobvacancyByCountryId($id)
    {
        $result = $this->M_Jobvacancy->showAllJobvacancyByCountryId($id);
        echo json_encode($result);
    }

    public function showAllJobvacancyByUser()
    {
        $result = $this->M_Jobvacancy->showAllJobvacancyByUser();
        echo json_encode($result);
    }

    public function editJobvacancy()
    {

        $result = $this->M_Jobvacancy->editJobvacancy();
        echo json_encode($result);
    }

    public function publishJobvacancy()
    {

        $result = $this->M_Jobvacancy->publishJobvacancy();
        echo json_encode($result);
    }

    public function unpublishJobvacancy()
    {

        $result = $this->M_Jobvacancy->unpublishJobvacancy();
        echo json_encode($result);
    }

    public function deleteJobvacancy()
    {
        $result = $this->M_Jobvacancy->deleteJobvacancy();
        $msg['success'] = false;
        if ($result) {
            $msg['success'] = true;
        }
        // var_dump($result);
        echo json_encode($msg);
    }
}

/* End of file Jobvacancy.php */
/* Location: ./application/controllers/Jobvacancy.php */