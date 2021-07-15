<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jobs extends CI_Model {
	public function select_all() {
		$this->db->select('*');
		$this->db->from('countries');

		$data = $this->db->get();

		return $data->result();
	}

	public function select_published() {

		$data = $this->db->query('SELECT * FROM jobs WHERE published="1" ');
		return $data->result();
	}
}
?>