<?php class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Main_model');
    }

    function index()
    {
        $keyword = $this->input->post('keyword');
        $data['title'] = "Portal Tugas Akhir";
        $data['hasil'] = $this->Main_model->searchtitle($this->input->post('keyword'));
        $this->load->view('home_view', $data);
    }
}
