<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_region extends CI_Model
{
	public function showAllRegion()
	{
		$this->db->select('*');
		$this->db->from('region');

		$data = $this->db->get();

		return $data->result();
	}

	public function showAllRegionById($id)
	{
		$this->db->select('*');
		$this->db->from('region');
		$this->db->where('id_region', $id);

		$data = $this->db->get();

		return $data->row_array();
	}

	public function addRegion()
	{
		$allRegion = $this->showAllRegion();
		$newIdOrder = count($allRegion) + 1;
		$newId = "RG" . $newIdOrder;
		$idCheck = $this->showAllRegionById($newId);

		if (!$idCheck) {
			$id = $newId;
		} else {
			$i = 1;
			while ($idCheck) {
				$newId = "RG" . ($newIdOrder + $i);
				$idCheck = $this->showAllRegionById($newId);
				$i++;
			}
			$id = $newId;
		}

		$field = array(
			'id_region' => $id,
			'region_name' => ucfirst($this->input->post('name')),
			'region_abbr' => strtoupper($this->input->post('abbr')),
			'region_email' => $this->input->post('email'),
			'region_website' => $this->input->post('website')
		);
		$this->db->insert('region', $field);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function editRegion()
	{
		$id = $this->input->get('id');
		$this->db->where('id_region', $id);
		$query = $this->db->get('region');
		if ($query->num_rows() > 0) {
			return $query->row();
		} else {
			return false;
		}
	}

	public function updateRegion()
	{
		$id = $this->input->post('Id');
		$field = array(
			'region_name' => ucfirst($this->input->post('name')),
			'region_abbr' => strtoupper($this->input->post('abbr')),
			'region_email' => $this->input->post('email'),
			'region_website' => $this->input->post('website')
		);
		$this->db->where('id_region', $id);
		$this->db->update('region', $field);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function deleteRegion()
	{
		$id = $this->input->get('id');
		// var_dump($id);
		// echo "string";
		$this->db->where('id_region', $id);
		$this->db->delete('region');
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
}

/* End of file M_region.php */
/* Location: ./application/models/M_region.php */