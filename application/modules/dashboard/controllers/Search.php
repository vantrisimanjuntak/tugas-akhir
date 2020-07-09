<?php class Search extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Main_model');
    }
    function index()
    {
        if ($this->input->post('keyword') == '') {
            echo "KOSONG";
        } else {
            $this->Main_model->searchtitle($this->input->post('keyword'));
        }
    }
}
