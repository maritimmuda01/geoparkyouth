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

	public function select_geoname_country($id) {

		$data = $this->db->query("SELECT geoname.iso as iso, geoname.geotype_id as geotype_id, geoname.country_id as country_id, geoname.name as name, country.iso as country_iso, country.nicename as nicename FROM geoname, country WHERE geoname.country_id = country.iso AND geoname.country_id = '{$id}'");

		return $data->result();
	}
}
?>