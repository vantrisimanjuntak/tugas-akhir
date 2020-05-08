<?php class Lecture extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_model');
    }
    function index()
    {
        $data['title'] = "Dosen Pembimbing";
        $data['program_studi'] = $this->Model_model->allProdi();
        $this->load->view('index', $data);
    }
    function add_dosen()
    {
        $this->Model_model->add_supervisor();
    }
}
