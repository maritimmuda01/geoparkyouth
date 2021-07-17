<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_news extends CI_Model {

	public function select_all() {

		$data = $this->db->query('SELECT news.id as id, news.title as title, news.content as content, news.image as image, news.author_id as author_id, news.date as date, user.name as author, user.position as position, user.company as company, user.profile_picture as image, news.image as news_image FROM news, user WHERE news.author_id = user.id ORDER BY news.date DESC, news.time DESC');

		return $data->result();
	}

	public function select_latest() {

		$data = $this->db->query('SELECT news.id as id, news.title as title, news.content as content, news.image as image, news.author_id as author_id, news.date as date, user.name as author, user.position as position, user.company as company, user.profile_picture as image, news.image as news_image FROM news, user WHERE news.author_id = user.id ORDER BY news.date DESC, news.time DESC LIMIT 3');

		return $data->result();
	}

	public function total_news_by_id() {
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$id = $data['user']['id'];
		$data = $this->db->query("SELECT id FROM news WHERE author_id = '{$id}'");
		return $data->num_rows();
	}
}
?>