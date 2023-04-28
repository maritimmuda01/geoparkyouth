<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_categories extends CI_Model
{
	public function showAllCategories()
	{
		$this->db->select('*');
		$this->db->from('categories');

		$data = $this->db->get();

		return $data->result();
	}

	public function showAllCategoriesById($id)
	{
		$this->db->select('*');
		$this->db->from('categories');
		$this->db->where('id_category', $id);

		$data = $this->db->get();

		return $data->row_array();
	}

	public function addCategories()
	{
		$allCategories = $this->showAllCategories();
		$newIdOrder = count($allCategories) + 1;
		$newId = "AC" . $newIdOrder;
		$idCheck = $this->showAllCategoriesById($newId);

		if (!$idCheck) {
			$id = $newId;
		} else {
			$i = 1;
			while ($idCheck) {
				$newId = "AC" . ($newIdOrder + $i);
				$idCheck = $this->showAllCategoriesById($newId);
				$i++;
			}
			$id = $newId;
		}

		$field = array(
			'id_category' => $id,
			'category_name' => ucfirst($this->input->post('name'))
		);
		$this->db->insert('categories', $field);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function editCategories()
	{
		$id = $this->input->get('id');
		$this->db->where('id_category', $id);
		$query = $this->db->get('categories');
		if ($query->num_rows() > 0) {
			return $query->row();
		} else {
			return false;
		}
	}

	public function updateCategories()
	{
		$id = $this->input->post('Id');
		$field = array(
			'category_name' => ucfirst($this->input->post('name'))
		);
		$this->db->where('id_category', $id);
		$this->db->update('categories', $field);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function deleteCategories()
	{
		$id = $this->input->get('id');
		// var_dump($id);
		// echo "string";
		$this->db->where('id_category', $id);
		$this->db->delete('categories');
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
}

/* End of file M_categories.php */
/* Location: ./application/models/M_categories.php */