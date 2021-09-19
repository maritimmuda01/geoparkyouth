<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        
        $this->load->library('form_validation');
        $this->load->model('M_articles');
        $this->load->model('M_country');
        $this->load->model('M_categories');
        $this->load->model('M_user');   
        $this->load->model('M_jobs');    
 
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['total_account'] = count($this->M_user->select_all());
        $data['total_articles'] = $this->M_articles->total_articles();
        $data['total_jobs'] = $this->M_jobs->total_jobs();

        $this->load->view('admin/index', $data);
    }

    //User
    public function user_management()
    {
        $data['title'] = 'User Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['dataUser'] = $this->M_user->select_all();
        $data['dataCountry'] = $this->M_country->select_all();

        $this->load->view('admin/user/index', $data);
    }

    public function user_role_to_admin($id)
    {
        if (!isset($id)) redirect('admin/user_management');

        if ($this->M_user->user_role_to_admin($id)) {
            $this->session->set_flashdata('message', 'success');
            redirect(site_url('admin/user_management'));
        }
    } 

    public function user_role_to_user($id)
    {
        if (!isset($id)) redirect('admin/user_management');

        if ($this->M_user->user_role_to_user($id)) {
            $this->session->set_flashdata('message', 'success');
            redirect(site_url('admin/user_management'));
        }
    } 

    public function user_delete($id = null)
    {
        if (!isset($id)) redirect('admin/user_management');

        if ($this->M_user->user_delete($id)) {
            $this->session->set_flashdata('message', 'deleted');
            redirect(site_url('admin/user_management'));
        }
    }

    //Jobs
    public function jobs_management()
    {
        $data['title'] = 'jobs Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['dataJobs'] = $this->M_jobs->select_all();
        $data['dataCategories'] = $this->M_categories->select_all();
        $data['dataCountry'] = $this->M_country->select_all();

        // var_dump($data['datajobs']);
        // exit();

        $this->load->view('admin/jobs/index', $data);
    }

    public function jobs_publish($id = null)
    {
        if (!isset($id)) redirect('admin/jobs_management');

        if ($this->M_jobs->jobs_publish($id)) {

            $data['jobs'] = $this->db->get_where('jobs', ['id' => $id])->row_array();
            $title = $data['jobs']['title'];
            $receiver_id = $data['jobs']['author_id'];

            $text = "Your jobs post has been approved and published!";
            $sql = [
                    'text'  => $text,
                    'type'  => "jobs",
                    'type_color' => "success",
                    'type_icon' => "newspaper",
                    'receiver_id' => $receiver_id,
                    'is_read' => 0        
                ];
            $this->db->insert('notifications', $sql);   

            $this->session->set_flashdata('message', 'success');
            redirect(site_url('admin/jobs_management'));
        }
    } 

    public function jobs_unpublish($id = null)
    {
        if (!isset($id)) redirect('admin/jobs_management');

        if ($this->M_jobs->jobs_unpublish($id)) {
            $data['jobs'] = $this->db->get_where('jobs', ['id' => $id])->row_array();
            $title = $data['jobs']['title'];
            $receiver_id = $data['jobs']['author_id'];

            $text = "Your job post has been unpublished by the administrator!";
            $sql = [
                    'text'  => $text,
                    'type'  => "jobs",
                    'type_color' => "danger",
                    'type_icon' => "newspaper",
                    'receiver_id' => $receiver_id,
                    'is_read' => 0        
                ];
            $this->db->insert('notifications', $sql);
            $this->session->set_flashdata('message', 'success');
            redirect(site_url('admin/jobs_management'));
        }
    } 

    public function jobs_delete($id = null)
    {
        if (!isset($id)) redirect('admin/jobs_management');

        if ($this->M_jobs->jobs_delete($id)) {
            $this->session->set_flashdata('message', 'deleted');
            redirect(site_url('admin/jobs_management'));
        }
    }

    //Articles
    public function articles_management()
    {
        $data['title'] = 'Articles Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['dataArticles'] = $this->M_articles->select_all();
        $data['dataCategories'] = $this->M_categories->select_all();
        $data['dataCountry'] = $this->M_country->select_all();

        // var_dump($data['dataArticles']);
        // exit();

        $this->load->view('admin/articles/index', $data);
    }

    public function articles_publish($id = null)
    {
        if (!isset($id)) redirect('admin/articles_management');

        if ($this->M_articles->articles_publish($id)) {

            $data['article'] = $this->db->get_where('articles', ['id' => $id])->row_array();
            $title = $data['article']['title'];
            $receiver_id = $data['article']['author_id'];

            $text = "Your article <b>".$title."</b> has been approved and published!";
            $sql = [
                    'text'  => $text,
                    'type'  => "articles",
                    'type_color' => "success",
                    'type_icon' => "newspaper",
                    'receiver_id' => $receiver_id,
                    'is_read' => 0        
                ];
            $this->db->insert('notifications', $sql);   

            $this->session->set_flashdata('message', 'success');
            redirect(site_url('admin/articles_management'));
        }
    } 

    public function articles_unpublish($id = null)
    {
        if (!isset($id)) redirect('admin/articles_management');

        if ($this->M_articles->articles_unpublish($id)) {
            $data['article'] = $this->db->get_where('articles', ['id' => $id])->row_array();
            $title = $data['article']['title'];
            $receiver_id = $data['article']['author_id'];

            $text = "Your article <b>".$title."</b> has been unpublished by the administrator!";
            $sql = [
                    'text'  => $text,
                    'type'  => "articles",
                    'type_color' => "danger",
                    'type_icon' => "newspaper",
                    'receiver_id' => $receiver_id,
                    'is_read' => 0        
                ];
            $this->db->insert('notifications', $sql);
            $this->session->set_flashdata('message', 'success');
            redirect(site_url('admin/articles_management'));
        }
    } 

    public function articles_delete($id = null)
    {
        if (!isset($id)) redirect('admin/articles_management');

        if ($this->M_articles->articles_delete($id)) {
            $this->session->set_flashdata('message', 'deleted');
            redirect(site_url('admin/articles_management'));
        }
    }

    //Categories
    public function categories()
    {
        $data['title'] = 'Categories Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('admin/categories/index', $data);
    }

    public function showAllCategories(){
        $result = $this->M_categories->showAllCategories();
        echo json_encode($result);
    }

    function addCategories(){
        $result = $this->M_categories->addCategories();
        $msg['type'] = 'add';
        $msg['success'] = false;
        if ($result) {
            $msg['success'] = true;
        }

        echo json_encode($msg);
    }

    public function editCategories(){
        $result = $this->M_categories->editCategories();
        echo json_encode($result);
    }

    public function updateCategories(){
        $result = $this->M_categories->updateCategories();
        $msg['success'] = false;
        $msg['type'] = 'edit';
        if ($result) {
            $msg['success'] = true;
        }

        echo json_encode($msg);

    }

    public function deleteCategories(){
        $result = $this->M_categories->deleteCategories();
        $msg['success'] = false;
        if($result){
            $msg['success'] = true;
        }
        // var_dump($result);
        echo json_encode($msg);
    }

    //Role
    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templates/footer');
    }


    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer');
    }


    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access Changed!</div>');
    }
}
