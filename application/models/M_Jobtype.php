<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_jobtype extends CI_Model
{
    public function showAllJobtype()
    {
        $this->db->select('*');
        $this->db->from('jobtype');

        $data = $this->db->get();

        return $data->result();
    }

    public function showAllJobtypeById($id)
    {
        $this->db->select('*');
        $this->db->from('jobtype');
        $this->db->where('id_jobtype', $id);

        $data = $this->db->get();

        return $data->row_array();
    }

    public function addJobtype()
    {
        $allJobtype = $this->showAllJobtype();
        $newIdOrder = count($allJobtype) + 1;
        $newId = "JT" . $newIdOrder;
        $idCheck = $this->showAllJobtypeById($newId);

        if (!$idCheck) {
            $id = $newId;
        } else {
            $i = 1;
            while ($idCheck) {
                $newId = "JT" . ($newIdOrder + $i);
                $idCheck = $this->showAllJobtypeById($newId);
                $i++;
            }
            $id = $newId;
        }

        $field = array(
            'id_jobtype' => $id,
            'jobtype_name' => ucfirst($this->input->post('name'))
        );
        $this->db->insert('jobtype', $field);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function editJobtype()
    {
        $id = $this->input->get('id');
        $this->db->where('id_jobtype', $id);
        $query = $this->db->get('jobtype');
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }

    public function updateJobtype()
    {
        $id = $this->input->post('Id');
        $field = array(
            'jobtype_name' => ucfirst($this->input->post('name'))
        );
        $this->db->where('id_jobtype', $id);
        $this->db->update('jobtype', $field);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteJobtype()
    {
        $id = $this->input->get('id');
        // var_dump($id);
        // echo "string";
        $this->db->where('id_jobtype', $id);
        $this->db->delete('jobtype');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}

/* End of file M_jobtype.php */
/* Location: ./application/models/M_jobtype.php */