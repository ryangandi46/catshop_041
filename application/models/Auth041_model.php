<?php defined('BASEPATH') or exit('No direct script access allowed'); 

class Auth041_model extends CI_Model
{
    public function getuser($username)
    {
        $this->db->where('username_041', $username);               
        return $this->db->get('user')->row();
    }

    public function changepass()
    {
        $this->db->set('password_041', password_hash($this->input->post('newpassword'), PASSWORD_DEFAULT));
        $this->db->where('username_041', $this->session->userdata('username'));
        return $this->db->update('user');
    }

    public function changephoto($photo)
    {
        if($this->session->userdata('photo') !== 'default.png')
            unlink('./uploads/users/'.$this->session->userdata('photo')); //hapus foto lama

        $this->db->set('photo_041', $photo);
        $this->db->where('username_041',$this->session->userdata('username'));
        return $this->db->update('user');
    }

}