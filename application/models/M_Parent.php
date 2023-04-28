<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Parent extends CI_Model
{
	public function showAllPageparent()
	{
		$this->db->select('*');
		$this->db->from('page_parent');

		$data = $this->db->get();

		return $data->result();
	}

	public function showAllPageparentById($id)
	{
		$this->db->select('*');
		$this->db->from('page_parent');
		$this->db->where('id_pageparent', $id);

		$data = $this->db->get();

		return $data->row_array();
	}

	public function showAllSiteSettings()
	{
		$this->db->select('*');
		$this->db->from('site_settings');

		$data = $this->db->get();

		return $data->row();
	}

	public function addPageparent()
	{
		$allPageparent = $this->showAllPageparent();
		$newIdOrder = count($allPageparent) + 1;
		$newId = "PP" . $newIdOrder;
		$idCheck = $this->showAllPageparentById($newId);

		if (!$idCheck) {
			$id = $newId;
		} else {
			$i = 1;
			while ($idCheck) {
				$newId = "PP" . ($newIdOrder + $i);
				$idCheck = $this->showAllPageparentById($newId);
				$i++;
			}
			$id = $newId;
		}

		$field = array(
			'id_pageparent' => $id,
			'pageparent_name' => ucfirst($this->input->post('name'))
		);
		$this->db->insert('page_parent', $field);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function editPageparent()
	{
		$id = $this->input->get('id');
		$this->db->where('id_pageparent', $id);
		$query = $this->db->get('page_parent');
		if ($query->num_rows() > 0) {
			return $query->row();
		} else {
			return false;
		}
	}

	public function updatePageparent()
	{
		$id = $this->input->post('Id');
		$field = array(
			'pageparent_name' => ucfirst($this->input->post('name'))
		);
		$this->db->where('id_pageparent', $id);
		$this->db->update('page_parent', $field);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function editSiteSettings($images)
	{
		$field = array(
			'title' => ucwords($this->input->post('title')),
			'description' => $this->input->post('description'),
			'about_us' => $this->input->post('about_us'),
			'instagram' => $this->input->post('instagram'),
			'facebook' => $this->input->post('facebook'),
			'footer_text' => $this->input->post('footer_text'),
			'logo' => $images

		);
		$this->db->where('id', 1);
		$this->db->update('site_settings', $field);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function deletePageparent()
	{
		$id = $this->input->get('id');
		// var_dump($id);
		// echo "string";
		$this->db->where('id_pageparent', $id);
		$this->db->delete('page_parent');
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
}

/* End of file M_pageparent.php */
/* Location: ./application/models/M_pageparent.php */