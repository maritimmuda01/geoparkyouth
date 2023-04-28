<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_role extends CI_Model
{
    public function showAllRole()
    {
        $this->db->select('*');
        $this->db->from('role');

        $data = $this->db->get();

        return $data->result();
    }
}
