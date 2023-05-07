<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users041 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //your own constructor code
        if (!$this->session->userdata('username')) redirect('auth041/login');
        if ($this->session->userdata('usertype') != 'Manager') redirect('welcome');
        $this->load->model('Users041_model');
    }
    public function index()
    {
        $data['users'] = $this->Users041_model->read();
        $this->load->view('users041/list_users_041', $data);
    }

    public function add()
    {
        if ($this->input->post('submit')) {
            $this->Users041_model->create();
            redirect('users041');
        }
        $this->load->view('users041/users_form_041');
    }

    public function edit($id)
    {
        if ($this->input->post('submit')) {
            $this->Users041_model->update($id);
            redirect('users041');
        }
        $data['user'] = $this->Users041_model->read_by($id);
        $this->load->view('users041/users_form_041', $data);
    }

    public function delete($id)
    {
        $this->Users041_model->delete($id);
        redirect('users041');
    }

 

    //public function resetpass($id)
    //{
    //    $update = $this->Users041_model->resetpass($id);
    //    $data['user'] = $this->Users041_model->read_by($id);
    //    if ($update) {
    //        $this->session->set_flashdata('msg', '<p style="color:green">Reset password succes !</p>');
    //    } else {
    //        $this->session->set_flashdata('msg', '<p style="color:red">Reset password failed !</p>');
    //    }
    //    redirect('users041');
        
    //}

    public function resetpass($userid)
    {
        $user = $this->Users041_model->read_by($userid);
        $this->Users041_model->resetpass($userid,$user);
        if($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg','<p style="color:green">Password Successfully Reset !</p>');
        } else {
            $this->session->set_flashdata('msg','<p style="color:red">Password Reset Failed !</p>');
        }
        redirect('users041/index');
    }
}
