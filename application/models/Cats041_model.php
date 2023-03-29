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

    public function validation()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('name_041', 'Cat Name', 'required');
        $this->form_validation->set_rules('type_041', 'Cat type', 'required');
        $this->form_validation->set_rules('gender_041', 'Cat gender', 'required');
        $this->form_validation->set_rules('age_041', 'Cat age', 'required|numeric');
        $this->form_validation->set_rules('price_041', 'Cat price', 'required|numeric');

        if ($this->form_validation->run())
            return TRUE;
        else
            return FALSE;
    }

    public function sale($id)
    {
        $data = array(
            'customer_name_041' => $this->input->post('customer_name_041'),
            'customer_address_041' => $this->input->post('customer_address_041'),
            'customer_phone_041' => $this->input->post('customer_phone_041'),
            'cat_id_041' => $id
        );
        $this->db->insert('catseles041', $data);

        $this->db->set('sold_041', '1');
        $this->db->where('id_041', $id);
        $this->db->update('cats041', $sold);
    }

    public function sales()
    {
        //$query = $this->db->get('catseles041');

        $this->db->select('*');
        $this->db->from('catseles041');
        $this->db->join('cats041', 'catseles041.cat_id_041 = cats041.id_041');
        $query = $this->db->get();

        return $query->result();
    }
}
