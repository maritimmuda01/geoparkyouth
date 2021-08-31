<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
        $this->load->model('M_articles');
        $this->load->model('M_user');
        $this->load->model('M_categories');
        $this->load->model('M_country');
        $this->load->model('M_jobs');
    }

    public function index()
    {
        $data['title'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['dataArticles'] = $this->M_articles->select_all();   

        $this->load->view('user/index', $data);
    }


    public function profile($id = null)
    {
        if (!isset($id)) redirect('errors');
        
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('user', ["id"=> $id])->row_array();
        $data['country'] = $this->db->get_where('country', ["iso"=> $data['profile']['country']])->row_array();

        if (!$data['profile']) redirect('errors');

        $data['title'] = $data['profile']['name'];
        $data['total_articles'] = $this->M_articles->total_articles_by_id();

        $this->load->view('user/profile', $data);
    }

    public function settings()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Settings';
        $data['dataCountry'] = $this->M_country->select_all();

        $this->load->view('user/settings', $data);
    }

    public function changepassword()
    {
        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('user/changepassword', $data);
    }

    public function profile_update()
    {
        $user['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data   = $this->input->post();

        if(isset($_FILES["profile_picture"]["name"]))
        {

            $config['upload_path']          = './assets/dashboard/img/profile/';
            $config['allowed_types']        = 'jpg|png|jpeg';
            $config['overwrite']            = TRUE;
            $config['remove_spaces']        = TRUE;
            $config['encrypt_name']         = TRUE;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;
            

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('profile_picture')){
                    $this->session->set_flashdata('message', 'failed');
            }else{

                $gbr = $this->upload->data();

                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/dashboard/img/profile'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 600;
                $config['height']= 400;
                $config['new_image']= './assets/dashboard/img/profile/thumb'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 

                $data['profile_picture']=$gbr['file_name'];
                $sql = "UPDATE user SET profile_picture = '" .$data['profile_picture']. "' WHERE id='" .$data['id'] ."'";
                $this->db->query($sql);
            }
        }
                $this->form_validation->set_rules('name', 'Name', 'trim|required');
                $this->form_validation->set_rules('twitter', 'Twitter', 'trim');
                $this->form_validation->set_rules('instagram', 'Intagram', 'trim');
                $this->form_validation->set_rules('linkedin', 'Linkedin', 'trim');

                $name = ucwords(addslashes($data['name']));
                $city = ucwords(addslashes($data['city']));
                $position = ucwords(addslashes($data['position']));
                $company = ucwords(addslashes($data['company']));
                $about = addslashes($data['about']);
                $twitter = strtolower(addslashes($data['twitter']));
                $instagram = strtolower(addslashes($data['instagram']));
                $linkedin = strtolower(addslashes($data['linkedin']));


                $sql = "UPDATE user SET name='" .$name ."', gender='" .$data['gender'] ."', dob='" .$data['dob'] ."', city='" .$city ."', country='" .$data['country'] ."', position='" .$position ."', company='" .$company ."', about='" .$about ."', twitter='" .$twitter."', instagram='" .$instagram ."', linkedin='" .$linkedin ."' WHERE id='" .$data['id'] ."'";


                if ($this->form_validation->run() == TRUE) {
                    $this->db->query($sql);
                    $this->session->set_flashdata('message', 'success');
                    redirect("user/settings", $data);
                }else {
                    $this->session->set_flashdata('message', 'failed');
                    redirect("user/settings", $data);
                }
    }

    public function password_update()
    {
        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'trim|min_length[3]|matches[new_password1]',
            [
                'matches' => "Password doesn't match!"
            ]);

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', 'wrong-password');
            $this->load->view('user/settings', $data);
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', 'wrong-password');
                redirect('user/settings');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', 'same-password');
                    redirect('user/settings');
                } else {
                    // password sudah ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');
                    $this->session->set_flashdata('message', 'success');
                    redirect('user/settings');
                }
            }
        }
    }

    // Articles

    public function articles()
    {
        $data['title'] = 'Articles';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['dataArticles'] = $this->M_articles->select_published();
        $data['dataCategories'] = $this->M_categories->select_all();
        $data['dataCountry'] = $this->M_country->select_all();

        $this->load->view('user/articles/index', $data);
    }

    public function write_articles()
    {
        $data['title'] = 'Write Articles';
        $data['dataCategories'] = $this->M_categories->select_all();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('user/articles/add', $data);
    }

    public function add_articles()
    {   
        $author['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data   = $this->input->post();
        $image = 'default.jpg';
        
        if(isset($_FILES["uploadArticles"]["name"]))
        {

            $config['upload_path']          = './assets/dashboard/img/articles/';
            $config['allowed_types']        = 'jpg|png|jpeg';
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
                $config['source_image']='./assets/dashboard/img/articles'.$gbr['file_name'];
                $config['create_thumb']= TRUE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 600;
                $config['height']= 400;
                $config['new_image']= './assets/dashboard/img/articles'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $image = $gbr['file_name'];
            }
        }

        $this->form_validation->set_rules('title', 'Title', 'trim|required');
        $this->form_validation->set_rules('content', 'content', 'trim|required');

        if ($author['user']['role_id']==1) {
            $is_published = '1';
        }else{
            $is_published = '0';  
        }

        $sql = [
                'title'         => $this->input->post('title'),
                'content'       => $this->input->post('content'),
                'author_id'     => $author['user']['id'],
                'category_id'   => $this->input->post('category_id'),
                'date'          => date('Y-m-d'),
                'image'         => $image,
                'is_published'  => $is_published,
                'time'          => date('H:i:s')    
            ];

        $this->db->insert('articles', $sql);
        if ($author['user']['role_id']==1) {  
            $this->session->set_flashdata('message', 'success');
        }else{
            $this->session->set_flashdata('message', 'pending');
        }
        redirect('user/articles');
    }

    // Find User
    public function find_user(){
        $data['title'] = 'Find Others';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['dataUser'] = $this->M_user->select_all(); 

        $this->load->view('user/find_user', $data);

    }

    //Jobs
    public function jobs()
    {
        $data['title'] = 'Jobs';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['dataJobs'] = $this->M_jobs->select_all();

        $this->load->view('user/jobs/index', $data);
    }

    public function jobs_single($id = null)
    {
        if (!isset($id)) redirect('errors');
        
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['single'] = $this->M_jobs->select_single($id);

        if (!$data['single']) redirect('errors');

        $data['title'] = "Job at ".$data['single']['position'];

        $this->load->view('user/jobs/single', $data);    
    }

    public function post_jobs()
    {
        $data['title'] = 'Write Jobs';
        $data['dataCategories'] = $this->M_categories->select_all();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('user/jobs/add', $data);
    }

    public function add_jobs()
    {   
        $author['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('position', 'Position', 'trim|required');
        $this->form_validation->set_rules('company', 'Company', 'trim|required');

        $sql = [
                'position'      => ucwords(addslashes($this->input->post('position'))),
                'company'       => ucwords(addslashes($this->input->post('company'))),
                'location'      => ucwords(addslashes($this->input->post('location'))),
                'type'          => $this->input->post('type'),
                'description'   => $this->input->post('description'),
                'author_id'     => $author['user']['id'],
                'created_date'  => date('Y-m-d'),
                'created_time'  => date('H:i:s')   
            ];

        $this->db->insert('jobs', $sql);
        $this->session->set_flashdata('message', 'success');
        redirect('user/jobs');
    }
}
