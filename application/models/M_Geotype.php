<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_geotype extends CI_Model
{
    public function showAllGeotype()
    {
        $this->db->select('*');
        $this->db->from('geotype');

        $data = $this->db->get();

        return $data->result();
    }
}
/* End of file M_geotype.php */
/* Location: ./application/models/M_geotype.php */