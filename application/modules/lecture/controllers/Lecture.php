<?php class Lecture extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Main_model');
    }
    function index()
    {
        $data['title'] = "Dosen Pembimbing";
        $data['program_studi'] = $this->Main_model->allProdi();
        $this->load->view('lecture_view', $data);
    }
    function login()
    {
    }
    function addLecture()
    {
        $this->Main_model->addLecture();
    }
    function allLecture()
    {
        return $this->db->get('dosen')->result_array();
    }
}
