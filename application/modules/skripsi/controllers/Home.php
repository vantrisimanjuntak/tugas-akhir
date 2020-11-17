<?php class Home extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Main_model');
    }
    function index()
    {
        $data['title'] = "Portal Tugas Akhir";
        $data['dosen'] = $this->Main_model->allLecture();
        $this->load->view('skripsi_view', $data);
    }
    function checknim()
    {
        $nim = $this->input->post('nim');
        if ($nim != '') {
            $this->Main_model->checknim($nim);
        } else {
            echo "NIM KOSONG";
        }
    }
}
