<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_country extends CI_Model {
	
	public function select_all() {
		$this->db->select('*');
		$this->db->from('country');

		$data = $this->db->get();

		return $data->result();
	}

	public function select_UGG() {

		$this->db->select('*');
		$this->db->from('geoname');
		$this->db->where('geotype_id', 'unescoglobalgeopark');

		$data = $this->db->get();

		return $data->result();
	}

	public function select_NAG() {

		$this->db->select('*');
		$this->db->from('geoname');
		$this->db->where('geotype_id', 'nationalgeopark');

		$data = $this->db->get();

		return $data->result();
	}

	public function select_ASG() {

		$this->db->select('*');
		$this->db->from('geoname');
		$this->db->where('geotype_id', 'aspiringgeopark');

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