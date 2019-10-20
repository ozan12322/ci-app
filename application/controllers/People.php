<?php

class People extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'List of People';

        $this->load->model('Peoples_model', 'peoples');

        //load library
        $this->load->library('pagination');

        //ambil data keyword
        if($this->->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword, $data['keyword);

        } else {
            $data['keyword'] = $this->session->userdata('keyword');

        }
        //config
        $this->db->like('name', $data['keyword']);
        $this->db->like('email', $data['keyword']);
        $this->db->from('peoples');
        $config['per_page'] = 8;

        //initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->url->segment(3);
        $data['peoples'] = $this->peoples->getPeoples($config['per_page'], $data['start'], $data['keyword']);

        $this->load->view('templates/header', $data);
        $this->load->view('peoples/index', $data);
        $this->load->view('templates/footer');

    }
}