<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_news extends CI_Model {

	public function select_all() {
		$data = $this->db->query('SELECT news.id as id, news.title as title, news.content as content, news.image as image, news.author_id as author_id, news.created_date as created_date, user.name as author, user.position as position, user.company as company, user.profile_picture as image FROM news, user WHERE news.author_id = user.id ORDER BY news.created_date DESC');

		return $data->result();
	}

	public function select_latest() {

		$data = $this->db->query('SELECT news.id as id, news.title as title, news.content as content, news.image as image, news.author_id as author_id, news.created_date as created_date, user.name as author, user.position as position, user.company as company, user.profile_picture as image FROM news, user WHERE news.author_id = user.id ORDER BY news.created_date DESC LIMIT 3');

		return $data->result();
	}

	public function total_news_by_id() {
		$id = $this->session->userdata('id');
		$data = $this->db->query("SELECT id FROM news WHERE author_id = '{$id}'");
		return $data->num_rows();
	}
}
?>