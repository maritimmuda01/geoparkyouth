<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Article extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('M_Article');
        $this->load->model('M_Categories');
        $this->load->model('M_Site');
        $this->site_settings = $this->M_Site->showAllSite();
    }

    public function index()
    {
        $data['title'] = "Published Article";
        $data['profile'] = $this->M_User->getMyAccount();
        $this->load->view('admin/article/published', $data);
    }

    public function pending()
    {
        $data['title'] = "Pending Article";
        $data['profile'] = $this->M_User->getMyAccount();
        $this->load->view('admin/article/pending', $data);
    }


    public function showAllPublishedArticle()
    {
        $result = $this->M_Article->showAllPublishedArticle();
        echo json_encode($result);
    }

    public function showAllPublishedArticleByCountry($id)
    {
        $result = $this->M_Article->showAllPublishedArticleByCountry($id);
        echo json_encode($result);
    }

    public function showAllPendingArticle()
    {
        $result = $this->M_Article->showAllPendingArticle();
        echo json_encode($result);
    }

    public function showAllPendingArticleByCountry($id)
    {
        $result = $this->M_Article->showAllPendingArticle($id);
        echo json_encode($result);
    }

    public function showAllPendingArticleById()
    {
        $result = $this->M_Article->showAllPendingArticleById();
        echo json_encode($result);
    }

    public function showAllArticleById($id)
    {
        $result = $this->M_Article->showAllArticleById($id);
        echo json_encode($result);
    }

    public function showAllArticleByUser()
    {
        $result = $this->M_Article->showAllArticleByUser();
        echo json_encode($result);
    }

    public function editArticle()
    {
        $result = $this->M_Article->editArticle();
        echo json_encode($result);
    }

    public function publishArticle()
    {

        $result = $this->M_Article->publishArticle();
        echo json_encode($result);
    }

    public function unpublishArticle()
    {

        $result = $this->M_Article->unpublishArticle();
        echo json_encode($result);
    }

    public function deleteArticle()
    {
        $result = $this->M_Article->deleteArticle();
        $msg['success'] = false;
        if ($result) {
            $msg['success'] = true;
        }
        // var_dump($result);
        echo json_encode($msg);
    }
}

/* End of file Article.php */
/* Location: ./application/controllers/Article.php */