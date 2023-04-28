<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_notifications extends CI_Model
{

	public function showAllNotifications()
	{
		$id = $this->session->userdata('id');

		$this->db->select('*');
		$this->db->from('notifications');
		$this->db->where('user_id', $id);
		$this->db->order_by('time_created', 'DESC');
		$data = $this->db->get();
		if ($data->num_rows() > 0) {
			return $data->result();
		} else {
			return false;
		}
	}

	public function editNotifications()
	{
		$id = $this->input->get('id_notification');
		$this->db->where('id_notification', $id);
		$query = $this->db->get('notifications');
		if ($query->num_rows() > 0) {
			return $query->row();
		} else {
			return false;
		}
	}

	public function updateNotifications()
	{
		$id = $this->session->userdata('id');

		$field = array(
			'is_read' => 1
		);
		$this->db->where('user_id', $id);
		$this->db->update('notifications', $field);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
}
