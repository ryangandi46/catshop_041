<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth041 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth041_model');
        $this->load->library('form_validation');
    }

    public function login()
    {
        if ($this->input->post('login') && $this->validation('login')) {
            $login = $this->Auth041_model->getuser($this->input->post('username'));
            if ($login != NULL) {
                if (password_verify($this->input->post('password'), $login->password_041)) {
                    $data = array(
                        'username' => $login->username_041,
                        'usertype' => $login->usertype_041,
                        'fullname' => $login->fullname_041,
                        'photo' => $login->photo_041
                    );
                    $this->session->set_userdata($data);
                    redirect('welcome');
                }
            }
            $this->session->set_flashdata('msg', '<p style="color:red">Invalid username or password !</p>');
        }
        $this->load->view('auth041/form_login_041');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth041/login');
    }

    public function changepass()
    {
        if (!$this->session->userdata('username')) redirect('auth041/login'); //filter LOGIN
        if ($this->input->post('change') && $this->validation('change')) {
            $change = $this->Auth041_model->getuser($this->session->userdata('username'));
            if (password_verify($this->input->post('oldpassword'), $change->password_041)) {
                if ($this->Auth041_model->changepass())
                    $this->session->set_flashdata('msg', '<p style="color:green">Password successfully changed !</p>');
                else
                    $this->session->set_flashdata('msg', '<p style="color:red">Change Password failed !</p>');
            } else {
                $this->session->set_flashdata('msg', '<p style="color:red">Wrong old Password !</p>');
            }
        }
        $this->load->view('auth041/form_password_041');
    }

    public function changephoto()
    {
        if (!$this->session->userdata('username')) redirect('auth041/login'); //filter LOGIN
        $data['error'] = '';
        if ($this->input->post('upload')) {
            if ($this->upload()) { // jikas sukses upload
                $this->Auth041_model->changephoto($this->upload->data('file_name')); //ubah data foto database
                $this->session->set_userdata('photo', $this->upload->data('file_name')); //ubah data session
                $this->session->set_flashdata('msg', '<p style="color:green">Photo seccesfuly changed !</p>'); //pesan sukses
            } else $data['error'] = $this->upload->display_errors(); //jika gagal upload
        }
        $this->load->view('auth041/form_photo_041', $data);
    }

    public function upload()
    {
        $config['upload_path']          = './uploads/users/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);
        return $this->upload->do_upload('photo');
    }

    public function validation($type)
    {
        $this->load->library('form_validation');

        if ($type == 'login') {
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
        } else {
            $this->form_validation->set_rules('oldpassword', 'Old Password', 'required');
            $this->form_validation->set_rules('newpassword', 'New Password', 'required');
        }
        return $this->form_validation->run() ? TRUE : FALSE;
    }
}
