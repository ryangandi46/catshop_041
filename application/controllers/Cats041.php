<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cats041 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //your own constructor code
        if (!$this->session->userdata('username')) redirect('auth041/login');
        $this->load->model('Cats041_model');
        $this->load->model('Categories041_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->library('pagination');

        $config['base_url'] = site_url('cats041/index');
        $config['total_rows'] = $this->db->count_all('cats041');
        $config['per_page'] = 5;
        /*
      start 
      add boostrap class and styles
    */
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['first_tag_close'] = '</span></li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['prev_tag_close'] = '</span></li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['next_tag_close'] = '</span></li>';
        $config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['last_tag_close'] = '</span></li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close'] = '</span></li>';
        /*
      end 
      add boostrap class and styles
    */
        $this->pagination->initialize($config);

        $limit = $config['per_page'];
        $start = $this->uri->segment(3) ? $this->uri->segment(3) : 0;

        $data["links"] = $this->pagination->create_links();
        $data['i'] = $start + 1;
        $data['cats'] = $this->Cats041_model->read($limit, $start);
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
        if ($this->session->userdata('usertype') != 'Manager') redirect('welcome');
        $data['sales'] = $this->Cats041_model->sales();
        $this->load->view('cats041/sale_list_041', $data);
    }

    public function changecat($id, $old_photo)
    {
        if (!$this->session->userdata('username')) redirect('auth041/login'); //filter LOGIN
        $data['error'] = '';
        if ($this->input->post('upload')) {
            if ($this->upload()) { // jikas sukses upload
                $this->Cats041_model->changecat($id, $old_photo,$this->upload->data('file_name')); //ubah data foto database
                //$this->session->userdata('photo', $this->upload->data('file_name')); //ubah data session
                $this->session->flashdata('msg', '<p style="color:green">Photo seccesfuly changed !</p>'); //pesan sukses
            } else $data['error'] = $this->upload->display_errors(); //jika gagal upload
            redirect('cats041');
        }
        $data['cat']=$old_photo;
        $this->load->view('cats041/cat_photo_041', $data);
    }

    public function upload()
    {
        $config['upload_path']          = './uploads/cats/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 0;
        $config['max_width']            = 0;
        $config['max_height']           = 0;

        $this->load->library('upload', $config);
        return $this->upload->do_upload('photo');
    }
}
