<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_Comment');
	}

    public function showAllComment(){

        $id = $this->uri->segment(3);
        $result = $this->M_Comment->showAllComment($id);
        echo json_encode($result);
    }

    public function addComment(){
        $result = $this->M_Comment->addComment();
        $msg['type'] = 'add';
        $msg['success'] = false;
        if ($result) {
            $msg['success'] = true;
        }

        echo json_encode($msg);
    }

}

/* End of file Comment.php */
/* Location: ./application/controllers/Comment.php */