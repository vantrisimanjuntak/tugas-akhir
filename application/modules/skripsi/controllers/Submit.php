<?php class Submit extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Main_model');
    }
    function index()
    {
        $this->Main_model->submitSkripsi();
        redirect('skripsi');
    }
}
