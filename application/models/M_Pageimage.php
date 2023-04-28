<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pageimage extends CI_Model
{
    public function showAllPageimage()
    {
        $this->db->select('*');
        $this->db->from('page_images');
        $this->db->join('pages', 'pages.id_pages = page_images.page_id');

        $data = $this->db->get();

        return $data->result();
    }

    public function showAllPageimageById($id)
    {
        $this->db->select('*');
        $this->db->from('page_images');
        $this->db->join('pages', 'pages.id_pages = page_images.page_id');
        $this->db->where('page_images.id_pageimage', $id);

        $data = $this->db->get();

        return $data->row_array();
    }

    public function showAllPageimageByPageId($id)
    {
        $this->db->select('*');
        $this->db->from('page_images');
        $this->db->join('pages', 'pages.id_pages = page_images.page_id');
        $this->db->where('page_images.page_id', $id);

        $data = $this->db->get();

        return $data->result();
    }

    public function addPageimage($image, $page_id)
    {
        $allPageimage = $this->showAllPageimage();
        $newIdOrder = count($allPageimage) + 1;
        $newId = "PI" . $newIdOrder;
        $idCheck = $this->showAllPageimageById($newId);

        if (!$idCheck) {
            $id = $newId;
        } else {
            $i = 1;
            while ($idCheck) {
                $newId = "PI" . ($newIdOrder + $i);
                $idCheck = $this->showAllPageimageById($newId);
                $i++;
            }
            $id = $newId;
        }

        $field = array(
            'id_pageimage' => $id,
            'page_id' => $page_id,
            'file' => $image

        );
        $this->db->insert('page_images', $field);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function deletePageimage()
    {
        $id = $this->input->get('id');
        $this->db->where('id_pageimage', $id);
        $this->db->delete('page_images');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}

/* End of file M_page_images.php */
/* Location: ./application/models/M_page_images.php */