<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cats041_model extends CI_Model
{

    public function create()
    {
        $data = array(
            'name_041' => $this->input->post('name_041'),
            'type_041' => $this->input->post('type_041'),
            'gender_041' => $this->input->post('gender_041'),
            'age_041' => $this->input->post('age_041'),
            'price_041' => $this->input->post('price_041')
        );
        $this->db->insert('cats041', $data);
    }

    public function read()
    {
        $query = $this->db->get('cats041');
        return $query->result();
    }

    public function read_by($id)
    {
        $this->db->where('id_041', $id);
        $query = $this->db->get('cats041');
        return $query->row();
    }

    public function update($id)
    {
        $data = array(
            'name_041' => $this->input->post('name_041'),
            'type_041' => $this->input->post('type_041'),
            'gender_041' => $this->input->post('gender_041'),
            'age_041' => $this->input->post('age_041'),
            'price_041' => $this->input->post('price_041')
        );
        $this->db->where('id_041', $id);
        $this->db->update('cats041', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_041', $id);
        $this->db->delete('cats041');
    }
}
