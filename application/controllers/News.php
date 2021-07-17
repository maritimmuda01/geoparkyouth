<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
        $this->load->model('M_news');
        $this->load->model('M_country');
    }

    public function index()
    {
        $data['title'] = 'News';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['dataNews'] = $this->M_news->select_all();

        $this->load->view('news/index', $data);
    }

    public function write_news()
    {
        $data['title'] = 'Write News';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('news/add', $data);
    }

    public function add_news()
    {   
        $author['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data   = $this->input->post();
        $image = 'image.jpg';
        
        if(isset($_FILES["uploadNews"]["name"]))
        {

            $config['upload_path']          = './assets/img/news/';
            $config['allowed_types']        = 'jpg|png|jpeg';
            $config['overwrite']            = TRUE;
            $config['remove_spaces']        = TRUE;
            $config['encrypt_name']         = TRUE;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;
            

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('uploadNews')){
                    $this->session->set_flashdata('message', 'failed');
            }else{

                $gbr = $this->upload->data();

                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/img/news'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 600;
                $config['height']= 400;
                $config['new_image']= './assets/img/profile/news'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $image = $gbr['file_name'];
            }
        }

        $this->form_validation->set_rules('title', 'Title', 'trim|required');
        $this->form_validation->set_rules('content', 'content', 'trim|requires');

        $sql = [
                'title'         => $this->input->post('title'),
                'content'       => $this->input->post('content'),
                'author_id'     => $author['user']['id'],
                'date'          => date('Y-m-d'),
                'image'         => $image,
                'time'          => date('H:i:s')    
            ];

        // var_dump($sql['time']);
        // exit();

        $this->db->insert('news', $sql);
        redirect('news');



        // $sql = "INSERT INTO news VALUES ('', '" .$title."',
    }
}