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
        $this->load->view('home_view', $data);
    }
    function searchtitle()
    {

        $keyword = $this->input->post('judul_skripsi');
        $query = $this->Main_model->searchtitle($keyword);
        if ($query) {
            foreach ($query as $namaDosen => $nilai) {
                echo '<div class="container-fluid" style="border: 2px solid green">' . $namaDosen . '</div>';
                echo "<br>";
            }
        } else {
            return FALSE;
        }
    }
}
