<?php

class Peoples extends CI_Controller
{


    public function index()
    {

        $this->load->model('Mahasiswa_model');
        $data['judul'] = 'Daftar Peoples';

        $this->load->model('Peoples_model', 'peoples');

        // Ambil Keyword
        // $data['keyword'] = null;
        if ($this->input->post('submit')) {
            // echo $this->input->post('keyword');
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
            // var_dump($data['keyword']);
        }

        // Pagination
        if (empty($data['keyword']) or $data['keyword'] = null) {
        }
        $this->db->like('name', $data['keyword']);
        $this->db->or_like('email', $data['keyword']);
        $this->db->from('peoples');
        $config['total_rows'] = $this->db->count_all_results();
        $data['hasil_cari'] = $config['total_rows'];
        $config['per_page'] = 8;


        //initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['peoples'] = $this->peoples->getPeoples($config['per_page'], $data['start'], $data['keyword']);

        $this->load->view('templates/header', $data);
        $this->load->view('peoples/index', $data);
        $this->load->view('templates/footer');

        $this->session->unset_userdata('keyword');
    }
}
