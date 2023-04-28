<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{

	public function getMyAccount()
	{
		$id = $this->session->userdata('id');
		$this->db->select('*, a.id as id_user');
		$this->db->from('user as a');
		$this->db->join('geoname', 'a.geoname_id = geoname.id_geoname');
		$this->db->join('geotype', 'geoname.geotype_id = geotype.id_geotype');
		$this->db->join('country', 'geoname.country_id = country.id_country');
		$this->db->join('region', 'region.id_region = country.region_id');
		$this->db->join('role as b', 'b.id as b.id = a.role_id');
		$this->db->where('a.id', $id);

		$data = $this->db->get();

		return $data->row();
	}

	public function showAllActiveUser()
	{
		$this->db->select('*, a.id as id_user');
		$this->db->from('user as a');
		$this->db->join('geoname', 'a.geoname_id = geoname.id_geoname');
		$this->db->join('geotype', 'geoname.geotype_id = geotype.id_geotype');
		$this->db->join('country', 'geoname.country_id = country.id_country');
		$this->db->join('role as b', 'b.id as b.id = a.role_id');
		$this->db->where('a.is_active', 1);
		$this->db->order_by('a.name', 'ASC');

		$data = $this->db->get();

		return $data->result();
	}

	public function showAllInactiveUser()
	{
		$this->db->select('*, a.id as id_user');
		$this->db->from('user as a');
		$this->db->join('geoname', 'a.geoname_id = geoname.id_geoname');
		$this->db->join('geotype', 'geoname.geotype_id = geotype.id_geotype');
		$this->db->join('country', 'geoname.country_id = country.id_country');
		$this->db->join('role as b', 'b.id as b.id = a.role_id');
		$this->db->where('a.is_active', 0);
		$this->db->order_by('a.name', 'ASC');

		$data = $this->db->get();

		return $data->result();
	}

	public function showAllActiveUserByCountry($id)
	{
		$this->db->select('*, a.id as id_user');
		$this->db->from('user as a');
		$this->db->join('geoname', 'a.geoname_id = geoname.id_geoname');
		$this->db->join('geotype', 'geoname.geotype_id = geotype.id_geotype');
		$this->db->join('country', 'geoname.country_id = country.id_country');
		$this->db->join('role as b', 'b.id as b.id = a.role_id');
		$this->db->where('a.is_active', 1);
		$this->db->where('id_country', $id);
		$this->db->order_by('a.name', 'ASC');

		$data = $this->db->get();

		return $data->result();
	}

	public function showAllInactiveUserByCountry($id)
	{
		$this->db->select('*, a.id as id_user');
		$this->db->from('user as a');
		$this->db->join('geoname', 'a.geoname_id = geoname.id_geoname');
		$this->db->join('geotype', 'geoname.geotype_id = geotype.id_geotype');
		$this->db->join('country', 'geoname.country_id = country.id_country');
		$this->db->join('role as b', 'b.id as b.id = a.role_id');
		$this->db->where('a.is_active', 0);
		$this->db->where('id_country', $id);
		$this->db->order_by('a.name', 'ASC');

		$data = $this->db->get();

		return $data->result();
	}


	public function editUser()
	{
		$id = $this->input->get('id');
		$this->db->select('*, a.id as id_user');
		$this->db->from('user as a');
		$this->db->join('geoname', 'a.geoname_id = geoname.id_geoname');
		$this->db->join('geotype', 'geoname.geotype_id = geotype.id_geotype');
		$this->db->join('country', 'geoname.country_id = country.id_country');
		$this->db->join('role as b', 'b.id as b.id = a.role_id');
		$this->db->where('a.id', $id);

		$data = $this->db->get();

		return $data->row_array();
	}

	public function updateProfile($image)
	{
	  
		$id = $this->input->post('Id');
		$field = array(
			'name' => ucwords(addslashes($this->input->post('name'))),
			'position' => ucwords(addslashes($this->input->post('position'))),
			'company' => ucwords(addslashes($this->input->post('company'))),
			'about' => addslashes($this->input->post('about')),
			'dob' => $this->input->post('dob'),
			'twitter' => strtolower(addslashes($this->input->post('twitter'))),
			'instagram' => strtolower(addslashes($this->input->post('instagram'))),
			'linkedin' => strtolower(addslashes($this->input->post('linkedin'))),
			'profile_picture' => $image
		);
		$this->db->where('id', $id);
		$this->db->update('user', $field);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function updateUser()
	{
		$id = $this->input->post('Id');
		$field = array(
			'role_id' => $this->input->post('role')
		);
		$this->db->where('id', $id);
		$this->db->update('user', $field);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function activateUser()
	{
		$id = $this->input->get('id');
		$field = array(
			'is_active' => "1"
		);
		$this->db->where('id', $id);
		$this->db->update('user', $field);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function inactivateUser()
	{
		$id = $this->input->get('id');
		$field = array(
			'is_active' => "0"
		);
		$this->db->where('id', $id);
		$this->db->update('user', $field);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function deleteUser()
	{
		$id = $this->input->get('id');
		// var_dump($id);
		// echo "string";
		$this->db->where('id', $id);
		$this->db->delete('user');
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
}

/* End of file M_user.php */
/* Location: ./application/models/M_user.php */