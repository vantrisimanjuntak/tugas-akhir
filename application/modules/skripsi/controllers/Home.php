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
        $this->load->view('index', $data);
    }
    function submit()
    {
        echo "HAi";
        // $this->Main_model->submitSkripsi();
    }
    function checknim()
    {
        $this->Main_model->checknim();
    }
}
