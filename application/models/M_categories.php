<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_categories extends CI_Model {
	public function select_all() {
		$this->db->select('*');
		$this->db->from('categories');

		$data = $this->db->get();

		return $data->result();
	}

	public function showAllCategories(){
		$this->db->order_by('id', 'desc');
		$query = $this->db->get('categories');
		if ($query->num_rows() > 0){
			return $query->result();
		}
		else {
			return false;
		}
	}

	public function addCategories(){
		$field = array(
			'attr'=>$this->input->post('name'),
			'name'=>$slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $this->input->post('name'))))
		);
		$this->db->insert('categories', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else {
			return false;
		}
	}

	public function editCategories(){
		$id = $this->input->get('id');
		$this->db->where('id', $id);
		$query =$this->db->get('categories');
		if ($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

	public function updateCategories(){
		$id = $this->input->post('Id');
		$field = array(
			'attr'=>$this->input->post('name'),
			'name'=>$slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $this->input->post('name'))))
		);
		$this->db->where('id', $id);
		$this->db->update('categories', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else {
			return false;
		}
	}

	public function deleteCategories(){
		$id = $this->input->get('id');
		// var_dump($id);
		// echo "string";
		$this->db->where('id', $id);
		$this->db->delete('categories');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
}
?>