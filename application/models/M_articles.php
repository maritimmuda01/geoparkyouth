<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_articles extends CI_Model {

	public function select_all() {

		$data = $this->db->query('SELECT articles.id as id, articles.title as title, articles.content as content, articles.image as image, articles.author_id as author_id, articles.date as date, articles.time as time, user.name as author, user.id as author_id, user.position as position, user.company as company, user.profile_picture as author_image, user.country as author_country, articles.image as articles_image, articles.is_published as is_published, articles.category_id as category_id, categories.name as category_name, categories.attr as category_attr FROM articles, user, categories WHERE articles.author_id = user.id AND articles.category_id = categories.id ORDER BY articles.date DESC, articles.time DESC');

		return $data->result();
	}

	public function select_published() {

		$data = $this->db->query('SELECT articles.id as id, articles.title as title, articles.content as content, articles.image as image, articles.author_id as author_id, articles.date as date, articles.time as time, user.name as author, user.id as author_id, user.position as position, user.company as company, user.profile_picture as author_image, user.country as author_country, articles.image as articles_image, articles.is_published as is_published, articles.category_id as category_id, categories.name as category_name, categories.attr as category_attr FROM articles, user, categories WHERE articles.author_id = user.id AND articles.category_id = categories.id AND articles.is_published = "1" ORDER BY articles.date DESC, articles.time DESC');

		return $data->result();
	}

	public function select_single($id) {

		$data = $this->db->query("SELECT articles.id as id, articles.title as title, articles.content as content, articles.image as image, articles.author_id as author_id, articles.date as date, articles.time as time, user.name as author, user.id as author_id, user.position as position, user.company as company, user.profile_picture as author_image, user.country as author_country, articles.image as articles_image, articles.is_published as is_published, articles.category_id as category_id, categories.name as category_name, categories.attr as category_attr FROM articles, user, categories WHERE articles.author_id = user.id AND articles.category_id = categories.id AND articles.is_published = '1' AND articles.id = {$id}");

		return $data->row_array();

	}


	public function select_latest() {

		$data = $this->db->query('SELECT articles.id as id, articles.title as title, articles.content as content, articles.image as image, articles.author_id as author_id, articles.date as date, user.name as author, user.position as position, user.company as company, user.profile_picture as image, articles.image as articles_image FROM articles, user WHERE articles.author_id = user.id ORDER BY articles.date DESC, articles.time DESC LIMIT 3');

		return $data->result();
	}

	public function total_articles(){
		
		$data = $this->db->query("SELECT * FROM articles");
		return $data->num_rows();
	}

	public function total_articles_by_id() {
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$id = $data['user']['id'];
		$data = $this->db->query("SELECT id FROM articles WHERE author_id = '{$id}'");
		return $data->num_rows();
	}

	public function articles_publish($id)
	{
		return $this->db->where("id", $id)->update('articles',  array("is_published" => '1'));
	}

	public function articles_unpublish($id)
	{
		return $this->db->where("id", $id)->update('articles', array("is_published" => '0'));
	}


	public function articles_delete($id)
    {
        return $this->db->delete('articles', array("id" => $id));
        exit();
    }
}
?>