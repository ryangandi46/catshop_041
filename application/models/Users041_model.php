<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users041_model extends CI_Model {
	
	public function create()
	{
        $data = array(
            'username_041' => $this->input->post('username_041'),
            'usertype_041' => $this->input->post('usertype_041'),
            'fullname_041' => $this->input->post('fullname_041'),
            'password_041' => password_hash($this->input->post('password_041'),PASSWORD_DEFAULT)
        );
		$this->db->insert('users041',$data);
	}

    public function read()
    {
        $query=$this->db->get('users041');
        return $query->result();
    }

    public function read_by($usersid)
    {
        $this->db->where('userid_041',$userid);
        $query=$this->db->get('users041');
        return $query->row();
    }

    public function update($userid)
    {
        $data = array(
            'username_041' => $this->input->post('username_041'),
            'usertype_041' => $this->input->post('usertype_041'),
            'fullname_041' => $this->input->post('fullname_041')
        );
    }
}
