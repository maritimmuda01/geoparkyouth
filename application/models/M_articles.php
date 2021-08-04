<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_articles extends CI_Model {

	public function select_all() {

		$data = $this->db->query('SELECT articles.id as id, articles.title as title, articles.content as content, articles.image as image, articles.author_id as author_id, articles.date as date, user.name as author, user.position as position, user.company as company, user.profile_picture as image, articles.image as articles_image, articles.is_published as is_published FROM articles, user WHERE articles.author_id = user.id AND articles.is_published = "1" ORDER BY articles.date DESC, articles.time ASC');

		return $data->result();
	}

	public function select_latest() {

		$data = $this->db->query('SELECT articles.id as id, articles.title as title, articles.content as content, articles.image as image, articles.author_id as author_id, articles.date as date, user.name as author, user.position as position, user.company as company, user.profile_picture as image, articles.image as articles_image FROM articles, user WHERE articles.author_id = user.id ORDER BY articles.date DESC, articles.time DESC LIMIT 3');

		return $data->result();
	}

	public function total_articles_by_id() {
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$id = $data['user']['id'];
		$data = $this->db->query("SELECT id FROM articles WHERE author_id = '{$id}'");
		return $data->num_rows();
	}
}
?>