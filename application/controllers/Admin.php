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
            $this->session->set_flashdata('message', 'success');
            redirect(site_url('admin/articles_management'));
        }
    } 

    public function articles_unpublish($id = null)
    {
        if (!isset($id)) redirect('admin/articles_management');

        if ($this->M_articles->articles_unpublish($id)) {
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
