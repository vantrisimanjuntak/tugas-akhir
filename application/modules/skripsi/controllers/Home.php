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
        $nim = $this->input->post('nim');
        if ($this->Main_model->checknim($nim)) {
            echo '<i class="fa fa-times" aria-hidden="true">&nbsp;nim tidak ada</i>';
        } else {
            echo 'NIM TIDAK ADA';
        }
    }
}
