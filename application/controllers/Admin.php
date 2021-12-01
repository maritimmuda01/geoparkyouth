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
        $this->load->model('M_pages');
    }

    public function index()
    {
        $data['site_settings'] = $this->db->get('site_settings')->row_array();
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user, country', ['user.email' => $this->session->userdata('email')], ['user.country' => 'country.iso'])->row_array();
        $data['dataCountry'] = $this->M_country->select_all();
        $data['total_account'] = count($this->M_user->select_all());
        $data['totalcountries'] = count($this->M_country->select_all());
        $data['totalUGG'] = count($this->M_country->select_UGG());
        $data['totalNAG'] = count($this->M_country->select_NAG());
        $data['totalASG'] = count($this->M_country->select_ASG());
        $data['total_articles'] = $this->M_articles->total_articles();
        $data['pending_articles'] = $this->M_articles->pending_articles();
        $data['pending_jobs'] = $this->M_jobs->pending_jobs();
        $data['total_jobs'] = $this->M_jobs->total_jobs();

        $this->load->view('admin/index', $data);
    }

    //User
    public function user_management()
    {
        $data['site_settings'] = $this->db->get('site_settings')->row_array();
        $data['title'] = 'User Management';
        $data['user'] = $this->db->get_where('user, country', ['user.email' => $this->session->userdata('email')], ['user.country' => 'country.iso'])->row_array();
        $data['dataUser'] = $this->M_user->select_all();
        $data['dataCountry'] = $this->M_country->select_all();
        $data['pending_articles'] = $this->M_articles->pending_articles();
        $data['pending_jobs'] = $this->M_jobs->pending_jobs();

        $this->load->view('admin/user/index', $data);
    }

    public function user_role_to_admin($id)
    {
        $data['site_settings'] = $this->db->get('site_settings')->row_array();
        $data['site_settings'] = $this->db->get('site_settings')->row_array();
        if (!isset($id)) redirect('admin/user_management');

        if ($this->M_user->user_role_to_admin($id)) {
            $this->session->set_flashdata('message', 'success');
            redirect(site_url('admin/user_management'));
        }
    } 

    public function user_role_to_user($id)
    {
        $data['site_settings'] = $this->db->get('site_settings')->row_array();
        if (!isset($id)) redirect('admin/user_management');

        if ($this->M_user->user_role_to_user($id)) {
            $this->session->set_flashdata('message', 'success');
            redirect(site_url('admin/user_management'));
        }
    } 

    public function user_delete($id = null)
    {
        $data['site_settings'] = $this->db->get('site_settings')->row_array();
        if (!isset($id)) redirect('admin/user_management');

        if ($this->M_user->user_delete($id)) {
            $this->session->set_flashdata('message', 'deleted');
            redirect(site_url('admin/user_management'));
        }
    }

    //Jobs
    public function jobs_management()
    {
        $data['site_settings'] = $this->db->get('site_settings')->row_array();
        $data['title'] = 'Jobs Management';
        $data['user'] = $this->db->get_where('user, country', ['user.email' => $this->session->userdata('email')], ['user.country' => 'country.iso'])->row_array();
        $data['dataJobs'] = $this->M_jobs->select_all();
        $data['dataCategories'] = $this->M_categories->select_all();
        $data['dataCountry'] = $this->M_country->select_all();
        $data['pending_articles'] = $this->M_articles->pending_articles();
        $data['pending_jobs'] = $this->M_jobs->pending_jobs();

        // var_dump($data['datajobs']);
        // exit();

        $this->load->view('admin/jobs/index', $data);
    }

    public function jobs_publish($id = null)
    {
        $data['site_settings'] = $this->db->get('site_settings')->row_array();
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
        $data['site_settings'] = $this->db->get('site_settings')->row_array();
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
        $data['site_settings'] = $this->db->get('site_settings')->row_array();
        if (!isset($id)) redirect('admin/jobs_management');

        if ($this->M_jobs->jobs_delete($id)) {
            $this->session->set_flashdata('message', 'deleted');
            redirect(site_url('admin/jobs_management'));
        }
    }

    //Articles
    public function articles_management()
    {
        $data['site_settings'] = $this->db->get('site_settings')->row_array();
        $data['title'] = 'Articles Management';
        $data['user'] = $this->db->get_where('user, country', ['user.email' => $this->session->userdata('email')], ['user.country' => 'country.iso'])->row_array();
        $data['dataArticles'] = $this->M_articles->select_all();
        $data['dataCategories'] = $this->M_categories->select_all();
        $data['dataCountry'] = $this->M_country->select_all();
        $data['pending_articles'] = $this->M_articles->pending_articles();
        $data['pending_jobs'] = $this->M_jobs->pending_jobs();

        // var_dump($data['dataArticles']);
        // exit();

        $this->load->view('admin/articles/index', $data);
    }

    public function articles_publish($id = null)
    {
        $data['site_settings'] = $this->db->get('site_settings')->row_array();
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
        $data['site_settings'] = $this->db->get('site_settings')->row_array();
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
        $data['site_settings'] = $this->db->get('site_settings')->row_array();
        if (!isset($id)) redirect('admin/articles_management');

        if ($this->M_articles->articles_delete($id)) {
            $this->session->set_flashdata('message', 'deleted');
            redirect(site_url('admin/articles_management'));
        }
    }

    //Categories
    public function categories()
    {
        $data['site_settings'] = $this->db->get('site_settings')->row_array();
        $data['title'] = 'Categories Management';
        $data['user'] = $this->db->get_where('user, country', ['user.email' => $this->session->userdata('email')], ['user.country' => 'country.iso'])->row_array();
        $data['pending_articles'] = $this->M_articles->pending_articles();
        $data['pending_jobs'] = $this->M_jobs->pending_jobs();
        $this->load->view('admin/categories/index', $data);
        
    }

    public function showAllCategories(){
        $data['site_settings'] = $this->db->get('site_settings')->row_array();
        $result = $this->M_categories->showAllCategories();
        echo json_encode($result);
    }

    public function addCategories(){
        $data['site_settings'] = $this->db->get('site_settings')->row_array();
        $result = $this->M_categories->addCategories();
        $msg['type'] = 'add';
        $msg['success'] = false;
        if ($result) {
            $msg['success'] = true;
        }

        echo json_encode($msg);
    }

    public function editCategories(){
        $data['site_settings'] = $this->db->get('site_settings')->row_array();
        $result = $this->M_categories->editCategories();
        echo json_encode($result);
    }

    public function updateCategories(){
        $data['site_settings'] = $this->db->get('site_settings')->row_array();
        $result = $this->M_categories->updateCategories();
        $msg['success'] = false;
        $msg['type'] = 'edit';
        if ($result) {
            $msg['success'] = true;
        }

        echo json_encode($msg);
    }

    public function deleteCategories(){
        $data['site_settings'] = $this->db->get('site_settings')->row_array();
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
        $data['site_settings'] = $this->db->get('site_settings')->row_array();
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user, country', ['user.email' => $this->session->userdata('email')], ['user.country' => 'country.iso'])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templates/footer');
    }


    public function roleAccess($role_id)
    {
        $data['site_settings'] = $this->db->get('site_settings')->row_array();
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user, country', ['user.email' => $this->session->userdata('email')], ['user.country' => 'country.iso'])->row_array();

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
        $data['site_settings'] = $this->db->get('site_settings')->row_array();
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

    public function site_settings()
    {
        $data['site_settings'] = $this->db->get('site_settings')->row_array();
        $data['title'] = 'Site Settings';
        $data['user'] = $this->db->get_where('user, country', ['user.email' => $this->session->userdata('email')], ['user.country' => 'country.iso'])->row_array();
        $data['pending_articles'] = $this->M_articles->pending_articles();
        $data['pending_jobs'] = $this->M_jobs->pending_jobs();
        $this->load->view('admin/site_settings/index', $data);
    }

    public function save_site_settings()
    {
        $user['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data   = $this->input->post();

        if(isset($_FILES["uploadArticles"]["name"]))
        {

            $config['upload_path']          = './assets/home/images/site_logo/';
            $config['allowed_types']        = 'jpg|png|jpeg|svg';
            $config['overwrite']            = TRUE;
            $config['remove_spaces']        = TRUE;
            $config['encrypt_name']         = TRUE;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;
            

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('uploadArticles')){
                $this->session->set_flashdata('message', 'failed');
            }else{

                $gbr = $this->upload->data();

                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/home/images/site_logo/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['new_image']= './assets/home/images/site_logo/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                

                $image=$gbr['file_name'];
                $sql = "UPDATE site_settings SET logo = '" .$image. "' WHERE id='1'";
                $this->db->query($sql);
            }

            $this->form_validation->set_rules('title', 'Title', 'trim|required');
            $this->form_validation->set_rules('description', 'Description', 'trim|required');

            $title = $this->input->post('title');
            $description = $this->input->post('description');

            $sql = "UPDATE site_settings SET title = '" .$title. "', description = '" .$description. "' WHERE id='1'";
            $this->db->query($sql);

            if ($this->form_validation->run() == TRUE) {
                $this->session->set_flashdata('message', 'success');
                redirect("admin/site_settings", $data);
            }else {
                $this->session->set_flashdata('message', 'failed');
                redirect("admin/site_settings", $data);
            }

            redirect('admin/site_settings');
        }
    }

    public function pages()
    {
        $data['site_settings'] = $this->db->get('site_settings')->row_array();
        $data['title'] = 'Pages Management';
        $data['user'] = $this->db->get_where('user, country', ['user.email' => $this->session->userdata('email')], ['user.country' => 'country.iso'])->row_array();
        $data['pending_articles'] = $this->M_articles->pending_articles();
        $data['pending_jobs'] = $this->M_jobs->pending_jobs();
        $data['dataPages'] = $this->M_pages->select_all();
        $this->load->view('admin/pages/index', $data);
    }

    public function add_pages()
    {
        $data['site_settings'] = $this->db->get('site_settings')->row_array();
        $data['title'] = 'Pages Management';
        $data['user'] = $this->db->get_where('user, country', ['user.email' => $this->session->userdata('email')], ['user.country' => 'country.iso'])->row_array();
        $data['pending_articles'] = $this->M_articles->pending_articles();
        $data['pending_jobs'] = $this->M_jobs->pending_jobs();
        $data['dataPages'] = $this->M_pages->select_all();
        $data['dataParent'] = $this->M_pages->select_all_parents();
        $this->load->view('admin/pages/add_pages', $data);
    }

    public function add_pages_process()
    {   
        $author['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data   = $this->input->post();
        // $image = 'default.jpg';
        
        // if(isset($_FILES["uploadArticles"]["name"]))
        // {

        //     $config['upload_path']          = './assets/dashboard/img/articles/';
        //     $config['allowed_types']        = 'jpg|png|jpeg';
        //     $config['overwrite']            = TRUE;
        //     $config['remove_spaces']        = TRUE;
        //     $config['encrypt_name']         = TRUE;
        //     // $config['max_width']            = 1024;
        //     // $config['max_height']           = 768;
            

        //     $this->load->library('upload', $config);

        //     if ( ! $this->upload->do_upload('uploadArticles')){
        //         $this->session->set_flashdata('message', 'failed');
        //     }else{

        //         $gbr = $this->upload->data();

        //         //Compress Image
        //         $config['image_library']='gd2';
        //         $config['source_image']='./assets/dashboard/img/articles'.$gbr['file_name'];
        //         $config['create_thumb']= TRUE;
        //         $config['maintain_ratio']= FALSE;
        //         $config['quality']= '50%';
        //         $config['width']= 600;
        //         $config['height']= 400;
        //         $config['new_image']= './assets/dashboard/img/articles'.$gbr['file_name'];
        //         $this->load->library('image_lib', $config);
        //         $this->image_lib->resize();
        //         $image = $gbr['file_name'];
        //     }
        // }

        $this->form_validation->set_rules('title', 'Title', 'trim|required');
        $this->form_validation->set_rules('content', 'content', 'trim|required');
        $this->form_validation->set_rules('parent_id', 'parent', 'trim|required');

        $title = $this->input->post('title');
        $content = $this->input->post('content');
        $parent_id = $this->input->post('parent_id');

        $sql = [
            'title'        => ucwords(addslashes($title)),
            'content'      => $content,
            'slug'         => preg_replace('/[^A-Za-z0-9-]+/', '-', $title),
            'parent_id'    => $parent_id,
        ];

        if ($this->form_validation->run() == TRUE) {
            $this->db->insert('pages', $sql);
            $this->session->set_flashdata('message', 'success');
            redirect("admin/pages", $data);
        }else {
            $this->session->set_flashdata('message', 'failed');
            redirect("admin/pages", $data);
        }

        

        // if ($this->db->insert('pages', $sql)) {  
        //     $this->session->set_flashdata('message', 'success');
        // }else{
        //     $this->session->set_flashdata('message', 'pending');
        // }
        // redirect('admin/pages');
    }
}