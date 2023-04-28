<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_site extends CI_Model
{
    public function showAllSite()
    {
        $this->db->select('*');
        $this->db->from('site_settings');

        $data = $this->db->get();

        return $data->row_array();
    }
}
