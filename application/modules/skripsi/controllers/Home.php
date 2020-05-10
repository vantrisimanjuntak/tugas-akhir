<?php class Home extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Main_model');
    }
    function index()
    {
        $data['title'] = "Portal Tugas Akhir";
        $data['dosen'] = $this->Main_model->allLecture();
        $this->load->view('index', $data);
    }
    function submitSkripsi()
    {
        $no_reg = $this->input->post('no_reg');
        $nim = $this->input->post('nim');
        $judulskripsi = $this->input->post('judul_skripsi');
        $abstrak = $this->input->post('abstrak');
        $dosen1 = $this->input->post('dp_1');
        $dosen2 = $this->input->post('dp_2');

        $this->Main_model->submitSkripsi($no_reg, $nim, $judulskripsi, $abstrak, $dosen1, $dosen2);
    }
}
