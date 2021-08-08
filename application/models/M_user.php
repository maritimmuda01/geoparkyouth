<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	public function select_all(){

		$data = $this->db->query("SELECT * FROM user WHERE is_active=1 ORDER BY name ");

		return $data->result();

	}

	public function select_profile($id){

		return $this->db->get_where('user', ["id"=> $id])->row_array();

	}

	public function select_role_admin()
	{
		$data = $this->db->query("SELECT * FROM user WHERE 'role_id'=1 ");

		return $data->result();
	}

	public function select_role_user()
	{
		$data = $this->db->query("SELECT * FROM user WHERE 'role_id'=2 ");

		return $data->result();
	}

	public function select_by_id($id)
	{
		return $this->db->get_where('user', ["id"=> $id])->row();
	}

	public function user_role_to_user($id)
	{
		return $this->db->where("id", $id)->update('user', array("role_id" => '2'));
	}

	public function user_role_to_admin($id)
	{
		return $this->db->where("id", $id)->update('user', array("role_id" => '1'));
	}

	public function user_delete($id)
    {
        return $this->db->delete('user', array("id" => $id));
    }
}
?>