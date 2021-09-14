<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_country extends CI_Model {
	
	public function select_all() {
		$this->db->select('*');
		$this->db->from('country');

		$data = $this->db->get();

		return $data->result();
	}

	public function select_type() {
		$this->db->select('*');
		$this->db->from('geotype');

		$data = $this->db->get();

		return $data->result();
	}

	public function select_name() {
		$this->db->select('*');
		$this->db->from('geoname');

		$data = $this->db->get();

		return $data->result();
	}
}
?>