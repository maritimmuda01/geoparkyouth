<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pages extends CI_Model {

	public function select_all() {

		$data = $this->db->query('SELECT pages.id as id, pages.title as title, pages.slug as slug, pages.content as content, pages.parent_id as parent_id, page_parent.id as pages_parent_id, page_parent.name as page_parent_name FROM pages, page_parent WHERE pages.parent_id = page_parent.id');

		return $data->result();
	}

	public function select_single($id) {

		$data = $this->db->query("SELECT pages.id as id, pages.title as title, pages.slug as slug, pages.content as content, pages.parent_id as parent_id, page_parent.id as pages_parent_id, page_parent.name as page_parent_name FROM pages, page_parent WHERE pages.parent_id = page_parent.id AND pages.id = {$id}");

		return $data->row_array();
	}

	public function select_all_parents() {

		$data = $this->db->query('SELECT * FROM page_parent');

		return $data->result();
	}	
}