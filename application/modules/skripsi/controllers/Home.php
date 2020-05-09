<?php class Home extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $data['title'] = "Portal Tugas Akhir";
        $this->load->view('index', $data);
    }
}
