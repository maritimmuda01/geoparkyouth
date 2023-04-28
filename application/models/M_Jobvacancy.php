<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_jobvacancy extends CI_Model
{
	public function showAllJobvacancy()
	{
		$this->db->select('*');
		$this->db->from('jobvacancy');
		$this->db->join('user', 'user.id = jobvacancy.user_id');
		$this->db->join('jobtype', 'jobtype.id_jobtype = jobvacancy.type_id');
		$this->db->join('geoname', 'geoname.id_geoname = user.geoname_id');

		$data = $this->db->get();

		return $data->result();
	}

	public function showAllPublishedJobvacancy()
	{
		$this->db->select('*');
		$this->db->from('jobvacancy');
		$this->db->join('user', 'user.id = jobvacancy.user_id');
		$this->db->join('jobtype', 'jobtype.id_jobtype = jobvacancy.type_id');
		$this->db->join('geoname', 'geoname.id_geoname = user.geoname_id');
		$this->db->join('country', 'geoname.country_id = country.id_country');
		$this->db->where('jobvacancy.is_published', 1);
		$this->db->order_by('jobvacancy.time_created', 'DESC');

		$data = $this->db->get();

		return $data->result();
	}

	public function showAllPublishedJobvacancyByCountry($id)
	{
		$this->db->select('*');
		$this->db->from('jobvacancy');
		$this->db->join('user', 'user.id = jobvacancy.user_id');
		$this->db->join('jobtype', 'jobtype.id_jobtype = jobvacancy.type_id');
		$this->db->join('geoname', 'geoname.id_geoname = user.geoname_id');
		$this->db->join('country', 'geoname.country_id = country.id_country');
		$this->db->where('jobvacancy.is_published', 1);
		$this->db->where('country.id_country', $id);
		$this->db->order_by('jobvacancy.time_created', 'DESC');

		$data = $this->db->get();

		return $data->result();
	}

	public function showAllPendingJobvacancy()
	{
		$this->db->select('*');
		$this->db->from('jobvacancy');
		$this->db->join('user', 'user.id = jobvacancy.user_id');
		$this->db->join('jobtype', 'jobtype.id_jobtype = jobvacancy.type_id');
		$this->db->join('geoname', 'geoname.id_geoname = user.geoname_id');
		$this->db->join('country', 'geoname.country_id = country.id_country');
		$this->db->where('jobvacancy.is_published', 0);
		$this->db->order_by('jobvacancy.time_created', 'DESC');

		$data = $this->db->get();

		return $data->result();
	}

	public function showAllPendingJobvacancyByCountry($id)
	{
		$this->db->select('*');
		$this->db->from('jobvacancy');
		$this->db->join('user', 'user.id = jobvacancy.user_id');
		$this->db->join('jobtype', 'jobtype.id_jobtype = jobvacancy.type_id');
		$this->db->join('geoname', 'geoname.id_geoname = user.geoname_id');
		$this->db->join('country', 'geoname.country_id = country.id_country');
		$this->db->where('jobvacancy.is_published', 0);
		$this->db->where('country.id_country', $id);
		$this->db->order_by('jobvacancy.time_created', 'DESC');

		$data = $this->db->get();

		return $data->result();
	}

	public function showAllJobvacancyById($id)
	{
		$this->db->select('*');
		$this->db->from('jobvacancy');
		$this->db->join('user', 'user.id = jobvacancy.user_id');
		$this->db->join('jobtype', 'jobtype.id_jobtype = jobvacancy.type_id');
		$this->db->join('geoname', 'geoname.id_geoname = user.geoname_id');
		$this->db->where('jobvacancy.id_job', $id);

		$data = $this->db->get();

		return $data->row_array();
	}

	public function showAllJobvacancyByUser()
	{
		$author = $this->M_User->getMyAccount();
		$user_id = $author->id_user;
		$this->db->select('*');
		$this->db->from('jobvacancy');
		$this->db->join('user', 'user.id = jobvacancy.user_id');
		$this->db->join('jobtype', 'jobtype.id_jobtype = jobvacancy.type_id');
		$this->db->join('geoname', 'geoname.id_geoname = user.geoname_id');
		$this->db->where('jobvacancy.user_id', $user_id);

		$data = $this->db->get();

		return $data->result();
	}

	public function addJobvacancy()
	{
		$author = $this->M_User->getMyAccount();
		$user_id = $author->id_user;
		$role_id = $author->role_id;

		$allJobvacancy = $this->showAllJobvacancy();
		$newIdOrder = count($allJobvacancy) + 1;
		$newId = "JV" . $newIdOrder;
		$idCheck = $this->showAllJobvacancyById($newId);

		if (!$idCheck) {
			$id = $newId;
		} else {
			$i = 1;
			while ($idCheck) {
				$newId = "JV" . ($newIdOrder + $i);
				$idCheck = $this->showAllJobvacancyById($newId);
				$i++;
			}
			$id = $newId;
		}

		if ($role_id == 2) {
			$is_published = 0;
		} else {
			$is_published = 1;
		}

		$field = array(
			'id_job' => $id,
			'job_position' => ucwords(addslashes($this->input->post('position'))),
			'job_company' => ucwords(addslashes($this->input->post('company'))),
			'location' => ucwords(addslashes($this->input->post('location'))),
			'type_id' => $this->input->post('type_id'),
			'description' => $this->input->post('description'),
			'user_id' => $user_id,
			'is_published' => $is_published
		);
		$this->db->insert('jobvacancy', $field);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function editJobvacancy()
	{
		$id = $this->input->get('id');
		$this->db->where('id_job', $id);
		$query = $this->db->get('jobvacancy');
		if ($query->num_rows() > 0) {
			return $query->row();
		} else {
			return false;
		}
	}

	public function updateJobvacancy($image)
	{
		$id = $this->input->post('Id');
		$field = array(
			'jobvacancy' => ucfirst($this->input->post('name')),
			'geotype_id' => $this->input->post('geotype'),
			'country_id' => $this->input->post('country'),
			'image' => $image
		);
		$this->db->where('id_job', $id);
		$this->db->update('jobvacancy', $field);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function publishJobvacancy()
	{
		$id = $this->input->get('id');
		$field = array(
			'is_published' => 1
		);
		$this->db->where('id_job', $id);
		$this->db->update('jobvacancy', $field);

		$job = $this->db->get_where('jobvacancy', ['id_job' => $id])->row_array();

		$field = array(
			'text' => 'Your job vacancy for <strong>' . $job['job_company'] . '</strong> has been published!',
			'type' => 'account/myJobvacancy',
			'type_color' => 'primary',
			'type_icon' => 'fa fa-check',
			'user_id' => $job['user_id'],
			'is_read' => 0
		);
		$this->db->insert('notifications', $field);

		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function unpublishJobvacancy()
	{
		$id = $this->input->get('id');
		$field = array(
			'is_published' => 0
		);
		$this->db->where('id_job', $id);
		$this->db->update('jobvacancy', $field);

		$job = $this->db->get_where('jobvacancy', ['id_job' => $id])->row_array();

		$field = array(
			'text' => 'Your job vacancy for <strong>' . $job['job_company'] . '</strong> has been unpublished!',
			'type' => 'account/myJobvacancy',
			'type_color' => 'warning',
			'type_icon' => 'fa fa-exclamation-circle',
			'user_id' => $job['user_id'],
			'is_read' => 0
		);
		$this->db->insert('notifications', $field);


		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function deleteJobvacancy()
	{
		$id = $this->input->get('id');
		$this->db->where('id_job', $id);
		$this->db->delete('jobvacancy');
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
}

/* End of file M_jobvacancy.php */
/* Location: ./application/models/M_jobvacancy.php */