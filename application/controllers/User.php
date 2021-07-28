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
        $this->load->model('M_country');
    }

    public function index()
    {
        $data['title'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['dataArticles'] = $this->M_articles->select_all();   

        $this->load->view('user/index', $data);
    }


    public function profile()
    {
        
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = $data['user']['name'].' | Profile';
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
        
        $data   = $this->input->post();

        if(isset($_FILES["profile_picture"]["name"]))
        {

            $config['upload_path']          = './assets/img/profile/';
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
                $config['source_image']='./assets/img/profile'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 600;
                $config['height']= 400;
                $config['new_image']= './assets/img/profile/thumb'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 

                $data['profile_picture']=$gbr['file_name'];
                $sql = "UPDATE user SET profile_picture = '" .$data['profile_picture']. "' WHERE id='" .$data['id'] ."'";
                $this->db->query($sql);
            }
        }
                $this->form_validation->set_rules('name', 'Name', 'trim|required');
                $this->form_validation->set_rules('twitter', 'Twitter', 'trim|alpha_dash');
                $this->form_validation->set_rules('instagram', 'Intagram', 'trim|alpha_dash');
                $this->form_validation->set_rules('linkedin', 'Linkedin', 'trim|alpha_dash');

                $name = addslashes($data['name']);
                $city = addslashes($data['city']);
                $position = addslashes($data['position']);
                $company = addslashes($data['company']);
                $about = addslashes($data['about']);

                $sql = "UPDATE user SET name='" .$name ."', gender='" .$data['gender'] ."', dob='" .$data['dob'] ."', city='" .$city ."', country='" .$data['country'] ."', position='" .$position ."', company='" .$company ."', about='" .$about ."', twitter='" .$data['twitter'] ."', instagram='" .$data['instagram'] ."', linkedin='" .$data['linkedin'] ."' WHERE id='" .$data['id'] ."'";


                if ($this->form_validation->run() == TRUE) {
                    $this->db->query($sql);
                    $this->session->set_flashdata('message', 'success');
                    redirect("user/profile", $data);
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
            $this->load->view('user/changepassword', $data);
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', 'wrong-password');
                redirect('user/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', 'same-password');
                    redirect('user/changepassword');
                } else {
                    // password sudah ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', 'password-success');
                    redirect('user/changepassword');
                }
            }
        }
    }
}
