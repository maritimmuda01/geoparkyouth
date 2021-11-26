<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_media extends CI_Model {

	public function select_all() {

		$data = $this->db->query('SELECT media.id as id, media.title as title, media.content as content, media.image as image, media.author_id as author_id, media.date as date, media.time as time, user.name as author, user.id as author_id, user.position as position, user.company as company, user.profile_picture as author_image, media.image as media_image, media.is_published as is_published FROM media, user WHERE media.author_id = user.id ORDER BY media.date DESC');

		return $data->result();
	}

	public function select_published() {

		$data = $this->db->query('SELECT media.id as id, media.title as title, media.content as content, media.image as image, media.author_id as author_id, media.date as date, media.time as time, user.name as author, user.position as position, user.company as company, user.profile_picture as image, media.image as media_image, media.is_published as is_published FROM media, user WHERE media.author_id = user.id AND media.is_published = "1" ORDER BY media.date DESC, media.time ASC');

		return $data->result();
	}

	public function select_single($id) {

		return $this->db->get_where('media', ["id"=> $id])->row();
	}


	public function select_latest() {

		$data = $this->db->query('SELECT media.id as id, media.title as title, media.content as content, media.image as image, media.author_id as author_id, media.date as date, user.name as author, user.position as position, user.company as company, user.profile_picture as image, media.image as media_image FROM media, user WHERE media.author_id = user.id ORDER BY media.date DESC, media.time DESC LIMIT 3');

		return $data->result();
	}

	public function total_media(){
		
		$data = $this->db->query("SELECT * FROM media");
		return $data->num_rows();
	}

	public function total_media_by_id() {
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['site_settings'] = $this->db->get('site_settings')->row_array();
		$id = $data['user']['id'];
		$data = $this->db->query("SELECT id FROM media WHERE author_id = '{$id}'");
		return $data->num_rows();
	}

	public function media_publish($id)
	{
		return $this->db->where("id", $id)->update('media',  array("is_published" => '1'));
	}

	public function media_unpublish($id)
	{
		return $this->db->where("id", $id)->update('media', array("is_published" => '0'));
	}


	public function media_delete($id)
    {
        return $this->db->delete('media', array("id" => $id));
    }
}
?>