<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jobs extends CI_Model {

	public function select_all() {

		$data = $this->db->query('SELECT jobs.id as id, jobs.position as position, jobs.company as company, jobs.location as location, jobs.type as type, jobs.description as description, jobs.author_id as author_id, jobs.created_date as created_date, jobs.is_published as is_published, user.id as user_id, user.name as author FROM jobs, user WHERE jobs.author_id = user.id ORDER BY jobs.created_date DESC');

		return $data->result();
	}

	public function select_by_user_published($id) {

		$data = $this->db->query("SELECT * FROM jobs WHERE author_id = '{$id}' AND is_published = 1");

		return $data->result();
	}

	public function select_by_user($id) {

		$data = $this->db->query("SELECT * FROM jobs WHERE author_id = '{$id}' ");

		return $data->result();
	}

	public function select_published() {

		$data = $this->db->query('SELECT jobs.id as id, jobs.position as position, jobs.company as company, jobs.location as location, jobs.type as type, jobs.description as description, jobs.author_id as author_id, jobs.created_date as created_date, jobs.is_published as is_published, user.id as user_id, user.name as author FROM jobs, user WHERE jobs.author_id = user.id AND jobs.is_published = 1 ORDER BY jobs.created_date DESC');

		return $data->result();
	}

	public function select_single($id) {

		$data = $this->db->query("SELECT jobs.id as id, jobs.position as position, jobs.company as company, jobs.location as location, jobs.type as type, jobs.description as description, jobs.author_id as author_id, jobs.created_date as created_date, user.id as user_id, user.name as author FROM jobs, user WHERE jobs.author_id = user.id AND jobs.id = {$id}");

		return $data->row_array();
	}

	public function total_jobs(){
		
		$data = $this->db->query("SELECT * FROM jobs");
		return $data->num_rows();
	}

	public function pending_jobs(){
		
		$data = $this->db->query("SELECT * FROM jobs WHERE is_published = 0");
		return $data->num_rows();
	}


		public function jobs_publish($id)
	{	
		return $this->db->where("id", $id)->update('jobs',  array("is_published" => '1'));
	}

	public function jobs_unpublish($id)
	{
		return $this->db->where("id", $id)->update('jobs', array("is_published" => '0'));
	}


	public function jobs_delete($id)
    {
        return $this->db->delete('jobs', array("id" => $id));
        exit();
    }
}
?>