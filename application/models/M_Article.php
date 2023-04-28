<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_article extends CI_Model
{
	public function showAllArticle()
	{
		$this->db->select('*');
		$this->db->from('article');
		$this->db->join('user', 'user.id = article.user_id');
		$this->db->join('categories', 'categories.id_category = article.category_id');
		$this->db->join('geoname', 'geoname.id_geoname = user.geoname_id');
		$this->db->order_by('article.time_created', 'DESC');

		$data = $this->db->get();

		return $data->result();
	}

	public function showAllPublishedArticle()
	{
		$this->db->select('*');
		$this->db->from('article');
		$this->db->join('user', 'user.id = article.user_id');
		$this->db->join('categories', 'categories.id_category = article.category_id');
		$this->db->join('geoname', 'geoname.id_geoname = user.geoname_id');
		$this->db->join('country', 'geoname.country_id = country.id_country');
		$this->db->where('article.is_published', 1);
		$this->db->order_by('article.time_created', 'DESC');

		$data = $this->db->get();

		return $data->result();
	}

	public function showAllPublishedArticleById($id)
	{
		$this->db->select('*');
		$this->db->from('article');
		$this->db->join('user', 'user.id = article.user_id');
		$this->db->join('categories', 'categories.id_category = article.category_id');
		$this->db->join('geoname', 'geoname.id_geoname = user.geoname_id');
		$this->db->join('country', 'geoname.country_id = country.id_country');
		$this->db->where('article.is_published', 1);
		$this->db->where('article.id_article', $id);

		$data = $this->db->get();

		return $data->row_array();
	}

	public function showAllPublishedArticleByCountry($id)
	{
		$this->db->select('*');
		$this->db->from('article');
		$this->db->join('user', 'user.id = article.user_id');
		$this->db->join('categories', 'categories.id_category = article.category_id');
		$this->db->join('geoname', 'geoname.id_geoname = user.geoname_id');
		$this->db->join('country', 'geoname.country_id = country.id_country');
		$this->db->where('article.is_published', 1);
		$this->db->where('country.id_country', $id);
		$this->db->order_by('article.time_created', 'DESC');

		$data = $this->db->get();

		return $data->result();
	}

	public function showAllPendingArticle()
	{
		$this->db->select('*');
		$this->db->from('article');
		$this->db->join('user', 'user.id = article.user_id');
		$this->db->join('categories', 'categories.id_category = article.category_id');
		$this->db->join('geoname', 'geoname.id_geoname = user.geoname_id');
		$this->db->join('country', 'geoname.country_id = country.id_country');
		$this->db->where('article.is_published', 0);

		$data = $this->db->get();

		return $data->result();
	}
	public function showAllPendingArticleById($id)
	{
		$this->db->select('*');
		$this->db->from('article');
		$this->db->join('user', 'user.id = article.user_id');
		$this->db->join('categories', 'categories.id_category = article.category_id');
		$this->db->join('geoname', 'geoname.id_geoname = user.geoname_id');
		$this->db->join('country', 'geoname.country_id = country.id_country');
		$this->db->where('article.is_published', 0);
		$this->db->where('country.id_country', $id);

		$data = $this->db->get();

		return $data->result();
	}

	public function showAllArticleById($id)
	{
		$this->db->select('*');
		$this->db->from('article');
		$this->db->join('user', 'user.id = article.user_id');
		$this->db->join('categories', 'categories.id_category = article.category_id');
		$this->db->join('geoname', 'geoname.id_geoname = user.geoname_id');
		$this->db->where('article.id_article', $id);

		$data = $this->db->get();

		return $data->row_array();
	}

	public function showAllArticleByUser()
	{
		$author = $this->M_User->getMyAccount();
		$user_id = $author->id_user;
		$this->db->select('*');
		$this->db->from('article');
		$this->db->join('user', 'user.id = article.user_id');
		$this->db->join('categories', 'categories.id_category = article.category_id');
		$this->db->join('geoname', 'geoname.id_geoname = user.geoname_id');
		$this->db->where('article.user_id', $user_id);

		$data = $this->db->get();

		return $data->result();
	}

	public function featuredArticle($id)
	{
		$this->db->select('*');
		$this->db->from('article');
		$this->db->join('user', 'user.id = article.user_id');
		$this->db->join('categories', 'categories.id_category = article.category_id');
		$this->db->join('geoname', 'geoname.id_geoname = user.geoname_id');
		$this->db->where('article.id_article !=', $id);
		$this->db->where('article.is_published', 1);
		$this->db->order_by('', 'RAND ()');
		$this->db->limit(3);
		$data = $this->db->get();
		return $data->result();
	}

	public function addArticle($image)
	{
		$author = $this->M_User->getMyAccount();
		$user_id = $author->id_user;
// 		var_dump($author);
// 		die();
		$role_id = $author->role_id;


		if ($role_id == 2) {
			$is_published = 0;
		} else {
			$is_published = 1;
		}

		$field = array(
			'title' => ucwords($this->input->post('title')),
			'content' => $this->input->post('content'),
			'category_id' => $this->input->post('category_id'),
			'article_image' => $image,
			'user_id' => $user_id,
			'is_published' => $is_published
		);
		$this->db->insert('article', $field);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function editArticle()
	{
		$id = $this->input->get('id');
		$this->db->where('id_article', $id);
		$query = $this->db->get('article');
		if ($query->num_rows() > 0) {
			return $query->row();
		} else {
			return false;
		}
	}

	public function updateArticle($image)
	{
		$id = $this->input->post('Id');
		$field = array(
			'article' => ucfirst($this->input->post('name')),
			'geotype_id' => $this->input->post('geotype'),
			'country_id' => $this->input->post('country'),
			'article_image' => $image
		);
		$this->db->where('id_article', $id);
		$this->db->update('article', $field);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function publishArticle()
	{
		$id = $this->input->get('id');
		$field = array(
			'is_published' => 1
		);
		$this->db->where('id_article', $id);
		$this->db->update('article', $field);

		$article = $this->db->get_where('article', ['id_article' => $id])->row_array();

		$field = array(

			'text' => 'Your article <strong>' . $article['title'] . '</strong> has been published!',
			'type' => 'account/myArticles',
			'type_color' => 'success',
			'type_icon' => 'fa fa-check',
			'user_id' => $article['user_id'],
			'is_read' => 0
		);
		$this->db->insert('notifications', $field);

		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function unpublishArticle()
	{
		$id = $this->input->get('id');
		$field = array(
			'is_published' => 0
		);
		$this->db->where('id_article', $id);
		$this->db->update('article', $field);

		$article = $this->db->get_where('article', ['id_article' => $id])->row_array();

		$field = array(
			'text' => 'Your article <strong>' . $article['title'] . '</strong> has been unpublished!',
			'type' => 'account/myArticles',
			'type_color' => 'warning',
			'type_icon' => 'fa fa-exclamation-circle',
			'user_id' => $article['user_id'],
			'is_read' => 0
		);
		$this->db->insert('notifications', $field);

		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function deleteArticle()
	{
		$id = $this->input->get('id');
		$this->db->where('id_article', $id);
		$this->db->delete('article');
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function searchArticle($id)
	{
		$this->db->select('*');
		$this->db->from('article');
		$this->db->join('user', 'user.id = article.user_id');
		$this->db->join('categories', 'categories.id_category = article.category_id');
		$this->db->join('geoname', 'geoname.id_geoname = user.geoname_id');
		$this->db->where('article.is_published', 1);
		$this->db->like('article.title', $id);
		$this->db->order_by('article.time_created', 'DESC');

		$data = $this->db->get();

		return $data->result();
	}
}

/* End of file M_article.php */
/* Location: ./application/models/M_article.php */