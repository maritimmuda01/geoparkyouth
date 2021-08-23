<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Media extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
        $this->load->model('M_media');
    }

    public function index()
    {
        $data['title'] = 'Media';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['dataMedia'] = $this->M_media->select_published();

        $this->load->view('user/media/index', $data);
    }

    public function single($id = null)
    {
        if (!isset($id)) redirect('errors');
        
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['single'] = $this->db->get_where('media', ["id"=> $id])->row_array();

        if (!$data['single']) redirect('errors');

        $data['title'] = $data['single']['title'];

        $this->load->view('user/media/single', $data);    }

    public function write_media()
    {
        $data['title'] = 'Write Media';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('user/media/add', $data);
    }

    public function add_media()
    {   
        $author['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data   = $this->input->post();
        $image = 'default.jpg';
        
        if(isset($_FILES["uploadMedia"]["name"]))
        {

            $config['upload_path']          = './assets/dashboard/img/media/';
            $config['allowed_types']        = 'jpg|png|jpeg';
            $config['overwrite']            = TRUE;
            $config['remove_spaces']        = TRUE;
            $config['encrypt_name']         = TRUE;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;
            

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('uploadMedia')){
                    $this->session->set_flashdata('message', 'failed');
            }else{

                $gbr = $this->upload->data();

                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/dashboard/img/media'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 600;
                $config['height']= 400;
                $config['new_image']= './assets/dashboard/img/profile/media'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $image = $gbr['file_name'];
            }
        }

        $this->form_validation->set_rules('title', 'Title', 'trim|required');
        $this->form_validation->set_rules('content', 'content', 'trim|requires');

        if ($author['user']['role_id']==1) {
            $is_published = '1';
        }else{
            $is_published = '0';  
        }

        $sql = [
                'title'         => $this->input->post('title'),
                'content'       => $this->input->post('content'),
                'author_id'     => $author['user']['id'],
                'date'          => date('Y-m-d'),
                'image'         => $image,
                'is_published'  => $is_published,
                'time'          => date('H:i:s')    
            ];

        $this->db->insert('media', $sql);
        redirect('media');



        // $sql = "INSERT INTO media VALUES ('', '" .$title."',
    }
}