<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Account extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('M_User');
        $this->load->model('M_Country');
        $this->load->model('M_Categories');
        $this->load->model('M_Jobvacancy');
        $this->load->model('M_Article');
        $this->load->model('M_Site');
        $this->load->model('M_Jobtype');
        $this->site_settings = $this->M_Site->showAllSite();
    }
    public function index()
    {
        $data['profile'] = $this->M_User->getMyAccount();
        $data['title'] = $data['profile']->name;
        $profile_picture = $data['profile']->profile_picture;
        if ($this->input->method() === 'post') {

            // if (isset($_FILES["profile_picture"]["name"])) {

                $config['upload_path']          = './images/profile/';
                $config['allowed_types']        = 'jpg|png|jpeg|JPG';
                $config['overwrite']            = TRUE;
                $config['remove_spaces']        = TRUE;
                $config['encrypt_name']         = TRUE;
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('profile_picture')) {
                  $image = $profile_picture;
               
                } else {
                    $gbr = $this->upload->data();
                    $image = $gbr['file_name'];
            
                }
            // }

            $this->form_validation->set_rules('name', 'Name', 'trim|required');
            $this->form_validation->set_rules('position', 'Position', 'trim');
            $this->form_validation->set_rules('company', 'Company', 'trim');
            $this->form_validation->set_rules('twitter', 'Twitter', 'trim');
            $this->form_validation->set_rules('instagram', 'Intagram', 'trim');
            $this->form_validation->set_rules('linkedin', 'Linkedin', 'trim');

            if ($this->form_validation->run() == TRUE) {
                $this->M_User->updateProfile($image);
                $this->session->set_flashdata('message', 'success');
                redirect('account');
            } else {
                $this->session->set_flashdata('message', 'failed');
            }
        }
        $this->load->view('user/profile', $data);
    }

    //Articles

    public function myArticles()
    {
        $data['title'] = "My Article";
        $data['dataCategories'] = $this->M_Categories->showAllCategories();
        $this->load->view('user/article/index', $data);
    }

    public function writeArticle()
    {
        $data['title'] = "Write Articles";
        $data['dataCategories'] = $this->M_Categories->showAllCategories();
        $data['profile'] = $this->M_User->getMyAccount();
        if ($this->input->method() === 'post') {

            if (isset($_FILES["image"]["name"])) {

               $config['upload_path']          = FCPATH . '/images/article/';
                $config['allowed_types']        = 'gif|jpg|jpeg|png';
                $config['max_size']             = 10240;
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('image')) {
                    $image = 'default.png';
                } else {
                    $gbr = $this->upload->data();
                    $image = $gbr['file_name'];
                }
            }

            $this->form_validation->set_rules('title', 'Title', 'trim|required');

            if ($this->form_validation->run() == TRUE) {
                $this->M_Article->addArticle($image);
                $this->session->set_flashdata('message', 'success');
                redirect('account/myArticles');
            } else {
                $this->session->set_flashdata('message', 'failed');
            }
        }
        $this->load->view('user/article/write_article', $data);
    }

    //Jobs
    public function jobs()
    {
        $data['title'] = "Job Vacancies";
        $this->load->view('user/jobvacancy/index', $data);
    }

    public function myJobvacancy()
    {
        $data['title'] = "My Job Vacancy";
        $data['dataCategories'] = $this->M_Categories->showAllCategories();
        $this->load->view('user/jobvacancy/my_job_vacancy', $data);
    }

    public function writeJobvacancy()
    {
        $data['title'] = "Write Job Vacancy";
        $data['dataJobtype'] = $this->M_Jobtype->showAllJobtype();
        $data['profile'] = $this->M_User->getMyAccount();
        if ($this->input->method() === 'post') {

            $this->form_validation->set_rules('position', 'Position', 'trim|required');
            $this->form_validation->set_rules('location', 'Location', 'trim|required');
            $this->form_validation->set_rules('company', 'Company', 'trim|required');

            if ($this->form_validation->run() == TRUE) {
                $this->M_Jobvacancy->addJobvacancy();
                $this->session->set_flashdata('message', 'success');
                redirect('account/myJobvacancy');
            } else {
                $this->session->set_flashdata('message', 'failed');
            }
        }
        $this->load->view('user/jobvacancy/write_jobvacancy', $data);
    }

    public function findUser()
    {
        $data['title'] = "Find Others";
        $data['dataCountries'] = $this->M_Country->showAllCountry();
        $data['dataUser'] = $this->M_User->showAllActiveUser();
        // var_dump($data['dataUser']);
        // die();
        $this->load->view('user/finduser', $data);
    }

    public function passwordUpdate()
    {
        $data['profile'] = $this->M_User->getMyAccount();

        $this->form_validation->set_rules('currentPassword', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('newPassword1', 'New Password', 'required|trim|min_length[3]|matches[newPassword2]');
        $this->form_validation->set_rules(
            'newPassword2',
            'Confirm New Password',
            'trim|min_length[3]|matches[newPassword1]',
            [
                'matches' => "Password doesn't match!"
            ]
        );

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', 'wrong-password');
            redirect('account');
        } else {
            $currentPassword = $this->input->post('currentPassword');
            $newPassword = $this->input->post('newPassword1');
            if (!password_verify($currentPassword, $data['profile']->password)) {
                $this->session->set_flashdata('message', 'wrong-password');
                redirect('account');
            } else {
                if ($currentPassword == $newPassword) {
                    $this->session->set_flashdata('message', 'same-password');
                    redirect('account');
                } else {
                    // password sudah ok
                    $password_hash = password_hash($newPassword, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');
                    $this->session->set_flashdata('message', 'success');
                    redirect('account');
                }
            }
        }
    }
}

/* End of file Country.php */
/* Location: ./application/controllers/Country.php */