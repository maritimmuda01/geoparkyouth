<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_country extends CI_Model
{
	public function showAllCountry()
	{
		$this->db->select('*');
		$this->db->from('country');
		$this->db->join('region', 'region.id_region = country.region_id');
		$this->db->order_by('country.nicename', 'ASC');

		$data = $this->db->get();

		return $data->result();
	}

	public function showAllCountryById($id)
	{
		$this->db->select('*');
		$this->db->from('country');
		$this->db->join('region', 'region.id_region = country.region_id');
		$this->db->where('country.id_country', $id);
		$this->db->order_by('country.nicename', 'ASC');

		$data = $this->db->get();

		return $data->row_array();
	}

	public function showAllCountryByRegionId($id)
	{
		$this->db->select('*');
		$this->db->from('country');
		$this->db->join('region', 'region.id_region = country.region_id');
		$this->db->where('country.region_id', $id);

		$data = $this->db->get();

		return $data->result();
	}

	public function addCountry($image, $region_id)
	{
		$allCountry = $this->showAllCountry();
		$newIdOrder = count($allCountry) + 1;
		$newId = "CT" . $newIdOrder;
		$idCheck = $this->showAllCountryById($newId);

		if (!$idCheck) {
			$id = $newId;
		} else {
			$i = 1;
			while ($idCheck) {
				$newId = "CT" . ($newIdOrder + $i);
				$idCheck = $this->showAllCountryById($newId);
				$i++;
			}
			$id = $newId;
		}

		$field = array(
			'id_country' => $id . $region_id,
			'nicename' => ucwords($this->input->post('name')),
			'iso' => strtoupper($this->input->post('iso')),
			'region_id' => $this->input->post('region'),
			'logo' => $image,
			'country_desc' => $this->input->post('desc')

		);
		$this->db->insert('country', $field);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function editCountry()
	{
		$id = $this->input->get('id');
		$this->db->where('id_country', $id);
		$query = $this->db->get('country');
		if ($query->num_rows() > 0) {
			return $query->row();
		} else {
			return false;
		}
	}

	public function updateCountry($image)
	{
		$id = $this->input->post('Id');
		$field = array(
			'nicename' => ucfirst($this->input->post('name')),
			'iso' => strtoupper($this->input->post('iso')),
			'region_id' => $this->input->post('region'),
			'logo' => $image,
			'country_desc' => $this->input->post('desc')
		);
		$this->db->where('id_country', $id);
		$this->db->update('country', $field);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function deleteCountry()
	{
		$id = $this->input->get('id');
		$this->db->where('id_country', $id);
		$this->db->delete('country');
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
}

/* End of file M_country.php */
/* Location: ./application/models/M_country.php */