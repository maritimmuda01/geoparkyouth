<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Categories');
		$this->load->model('M_Article');
		$this->load->model('M_Pages');
		$this->load->model('M_Parent');
		$this->load->model('M_Region');
		$this->load->model('M_Country');
		$this->load->model('M_Geotype');
		$this->load->model('M_Site');
		$this->load->model('M_User');
		$this->load->model('M_Geoparks');
		$this->load->model('M_Pageimage');
		$this->site_settings = $this->M_Site->showAllSite();
		$this->dataPages = $this->M_Pages->showAllPages();
		$this->dataParent = $this->M_Parent->showAllPageparent();
		$this->myData = $this->M_User->getMyAccount();
	}

	public function index()
	{
		$data['title'] = $this->site_settings['title'];
		$data['dataArticles'] = $this->M_Article->showAllPublishedArticle();
		$this->load->view('home/index', $data);
	}

	public function pages($id)
	{
		$data['dataPages'] = $this->M_Pages->showAllPagesById($id);
		$data['dataPageimage'] = $this->M_Pageimage->showAllPageimageByPageId($id);
		$data['title'] = $data['dataPages']['title'] . " &mdash; " . $this->site_settings['title'];
		$this->load->view('home/pages', $data);
	}

	public function countries()
	{

		$data['title'] = "Countries &mdash; " . $this->site_settings['title'];
		$data['dataRegion'] = $this->M_Region->showAllRegion();
		$data['dataCountry'] = $this->M_Country->showAllCountry();

		$this->load->view('home/countries', $data);
	}

	public function geopark($id)
	{
		$data['dataCountry'] = $this->M_Country->showAllCountryById($id);
		$data['dataType'] = $this->M_Geotype->showAllGeotype();
		$data['dataGeoparks'] = $this->M_Geoparks->showAllGeoparksByCountryId($id);
		// echo '<pre>';
		// var_dump($data['dataGeoparks']);
		// echo '</pre>';
		// die();
		$data['title'] = "Youth Forum &mdash; " . $this->site_settings['title'];
		$this->load->view('home/geopark', $data);
	}

	public function showAllGeoparksById($id)
	{
		$result = $this->M_Geoparks->showAllGeoparksById($id);
		echo json_encode($result);
	}

	public function media()
	{
		$data['dataCategories'] = $this->M_Categories->showAllCategories();
		$data['dataArticles'] = $this->M_Article->showAllPublishedArticle();
		$data['title'] = "Media &mdash; " . $this->site_settings['title'];

		$this->load->view('home/media', $data);
	}

	public function single($id)
	{
		$data['dataArticles'] = $this->M_Article->showAllPublishedArticleById($id);
		$data['dataRecent'] = $this->M_Article->showAllPublishedArticle();
		$data['featuredArticle'] = $this->M_Article->featuredArticle($id);

		$data['title'] = $data['dataArticles']['title'] . " &mdash; " . $this->site_settings['title'];

		if (!$data['dataArticles']) {
			redirect('errors');
		}

		$this->load->view('home/single', $data);
	}

	public function searchResult()
	{
		$data['keyword'] = $this->input->get('keyword');
		$data['dataCategories'] = $this->M_Categories->showAllCategories();
		$data['title'] = "Search " . $data['keyword'] . " &mdash; " . $this->site_settings['title'];

		$data['dataArticles'] = $this->M_Article->searchArticle($data['keyword']);
		$this->load->view('home/result', $data);
	}

	public function firstunescoggyfseminarandcamp()
	{
		$data['title'] = "1st Unesco Global Geopark Youth Forum Seminar & Camp";
		$this->load->view('home/seminar_camp', $data);
	}
}
