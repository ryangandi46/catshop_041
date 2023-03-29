<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categories041_model extends CI_Model
{

    public function create()
    {
        $data = array(
            'cate_name_041' => $this->input->post('cate_name_041'),                        
            'description_041' => $this->input->post('description_041')
        );
        $this->db->insert('categories041', $data);
    }

    public function read()
    {
        $query = $this->db->get('categories041');
        return $query->result();
    }

    public function read_by($id)
    {
        $this->db->where('cate_id_041', $id);
        $query = $this->db->get('categories041');
        return $query->row();
    }

    public function update($id)
    {
        $data = array(
            'cate_name_041' => $this->input->post('cate_name_041'),           
            'description_041' => $this->input->post('description_041')
        );
        $this->db->where('cate_id_041', $id);
        $this->db->update('categories041', $data);
    }

    public function delete($id)
    {
        $this->db->where('cate_id_041', $id);
        $this->db->delete('categories041');
    }
}
