<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_notifications extends CI_Model {
	
	public function select_all($id) {

		$data = $this->db->query("SELECT * FROM notifications WHERE receiver_id = '{$id}'");

		return $data->result();
	}
}
?>