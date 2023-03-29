<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cats041 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //your own constructor code
        $this->load->model('Cats041_model');
        $this->load->model('Categories041_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['cats'] = $this->Cats041_model->read();
        $this->load->view('cats041/cat_list_041', $data);
    }

    public function add()
    {
        if ($this->input->post('submit')) {
            if ($this->Cats041_model->validation()) {
                $this->Cats041_model->create();
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('msg', '<p class="text-success">Cat successfuly added !</p>');
                } else {
                    $this->session->set_flashdata('msg', '<p class="text-danger">Cat added failed !</P>');
                }
                redirect('cats041');
            }
        }
        $data['category'] = $this->Categories041_model->read();
        $this->load->view('cats041/cat_form_041', $data);
    }

    public function edit($id)
    {
        if ($this->input->post('submit')) {
            if ($this->Cats041_model->validation()) {
                $this->Cats041_model->update($id);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('msg', '<p class="text-success">Cat successfuly updated !</p>');
                } else {
                    $this->session->set_flashdata('msg', '<p class="text-danger">Cat updated failed !</P>');
                }
                redirect('cats041');
            }
        }
        $data['category'] = $this->Categories041_model->read();
        $data['cat'] = $this->Cats041_model->read_by($id);
        $this->load->view('cats041/cat_form_041', $data);
    }

    public function delete($id)
    {
        $this->Cats041_model->delete($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', '<p class="text-success">Cat successfuly deleted!</p>');
        } else {
            $this->session->set_flashdata('msg', '<p class="text-danger">Cat deleted failed !</P>');
        }
        redirect('cats041');
    }

    public function sale($id)
    {
        if ($this->input->post('submit')) {
            $this->Cats041_model->sale($id);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('msg', '<p class="text-success">Cat successfuly sold !</p>');
            } else {
                $this->session->set_flashdata('msg', '<p class="text-danger">Cat sale failed !</P>');
            }
            redirect('cats041');
        }

        $data['cat'] = $this->Cats041_model->read_by($id);
        $this->load->view('cats041/cat_sale_041', $data);
    }
    public function sales()
    {
        $data['sales'] = $this->Cats041_model->sales();
        $this->load->view('cats041/sale_list_041', $data);
    }
}
