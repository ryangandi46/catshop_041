<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categories041 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //your own constructor code
		if(! $this->session->userdata('username')) redirect('auth041/login');
        $this->load->model('Categories041_model');
    }
    public function index()
    {
        $data['cats']=$this->Categories041_model->read();
        $this->load->view('categories/list_categories',$data);
    }

    public function add()
    {
        if ($this->input->post('submit')) {
            $this->Categories041_model->create();
            redirect('categories041');
        }
        $this->load->view('categories/categories_form');
    }

    public function edit($id)
    {
        if ($this->input->post('submit')) {
            $this->Categories041_model->update($id);
            redirect('categories041');
        }
        $data['cat']=$this->Categories041_model->read_by($id);
        $this->load->view('categories/categories_form',$data);
    }

    public function delete($id)
    {
        $this->Categories041_model->delete($id);
        redirect('categories041');
    }

}