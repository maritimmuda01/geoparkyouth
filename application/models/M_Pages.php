<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pages extends CI_Model
{
	public function showAllPages()
	{
		$this->db->select('*');
		$this->db->from('pages');
		$this->db->join('page_parent', 'page_parent.id_pageparent = pages.pageparent_id');
		$this->db->order_by('idx_pages', 'ASC');

		$data = $this->db->get();
		return $data->result();
	}

	public function showAllPagesById($id)
	{
		$this->db->select('*');
		$this->db->from('pages');
		$this->db->join('page_parent', 'page_parent.id_pageparent = pages.pageparent_id');
		$this->db->where('pages.id_pages', $id);

		$data = $this->db->get();

		return $data->row_array();
	}

	public function showAllPagesByPageparentId($id)
	{
		$this->db->select('*');
		$this->db->from('pages');
		$this->db->join('page_parent', 'page_parent.id_pageparent = pages.pageparent_id');
		$this->db->where('pages.pageparent_id', $id);

		$data = $this->db->get();

		return $data->result();
	}

	public function addPages($image, $pageparent_id)
	{
		$allPages = $this->showAllPages();
		$newIdOrder = count($allPages) + 1;
		$newId = "PG" . $newIdOrder;
		$idCheck = $this->showAllPagesById($newId);

		if (!$idCheck) {
			$id = $newId;
		} else {
			$i = 1;
			while ($idCheck) {
				$newId = "PG" . ($newIdOrder + $i);
				$idCheck = $this->showAllPagesById($newId);
				$i++;
			}
			$id = $newId;
		}

		$index_init = $this->showAllPagesByPageparentId($pageparent_id);
		$index_num = (count($index_init) + 1);

		$field = array(
			'id_pages' => $id . $pageparent_id,
			'idx_pages' => $index_num,
			'pageparent_id' => $pageparent_id,
			'title' => $this->input->post('title'),
			'type' => $this->input->post('type'),
			'link' => $this->input->post('link'),
			'content' => $this->input->post('content'),
			'image' => $image
		);
		$this->db->insert('pages', $field);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function editPages()
	{
		$id = $this->input->get('id');
		$this->db->where('id_pages', $id);
		$query = $this->db->get('pages');
		if ($query->num_rows() > 0) {
			return $query->row();
		} else {
			return false;
		}
	}

	public function updatePages($image)
	{
		$id = $this->input->post('Id');
		$field = array(
			'title' => $this->input->post('title'),
			'type' => $this->input->post('type'),
			'link' => $this->input->post('link'),
			'content' => $this->input->post('content'),
			'image' => $image
		);
		$this->db->where('id_pages', $id);
		$this->db->update('pages', $field);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function deletePages()
	{
		$id = $this->input->get('id');
		$this->db->where('id_pages', $id);
		$this->db->delete('pages');
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function upPages()
	{
		$id = $this->input->get('id');
		$dataSuspect =  $this->showAllPagesById($id);
		$dataVictim = $this->db->get_where('pages', ['idx_pages' => $dataSuspect['idx_pages'] - 1, 'pageparent_id' => $dataSuspect['pageparent_id']])->row_array();
		if ($dataVictim) {
			$victim = array(
				'idx_pages' => $dataSuspect['idx_pages']
			);
			$this->db->where('id_pages', $dataVictim['id_pages']);
			$this->db->update('pages', $victim);
			$suspect = array(
				'idx_pages' => $dataVictim['idx_pages']
			);
			$this->db->where('id_pages', $id);
			$this->db->update('pages', $suspect);
			return true;
		} else {
			return false;
		}
	}

	public function downPages()
	{
		$id = $this->input->get('id');
		$dataSuspect =  $this->showAllPagesById($id);
		$dataVictim = $this->db->get_where('pages', ['idx_pages' => $dataSuspect['idx_pages'] + 1, 'pageparent_id' => $dataSuspect['pageparent_id']])->row_array();
		if ($dataVictim) {
			$victim = array(
				'idx_pages' => $dataSuspect['idx_pages']
			);
			// var_dump($dataVictim);
			// die();
			$this->db->where('id_pages', $dataVictim['id_pages']);
			$this->db->update('pages', $victim);
			$suspect = array(
				'idx_pages' => $dataVictim['idx_pages']
			);
			$this->db->where('id_pages', $id);
			$this->db->update('pages', $suspect);
			return true;
		} else {
			return false;
		}
	}
}

/* End of file M_pages.php */
/* Location: ./application/models/M_pages.php */