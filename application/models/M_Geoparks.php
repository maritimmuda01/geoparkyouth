<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_geoparks extends CI_Model
{
    public function showAllGeoparks()
    {
        $this->db->select('*');
        $this->db->from('geoname');
        $this->db->join('country', 'country.id_country = geoname.country_id');
        $this->db->join('region', 'region.id_region = country.region_id');
        $this->db->order_by('geoname.geoname', 'ASC');

        $data = $this->db->get();

        return $data->result();
    }

    public function showAllGeoparksById($id)
    {
        $this->db->select('*');
        $this->db->from('geoname');
        $this->db->join('country', 'country.id_country = geoname.country_id');
        $this->db->join('region', 'region.id_region = country.region_id');
        $this->db->join('geotype', 'geotype.id_geotype = geoname.geotype_id');
        $this->db->where('geoname.id_geoname', $id);
        $this->db->order_by('geoname.geoname', 'ASC');

        $data = $this->db->get();

        return $data->row_array();
    }

    public function showAllGeoparksByCountryId($id)
    {
        $this->db->select('*');
        $this->db->from('geoname');
        $this->db->join('country', 'country.id_country = geoname.country_id');
        $this->db->join('region', 'region.id_region = country.region_id');
        $this->db->join('geotype', 'geotype.id_geotype = geoname.geotype_id');
        $this->db->where('geoname.country_id', $id);
        $this->db->order_by('geoname.geoname', 'ASC');

        $data = $this->db->get();

        return $data->result();
    }

    public function showAllGeoparksByCountryAndType($country, $type)
    {
        $this->db->select('*');
        $this->db->from('geoname');
        $this->db->join('country', 'country.id_country = geoname.country_id');
        $this->db->join('region', 'region.id_region = country.region_id');
        $this->db->join('geotype', 'geotype.id_geotype = geoname.geotype_id');
        $this->db->where('geoname.country_id', $country);
        $this->db->where('geotype.id_geotype', $type);
        $this->db->order_by('geoname.geoname', 'ASC');

        $data = $this->db->get();

        return $data->result();
    }

    public function addGeoparks($image, $country_id)
    {
        $allGeoparks = $this->showAllGeoparks();
        $newIdOrder = count($allGeoparks) + 1;
        $newId = "GP" . $newIdOrder;
        $idCheck = $this->showAllGeoparksById($newId);

        if (!$idCheck) {
            $id = $newId;
        } else {
            $i = 1;
            while ($idCheck) {
                $newId = "GP" . ($newIdOrder + $i);
                $idCheck = $this->showAllGeoparksById($newId);
                $i++;
            }
            $id = $newId;
        }

        $field = array(
            'id_geoname' => $id,
            'geoname' => ucfirst($this->input->post('name')),
            'geotype_id' => $this->input->post('geotype'),
            'country_id' => $this->input->post('country'),
            'geo_insta' => $this->input->post('instagram'),
            'geo_link' => $this->input->post('link'),
            'lat' => $this->input->post('latitude'),
            'long' => $this->input->post('longitude'),
            'image' => $image

        );
        $this->db->insert('geoname', $field);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function editGeoparks()
    {
        $id = $this->input->get('id');
        $this->db->where('id_geoname', $id);
        $query = $this->db->get('geoname');
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }

    public function updateGeoparks($image)
    {
        $id = $this->input->post('Id');
        $field = array(
            'geoname' => ucfirst($this->input->post('name')),
            'geotype_id' => $this->input->post('geotype'),
            'country_id' => $this->input->post('country'),
            'geo_insta' => $this->input->post('instagram'),
            'geo_link' => $this->input->post('link'),
            'lat' => $this->input->post('latitude'),
            'long' => $this->input->post('longitude'),
            'image' => $image
        );
        $this->db->where('id_geoname', $id);
        $this->db->update('geoname', $field);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteGeoparks()
    {
        $id = $this->input->get('id');
        $this->db->where('id_geoname', $id);
        $this->db->delete('geoname');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}

/* End of file M_geoname.php */
/* Location: ./application/models/M_geoname.php */