<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cats041 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //your own constructor code
        $this->load->model('Cats041_model');
    }

    public function index()
    {
        $data['cats']=$this->Cats041_model->read();
        $this->load->view('cats041/cat_list_041',$data);
    }

    public function add()
    {
        if ($this->input->post('submit')) {
            $this->Cats041_model->create();
            redirect('cats041');
        }
        $this->load->view('cats041/cat_form_041');
    }

    public function edit($id)
    {
        if ($this->input->post('submit')) {
            $this->Cats041_model->update($id);
            redirect('cats041');
        }
        $data['cat']=$this->Cats041_model->read_by($id);
        $this->load->view('cats041/cat_form_041',$data);
    }

    public function delete($id)
    {
        $this->Cats041_model->delete($id);
        redirect('cats041');
    }
}
