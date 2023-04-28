<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Message extends CI_Model {

	public function ownerDetails(){
		if($this->session->userdata('id')){
			$mysession = $this->session->userdata('id');
			$this->db->select('*');
			$this->db->where('id',$mysession);
			$res = $this->db->get('user')->result_array();
			return $res;
		}
	}

	public function allUser(){
		if($this->session->userdata('id')){
			$mysession = $this->session->userdata('id');
			$this->db->select('*');
			$this->db->where('id != ',$mysession);
			$data = $this->db->get('user');
			if($data->num_rows() > 0){
				return $data->result_array();
			}else{
				return false;
			}
		}
	}

	public function sentMessage($data){
		$this->db->insert('user_messages',$data);
	}
	public function getmessage($data){
		$this->db->select('*');
		$session_id = $this->session->userdata('id');
		$where = "sender_message_id = '$session_id' AND receiver_message_id = '$data' OR 
		sender_message_id = '$data' AND receiver_message_id = '$session_id'";
		$this->db->where($where);
		// $this->db->order_by('time', 'ASC');
		$result = $this->db->get('user_messages')->result_array();
		return $result;
	}
	public function getLastMessage($data){
		$this->db->select('*');
		$session_id = $this->session->userdata('id');
		$where = "sender_message_id = '$session_id' AND receiver_message_id = '$data' OR 
		sender_message_id = '$data' AND receiver_message_id = '$session_id'";
		$this->db->where($where);
		$this->db->order_by('time', 'DESC');
		$result = $this->db->get('user_messages', 1)->result_array();
		return $result;
	}
	public function getIndividual($unique_id){
		$this->db->select('*');
		$this->db->where('id',$unique_id);
		$res = $this->db->get('user')->result_array();
		return $res;
	}
	public function updateBio($data){
		if($this->session->userdata('id')){
			$session_id = $this->session->userdata('id');
			$bio = $data['bio'];
			$dob = $data['dob'];
			$address = $data['address'];
			$phone = $data['phone'];

			$this->db->query("UPDATE user SET bio = '$bio', dob = '$dob', address = '$address', phone = '$phone' WHERE id = '$session_id'");
			// return $data;
		}
	}
	public function blockUser($arr){
		$this->db->insert('block_user',$arr);
	}
	public function unBlockUser($val1, $val2){
		$this->db->query("DELETE FROM block_user WHERE blocked_from = '$val1' AND blocked_to = '$val2'");
	}
	public function getBlockUserData($val1, $val2){
		$this->db->select('*');
		$where = "blocked_from = '$val1' AND blocked_to = '$val2' OR blocked_from = '$val2' AND blocked_to = '$val1'";
		$this->db->where($where);
		$res = $this->db->get('block_user')->result_array();

		return $res;
	}
}


?>