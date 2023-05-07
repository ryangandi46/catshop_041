<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users041_model extends CI_Model
{

    public function create()
    {
        $data = array(
            'username_041' => $this->input->post('username_041'),
            'usertype_041' => $this->input->post('usertype_041'),
            'fullname_041' => $this->input->post('fullname_041'),
            'password_041' => password_hash($this->input->post('usertype_041'), PASSWORD_DEFAULT)
            //'password_041' => $this->input->post('usertype_041')
        );
        $this->db->insert('user', $data);
    }

    public function read()
    {
        $query = $this->db->get('user');
        return $query->result();
    }

    public function read_by($userid)
    {
        $this->db->where('userid_041', $userid);
        $query = $this->db->get('user');
        return $query->row();
    }

    public function update($userid)
    {
        $data = array(
            'username_041' => $this->input->post('username_041'),
            'usertype_041' => $this->input->post('usertype_041'),
            'fullname_041' => $this->input->post('fullname_041')
        );
        $this->db->where('userid_041', $userid);
        $this->db->update('user', $data);
    }

    public function delete($userid)
    {
        $this->db->where('userid_041', $userid);
        $this->db->delete('user');
    }

    //public function resetpass($id)
    //{        
    //    $this->db->set('password_041', password_hash('usertype_041', PASSWORD_DEFAULT));        
    //    $this->db->where('userid_041',$id);
    //    return $this->db->update('user');
   // }

    public function resetpass($userid,$user)
    {
        $this->db->set('password_041', password_hash($user->usertype_041, PASSWORD_DEFAULT));
        $this->db->where('userid_041',$userid);
        $this->db->update('user');
    }
}
