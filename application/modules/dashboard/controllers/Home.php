<?php class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $data['title'] = "Portal Tugas Akhir";
        $this->load->view('home_view', $data);
    }
}
